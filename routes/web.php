<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\LeadMagnetReceived;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

// Lead Magnet landing page (one-page sale page)
Route::get('/lead-magnet', function () {
    // meta storage for slots and bonus expiry
    $metaFile = storage_path('app/leadmagnet_meta.json');
    if (!file_exists($metaFile)) {
        $meta = [
            'slots_total' => 10,
            'created_at' => now()->toDateTimeString(),
            'bonus_expires_at' => now()->addHours(48)->toIsoString(),
        ];
        file_put_contents($metaFile, json_encode($meta));
    } else {
        $meta = json_decode(file_get_contents($metaFile), true);
        // ensure keys exist
        $meta['slots_total'] = $meta['slots_total'] ?? 10;
        $meta['bonus_expires_at'] = $meta['bonus_expires_at'] ?? now()->addHours(48)->toIsoString();
    }

    // count submissions from CSV to compute slots remaining
    $csvFile = storage_path('app/leadmagnet_submissions.csv');
    $submissions = 0;
    if (file_exists($csvFile)) {
        $lines = count(file($csvFile));
        // subtract header if present
        if ($lines > 0) $submissions = max(0, $lines - 1);
    }

    $slotsRemaining = max(0, ($meta['slots_total'] ?? 10) - $submissions);

    return view('leadmagnet', [
        'slotsRemaining' => $slotsRemaining,
        'bonusEndsAt' => $meta['bonus_expires_at'],
    ]);
})->name('leadmagnet');

Route::post('/lead-magnet/submit', function (Request $request) {
    $data = $request->validate([
        'school_name' => 'required|string|max:200',
        'your_name' => 'required|string|max:200',
        'email' => 'required|email|max:200',
        'phone' => 'required|string|max:50',
    ]);

    $file = storage_path('app/leadmagnet_submissions.csv');
    $header = !file_exists($file) ? ["timestamp","school_name","your_name","email","phone"] : null;
    $row = [
        now()->toDateTimeString(), 
        $data['school_name'], 
        $data['your_name'], 
        $data['email'], 
        $data['phone']
    ];

    $fh = fopen($file, 'a');
    if ($header) {
        fputcsv($fh, $header);
    }
    fputcsv($fh, $row);
    fclose($fh);

    // send confirmation email (safe fallback to log)
    try {
        Mail::to($data['email'])->send(new LeadMagnetReceived([
            'name' => $data['your_name'],
            'email' => $data['email'],
            'school' => $data['school_name'],
            'phone' => $data['phone'],
        ]));
    } catch (\Throwable $e) {
        Log::error('Lead magnet mail failed: '.$e->getMessage());
    }

    return redirect()->route('leadmagnet.thankyou');
})->name('leadmagnet.submit');

Route::get('/lead-magnet/thank-you', function () {
    return view('leadmagnet-thankyou');
})->name('leadmagnet.thankyou');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
