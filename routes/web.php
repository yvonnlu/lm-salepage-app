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
    return view('leadmagnet');
})->name('leadmagnet');

Route::post('/lead-magnet/submit', function (Request $request) {
    $data = $request->validate([
        'school_name' => 'required|string|max:200',
        'your_name' => 'required|string|max:200',
        'email' => 'required|email|max:200',
        'phone' => 'required|string|max:50',
    ]);

    $file = storage_path('app/leadmagnet_submissions.csv');
    $header = !file_exists($file) ? ["timestamp", "school_name", "your_name", "email", "phone"] : null;
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
        Log::error('Lead magnet mail failed: ' . $e->getMessage());
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

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
