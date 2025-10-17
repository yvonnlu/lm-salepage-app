<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Marketing That Actually Converts — Grow Your Revenue with Strategic Email Campaigns</title>
  <meta name="robots" content="noindex, nofollow">
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet">
  <style>
    :root {
      --orange-primary: #ff6a00;
      --orange-light: #ff8c42;
      --orange-glow: rgba(255, 106, 0, 0.15);
      --black: #0a0a0a;
      --white: #ffffff;
      --muted: #6b6b6b;
      --gradient-1: linear-gradient(135deg, #ff6a00 0%, #ff8c42 100%);
      --gradient-hero: radial-gradient(ellipse at top, rgba(255, 106, 0, 0.12), transparent 60%);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: Inter, system-ui, -apple-system, sans-serif;
      color: var(--black);
      background: var(--white);
      line-height: 1.65;
      -webkit-font-smoothing: antialiased;
      overflow-x: hidden;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 32px;
    }

    /* HIGHLIGHT TEXT EFFECT */
    .highlight {
      background: var(--gradient-1);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      font-weight: 800;
    }

    .badge {
      display: inline-block;
      background: var(--gradient-1);
      color: white;
      padding: 6px 16px;
      border-radius: 999px;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      box-shadow: 0 4px 20px rgba(255, 106, 0, 0.3);
      margin-bottom: 20px;
    }

    /* HERO SECTION */
    .hero {
      background:
        radial-gradient(ellipse at top left, rgba(255, 106, 0, 0.15), transparent 50%),
        radial-gradient(ellipse at bottom right, rgba(255, 140, 66, 0.1), transparent 50%),
        linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
      color: var(--white);
      padding: 80px 0 60px;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -10%;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(255, 106, 0, 0.2) 0%, transparent 70%);
      border-radius: 50%;
      filter: blur(80px);
      animation: pulse 8s ease-in-out infinite;
    }

    @keyframes pulse {

      0%,
      100% {
        transform: scale(1);
        opacity: 0.5;
      }

      50% {
        transform: scale(1.2);
        opacity: 0.8;
      }
    }

    .hero-grid {
      display: grid;
      grid-template-columns: 1.3fr 1fr;
      gap: 60px;
      align-items: start;
      position: relative;
      z-index: 1;
    }

    .hero h1 {
      font-size: 52px;
      font-weight: 900;
      line-height: 1.1;
      margin: 0 0 24px;
      letter-spacing: -0.02em;
      color: #ffffff;
    }

    .hero h1 .highlight {
      background: linear-gradient(135deg, #ffa559, #ff6a00);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .hero .lead {
      font-size: 20px;
      color: rgba(255, 255, 255, 0.9);
      margin-bottom: 32px;
      line-height: 1.7;
      font-weight: 500;
    }

    .hero .checkmarks {
      list-style: none;
      margin: 32px 0;
    }

    .hero .checkmarks li {
      padding: 14px 0 14px 40px;
      position: relative;
      font-size: 17px;
      color: #ffffff;
    }

    .hero .checkmarks li::before {
      content: '✓';
      position: absolute;
      left: 0;
      top: 14px;
      width: 28px;
      height: 28px;
      background: var(--gradient-1);
      border-radius: 50%;
      color: white;
      font-weight: 900;
      font-size: 14px;
      box-shadow: 0 4px 15px rgba(255, 106, 0, 0.4);
      text-align: center;
      line-height: 28px;
    }

    /* SECTION CHECKMARKS (for light backgrounds) */
    .checkmarks-light {
      list-style: none;
      margin: 24px 0;
    }

    .checkmarks-light li {
      padding: 14px 0 14px 40px;
      position: relative;
      font-size: 17px;
      color: #2a2a2a;
      line-height: 1.7;
    }

    .checkmarks-light li::before {
      content: '✓';
      position: absolute;
      left: 0;
      top: 14px;
      width: 28px;
      height: 28px;
      background: var(--gradient-1);
      border-radius: 50%;
      color: white;
      font-weight: 900;
      font-size: 14px;
      box-shadow: 0 4px 15px rgba(255, 106, 0, 0.4);
      text-align: center;
      line-height: 28px;
    }

    /* FORM CARD - MODERN GRADIENT */
    .form-card {
      background: linear-gradient(145deg, #ffffff 0%, #fafafa 100%);
      border-radius: 20px;
      padding: 36px;
      box-shadow:
        0 20px 60px rgba(0, 0, 0, 0.15),
        0 0 0 1px rgba(255, 106, 0, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.8);
      position: sticky;
      top: 24px;
      border: 2px solid transparent;
      background-clip: padding-box;
    }

    .form-card::before {
      content: '';
      position: absolute;
      inset: -2px;
      background: var(--gradient-1);
      border-radius: 20px;
      z-index: -1;
      opacity: 0.6;
    }

    .form-card h3 {
      font-size: 24px;
      margin-bottom: 10px;
      font-weight: 800;
      background: var(--gradient-1);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .form-card .muted {
      color: var(--muted);
      font-size: 15px;
      margin-bottom: 20px;
    }

    .urgency {
      display: flex;
      gap: 10px;
      margin-bottom: 20px;
      flex-wrap: wrap;
    }

    .pill {
      background: linear-gradient(135deg, #fff 0%, #f9f9f9 100%);
      border: 2px solid rgba(255, 106, 0, 0.2);
      padding: 10px 16px;
      border-radius: 999px;
      font-size: 13px;
      font-weight: 700;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
      white-space: nowrap;
    }

    .pill.dark {
      background: var(--gradient-1);
      color: #fff;
      border: 0;
      box-shadow: 0 4px 20px rgba(255, 106, 0, 0.3);
    }

    .form-card input {
      width: 100%;
      padding: 14px 18px;
      border: 2px solid #e5e5e5;
      border-radius: 12px;
      margin-bottom: 12px;
      font-size: 15px;
      transition: all 0.3s ease;
      background: white;
    }

    .form-card input:focus {
      outline: none;
      border-color: var(--orange-primary);
      box-shadow: 0 0 0 4px rgba(255, 106, 0, 0.1);
    }

    .btn-primary {
      display: block;
      width: 100%;
      padding: 16px;
      background: var(--gradient-1);
      color: #fff;
      border: 0;
      border-radius: 12px;
      font-weight: 800;
      font-size: 17px;
      cursor: pointer;
      box-shadow: 0 8px 30px rgba(255, 106, 0, 0.35);
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 12px 40px rgba(255, 106, 0, 0.45);
    }

    .form-foot {
      font-size: 13px;
      color: var(--muted);
      margin-top: 16px;
      text-align: center;
    }

    /* SECTIONS WITH GRADIENT ACCENTS */
    .section {
      padding: 80px 0;
      position: relative;
    }

    .section:nth-child(even) {
      background: linear-gradient(180deg, #fafafa 0%, #ffffff 100%);
    }

    .section h2 {
      font-size: 42px;
      margin-bottom: 20px;
      font-weight: 900;
      letter-spacing: -0.02em;
      line-height: 1.2;
    }

    .section h2 .highlight {
      background: var(--gradient-1);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .section p {
      color: #2a2a2a;
      font-size: 18px;
      line-height: 1.8;
    }

    .section ul,
    .section ol {
      margin-left: 20px;
      margin-top: 20px;
    }

    .section li {
      margin-bottom: 14px;
      font-size: 17px;
      line-height: 1.7;
    }

    /* TESTIMONIALS - MODERN CARDS */
    .testimonials {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 28px;
      margin-top: 40px;
    }

    .testimonial {
      background: linear-gradient(145deg, #ffffff 0%, #f9f9f9 100%);
      border: 1px solid rgba(255, 106, 0, 0.1);
      border-radius: 16px;
      padding: 28px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .testimonial::before {
      content: '"';
      position: absolute;
      top: -10px;
      left: 20px;
      font-size: 120px;
      color: rgba(255, 106, 0, 0.08);
      font-family: Georgia, serif;
      line-height: 1;
    }

    .testimonial:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 40px rgba(255, 106, 0, 0.15);
      border-color: rgba(255, 106, 0, 0.3);
    }

    .testimonial blockquote {
      font-size: 16px;
      line-height: 1.7;
      margin-bottom: 16px;
      color: #2a2a2a;
      position: relative;
      z-index: 1;
    }

    .testimonial cite {
      font-style: normal;
      font-weight: 700;
      color: var(--orange-primary);
      font-size: 14px;
    }

    /* FAQ - GRADIENT ACTIVE STATE */
    .faq-item {
      margin-bottom: 16px;
    }

    .faq-q {
      background: white;
      border: 2px solid #e5e5e5;
      padding: 18px 24px;
      border-radius: 12px;
      width: 100%;
      text-align: left;
      cursor: pointer;
      font-weight: 700;
      font-size: 16px;
      transition: all 0.3s ease;
      position: relative;
    }

    .faq-q:hover {
      border-color: var(--orange-primary);
      background: rgba(255, 106, 0, 0.02);
    }

    .faq-q.open {
      background: var(--gradient-1);
      color: #fff;
      border-color: transparent;
      box-shadow: 0 6px 25px rgba(255, 106, 0, 0.3);
    }

    .faq-a {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease;
      padding: 0 24px;
    }

    .faq-a p {
      padding: 20px 0;
      font-size: 16px;
    }

    /* VALUE STACK - PREMIUM LOOK */
    .value-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
      margin-top: 40px;
    }

    .value-item {
      background: linear-gradient(145deg, #ffffff, #fafafa);
      border: 2px solid rgba(255, 106, 0, 0.1);
      border-radius: 16px;
      padding: 24px;
      transition: all 0.3s ease;
    }

    .value-item:hover {
      border-color: var(--orange-primary);
      transform: translateY(-3px);
      box-shadow: 0 10px 35px rgba(255, 106, 0, 0.15);
    }

    .value-item strong {
      display: block;
      margin-bottom: 10px;
      font-size: 18px;
      font-weight: 800;
    }

    .value-item .price {
      background: var(--gradient-1);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: 900;
      font-size: 28px;
      margin-top: 12px;
    }

    .value-total {
      background: var(--gradient-1);
      color: #fff;
      padding: 30px;
      border-radius: 16px;
      text-align: center;
      margin-top: 24px;
      font-size: 32px;
      font-weight: 900;
      box-shadow: 0 12px 40px rgba(255, 106, 0, 0.4);
      letter-spacing: -0.02em;
    }

    /* CTA SECTION - DRAMATIC GRADIENT */
    .cta-section {
      background:
        radial-gradient(ellipse at center, rgba(255, 140, 66, 0.3), transparent 70%),
        linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
      color: #fff;
      padding: 100px 0;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .cta-section::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 600px;
      height: 600px;
      background: radial-gradient(circle, rgba(255, 106, 0, 0.2) 0%, transparent 70%);
      filter: blur(100px);
      animation: pulse 6s ease-in-out infinite;
    }

    .cta-section h2 {
      font-size: 48px;
      margin-bottom: 20px;
      font-weight: 900;
      position: relative;
      z-index: 1;
    }

    .cta-section h2 .highlight {
      background: linear-gradient(135deg, #ffa559, #ff6a00);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      filter: drop-shadow(0 0 20px rgba(255, 106, 0, 0.5));
    }

    .cta-section p {
      font-size: 20px;
      margin-bottom: 32px;
      color: rgba(255, 255, 255, 0.9);
      position: relative;
      z-index: 1;
    }

    .cta-section .btn-white {
      background: #fff;
      color: var(--orange-primary);
      padding: 18px 48px;
      border-radius: 12px;
      font-weight: 800;
      text-decoration: none;
      display: inline-block;
      font-size: 18px;
      box-shadow: 0 10px 40px rgba(255, 255, 255, 0.2);
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      position: relative;
      z-index: 1;
    }

    .cta-section .btn-white:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 50px rgba(255, 255, 255, 0.3);
    }

    /* FOOTER */
    footer {
      padding: 50px 0;
      text-align: center;
      color: var(--muted);
      font-size: 14px;
      background: #0a0a0a;
      color: rgba(255, 255, 255, 0.6);
    }

    /* RESPONSIVE */
    @media (max-width: 968px) {
      .hero-grid {
        grid-template-columns: 1fr;
        gap: 40px;
      }

      .hero h1 {
        font-size: 36px;
      }

      .section h2 {
        font-size: 32px;
      }

      .form-card {
        position: relative;
        top: 0;
      }

      .testimonials {
        grid-template-columns: 1fr;
      }

      .container {
        padding: 0 20px;
      }
    }
  </style>
</head>

<body>

  <!-- HERO -->
  <section class="hero">
    <div class="container">
      <div class="hero-grid">
        <div>
          <span class="badge">✨ Your Email Growth Partner</span>
          <h1>Turn Your <span class="highlight">Email List</span> Into a Revenue-Generating <span class="highlight">Machine</span></h1>
          <p class="lead">I'm not just another email marketer — I'm your <strong>Email Growth Partner</strong>. Strategic campaigns, high-converting copy, and proven automation that drives sales while you focus on running your business.</p>
          <ul class="checkmarks">
            <li>Complete email strategy tailored to your business goals</li>
            <li>High-converting email sequences that sell on autopilot</li>
            <li>Professional copywriting that resonates with your audience</li>
            <li>Campaign setup, testing, and ongoing optimization</li>
            <li>14-day money-back guarantee — risk-free partnership</li>
          </ul>
        </div>
        <div>
          <div class="form-card">
            <h3>Partner With Me Today</h3>
            <p class="muted">Let's grow your email revenue together</p>
            <div class="urgency">
              <span class="pill">🔥 <strong id="slotsLeft">7</strong> spots available this month</span>
              <span class="pill dark">⏳ Bonus ends in <strong id="countdown"></strong></span>
            </div>
            <form method="POST" action="{{ route('leadmagnet.submit') }}" id="leadForm">
              @csrf
              <input type="text" name="school_name" placeholder="Your Business Name" required>
              <input type="text" name="your_name" placeholder="Your Name" required>
              <input type="email" name="email" placeholder="Email Address" required>
              <input type="tel" name="phone" placeholder="Phone Number" required>
              <button type="submit" class="btn-primary">Get My Email Strategy Call →</button>
            </form>
            <div style="margin-top:18px; margin-bottom:6px; background:rgba(255,106,0,0.07); border-radius:8px; padding:14px 18px; color:#222; font-size:15px; text-align:center;">
              <strong>14-Day Money-Back Guarantee:</strong> Work with me for 14 days. If you're not seeing results or satisfied with the strategy, I'll refund your investment — <span style="color:#ff6a00;font-weight:700;">100% money back, no questions asked</span>.
            </div>
            <p class="form-foot">🔒 We respect your privacy. No spam, ever.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STORY -->
  <section class="section">
    <div class="container">
      <h2>Why <span class="highlight">Email Marketing</span> Still Works in 2025</h2>
      <p>Social media algorithms change overnight. Ads get more expensive every month. But email? Email is the one channel you <strong>own</strong>.</p>
      <p>Here's the reality: For every $1 you spend on email marketing, you get <strong>$36-$42 back</strong> (DMA/Litmus 2024). That's a 3,600%-4,200% ROI. No other marketing channel comes close.</p>
      <p>But here's the catch — <strong>most businesses are doing email marketing wrong</strong>. They send boring newsletters nobody reads, or they blast the same generic promotions to everyone. That's why I focus on strategic, personalized campaigns that actually convert.</p>
      <p><strong>My average client sees a 25-35% open rate and 4-8% click-through rate</strong> — 3x better than industry average. That means more clicks, more sales, and more revenue from the same email list.</p>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="section">
    <div class="container">
      <h2>How It Works <span class="highlight">(Simple 4-Step Process)</span></h2>
      <ol>
        <li><strong>Strategy Call (Week 1)</strong> — We dive deep into your business, audience, and goals. I'll audit your current email marketing and create a custom strategy.</li>
        <li><strong>Campaign Creation (Week 2-3)</strong> — I'll write high-converting email sequences, design templates, and set up automation in your email platform.</li>
        <li><strong>Launch & Optimize (Week 4)</strong> — We launch your campaigns, monitor performance, and optimize based on real data.</li>
        <li><strong>Ongoing Management (Monthly)</strong> — I'll continue managing your email marketing, creating new campaigns, and improving results month after month.</li>
      </ol>
      <p style="margin-top: 16px;"><strong>You get:</strong> Strategy, copywriting, design, setup, and ongoing optimization — all handled for you.</p>
    </div>
  </section>

  <!-- PROOF -->
  <section class="section">
    <div class="container">
      <h2>Real Results from <span class="highlight">Real Clients</span></h2>
      <div class="testimonials">
        <div class="testimonial">
          <blockquote>"Our email revenue went from $12K/month to $47K/month in just 90 days. The automated sequences alone generate $18K monthly on autopilot."</blockquote>
          <cite>— Jennifer Park, Course Creator @ Digital Mastery Academy</cite>
        </div>
        <div class="testimonial">
          <blockquote>"I was sending emails randomly with 8% open rates. Now we're consistently hitting 32% opens and 6% clicks. Sales are up 240%."</blockquote>
          <cite>— Marcus Johnson, Coach @ Elite Performance Coaching</cite>
        </div>
        <div class="testimonial">
          <blockquote>"Best investment I made this year. Email marketing now brings in 60% of our monthly revenue. It's completely transformed our business."</blockquote>
          <cite>— Sarah Chen, Founder @ Wellness Breakthrough</cite>
        </div>
      </div>
    </div>
  </section>

  <!-- GUARANTEE -->
  <section class="section">
    <div class="container">
      <h2>14-Day <span class="highlight">Money-Back Guarantee</span></h2>
      <p><strong>Partner with me for 14 days.</strong></p>
      <p>If you're not seeing measurable improvements in your email performance—better open rates, more engagement, or a clearer path to revenue—you can walk away with a <strong>full refund</strong>.</p>
      <p>As your Email Growth Partner, I only succeed when you succeed. That's why I stand behind my work completely.</p>
      <p style="margin-top: 20px; font-style: italic; color: #6b6b6b;">No contracts. No pressure. Just real results or your money back.</p>
    </div>
  </section>

  <!-- FUTURE PACING -->
  <section class="section">
    <div class="container">
      <h2>Imagine This: <span class="highlight">90 Days from Now</span></h2>
      <p>You wake up to <strong>$3,200 in email-driven revenue</strong> — while you slept. Your automated sequences are running 24/7.</p>
      <p>Your weekly campaigns consistently hit 30%+ open rates. Your subscribers are engaged, clicking, and buying. You've turned your email list into a predictable revenue channel.</p>
      <p>Your cost per sale? <strong>Lower than any ad platform</strong>. Your time spent on campaigns? <strong>Minimal, because the system runs itself</strong>. Your revenue? <strong>Growing month after month</strong>.</p>
      <p><strong>This is what strategic email marketing does.</strong> It generates revenue 24/7, building real relationships while you focus on delivering your core product or service.</p>
    </div>
  </section>

  <!-- HANDLE OBJECTIONS -->
  <section class="section">
    <div class="container">
      <h2>But Wait… Why Should I Trust You?</h2>
      <p>Fair question. Here's why:</p>
      <ul>
        <li><strong>I've done this before.</strong> I've built high-converting email campaigns for businesses across multiple niches. I know what drives opens, clicks, and sales.</li>
        <li><strong>I stand behind my work.</strong> The 14-day money-back guarantee means you risk nothing. If you're not seeing results, you get a full refund.</li>
        <li><strong>I work with limited clients.</strong> I can't work with everyone. I focus on quality over quantity — which means you get my full attention and best strategies.</li>
        <li><strong>Results matter more than promises.</strong> I focus on metrics that matter: open rates, click rates, and revenue. If the numbers don't improve, I'm not doing my job.</li>
      </ul>
    </div>
  </section>

  <!-- REVERSE PSYCHOLOGY -->
  <section class="section">
    <div class="container">
      <h2>This is FOR You If...</h2>
      <ul class="checkmarks-light">
        <li>You have an email list (or want to start building one)</li>
        <li>You're tired of sending emails with poor results</li>
        <li>You want consistent revenue from your list, not just occasional sales</li>
        <li>You're willing to implement proven strategies</li>
        <li>You value ROI-focused campaigns and clear metrics</li>
      </ul>
      <h2 style="margin-top: 40px;">This is NOT For You If...</h2>
      <ul style="list-style: none; margin: 24px 0 0 0;">
        <li style="padding: 14px 0 14px 40px; position: relative; color: #2a2a2a; line-height: 1.7;">
          <span style="position: absolute; left: 0; top: 14px; width: 28px; height: 28px; background: #d93025; border-radius: 50%; color: white; font-weight: 900; font-size: 18px; text-align: center; line-height: 28px; box-shadow: 0 4px 15px rgba(217, 48, 37, 0.3);">✗</span>
          You're not ready to invest in email marketing growth
        </li>
        <li style="padding: 14px 0 14px 40px; position: relative; color: #2a2a2a; line-height: 1.7;">
          <span style="position: absolute; left: 0; top: 14px; width: 28px; height: 28px; background: #d93025; border-radius: 50%; color: white; font-weight: 900; font-size: 18px; text-align: center; line-height: 28px; box-shadow: 0 4px 15px rgba(217, 48, 37, 0.3);">✗</span>
          You expect instant sales without building subscriber relationships
        </li>
        <li style="padding: 14px 0 14px 40px; position: relative; color: #2a2a2a; line-height: 1.7;">
          <span style="position: absolute; left: 0; top: 14px; width: 28px; height: 28px; background: #d93025; border-radius: 50%; color: white; font-weight: 900; font-size: 18px; text-align: center; line-height: 28px; box-shadow: 0 4px 15px rgba(217, 48, 37, 0.3);">✗</span>
          You're just "browsing" and have no intention of taking action
        </li>
        <li style="padding: 14px 0 14px 40px; position: relative; color: #2a2a2a; line-height: 1.7;">
          <span style="position: absolute; left: 0; top: 14px; width: 28px; height: 28px; background: #d93025; border-radius: 50%; color: white; font-weight: 900; font-size: 18px; text-align: center; line-height: 28px; box-shadow: 0 4px 15px rgba(217, 48, 37, 0.3);">✗</span>
          You want quick fixes instead of sustainable email revenue systems
        </li>
      </ul>
    </div>
  </section>

  <!-- TWO OPTIONS -->
  <section class="section">
    <div class="container">
      <h2>You Have Two Choices Right Now</h2>
      <p><strong>Option 1:</strong> Keep sending random emails with mediocre results. Keep watching competitors generate consistent revenue while your list sits cold. Keep wondering why email marketing "doesn't work" for you.</p>
      <p><strong>Option 2:</strong> Partner with me as your Email Growth Partner, backed by a 14-day money-back guarantee, and start turning your list into consistent income.</p>
      <p>Which sounds better?</p>
    </div>
  </section>

  <!-- SCARCITY -->
  <section class="section">
    <div class="container">
      <h2>Limited <span class="highlight">Availability</span> This Month</h2>
      <p>I work with a limited number of clients each month to ensure quality. When my schedule is full, new clients will need to wait.</p>
      <p>Right now, <strong id="slotsLeft2">7</strong> spots remain for this month. Don't wait — these fill up quickly.</p>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section">
    <div class="container">
      <h2>Frequently Asked <span class="highlight">Questions</span></h2>
      <div class="faq-item">
        <button class="faq-q">How does the 14-day guarantee work?</button>
        <div class="faq-a">
          <p>Partner with me for 14 days as your Email Growth Partner. If you're not seeing measurable improvements or you're unsatisfied with the strategy, you get a full refund. No questions asked.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-q">What email platforms do you work with?</button>
        <div class="faq-a">
          <p>I work with all major platforms: Mailchimp, ConvertKit, ActiveCampaign, Klaviyo, MailerLite, and more. If you use something different, I can likely still help.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-q">How long does it take to see results?</button>
        <div class="faq-a">
          <p>Most clients see improved open rates within the first 2-3 campaigns. Revenue typically increases within 30-60 days as automated sequences mature and audience engagement grows.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-q">Do you write the emails yourself?</button>
        <div class="faq-a">
          <p>Yes. I handle all copywriting, strategy, and implementation. You approve the content, I do the heavy lifting.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-q">What types of campaigns do you create?</button>
        <div class="faq-a">
          <p>Welcome sequences, promotional campaigns, abandoned cart flows, re-engagement campaigns, product launches, and ongoing nurture emails. Whatever drives revenue for your business.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-q">What's your pricing?</button>
        <div class="faq-a">
          <p>Every business is different, so pricing varies based on list size, campaign complexity, and ongoing management needs. After our strategy call, I'll provide a clear quote with no hidden fees.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- BONUS -->
  <section class="section">
    <div class="container">
      <h2>🎁 Exclusive 48-Hour Bonus</h2>
      <p>If you claim your spot in the next <strong id="countdown2"></strong>, you'll get:</p>
      <ul>
        <li><strong>A free email deliverability audit</strong> (worth $500) — I'll analyze your sender reputation, spam triggers, and technical setup to maximize inbox placement.</li>
        <li><strong>10 proven email subject line templates</strong> that consistently achieve 30%+ open rates across multiple industries.</li>
      </ul>
      <p>This bonus disappears when the timer hits zero. Don't miss it.</p>
    </div>
  </section>

  <!-- VALUE STACK -->
  <section class="section">
    <div class="container">
      <h2>What You Get as Your <span class="highlight">Email Growth Partner</span></h2>
      <div class="value-grid">
        <div class="value-item">
          <strong>Strategic Email Campaign Planning</strong>
          <p>Custom strategy tailored to your business goals, audience, and revenue targets.</p>
          <div class="price">Included</div>
        </div>
        <div class="value-item">
          <strong>Professional Email Copywriting</strong>
          <p>High-converting email copy that drives opens, clicks, and sales.</p>
          <div class="price">Included</div>
        </div>
        <div class="value-item">
          <strong>Automated Sequence Setup</strong>
          <p>Welcome sequences, nurture campaigns, and sales funnels that work 24/7.</p>
          <div class="price">Included</div>
        </div>
        <div class="value-item">
          <strong>Performance Tracking & Optimization</strong>
          <p>Monthly reports with open rates, click rates, and revenue metrics. Continuous improvement.</p>
          <div class="price">Included</div>
        </div>
        <div class="value-item">
          <strong>Deliverability Audit (Bonus)</strong>
          <p>Technical audit to maximize inbox placement and avoid spam filters.</p>
          <div class="price">Bonus</div>
        </div>
        <div class="value-item">
          <strong>14-Day Money-Back Guarantee</strong>
          <p>Not seeing results? Get a full refund. No questions asked.</p>
          <div class="price">Peace of Mind</div>
        </div>
      </div>
    </div>
  </section>

  <!-- EMOTIONAL TRIGGERS -->
  <section class="section">
    <div class="container">
      <h2>The Real Cost of <span class="highlight">Doing Nothing</span></h2>
      <p>Every day you wait, your competitors are building stronger relationships with their subscribers. They're generating consistent revenue from email. They're automating their sales process while you're still manually chasing customers.</p>
      <p>Meanwhile, you're leaving money on the table. Your email list sits cold or underutilized. Your campaigns get ignored. Your revenue stays flat.</p>
      <p><strong>Six months from now, you'll wish you started today.</strong></p>
      <p>This is your chance to turn email into a real revenue channel — backed by a 14-day money-back guarantee. Don't let it slip by.</p>
    </div>
  </section>

  <!-- ONE-TIME OFFER -->
  <section class="section">
    <div class="container">
      <h2>Limited Availability This Month</h2>
      <p>I work with a limited number of clients each month to ensure every project gets my full attention and delivers results.</p>
      <p>When my schedule is full, new clients will need to wait until next month.</p>
      <p><strong>This is your window. Take it.</strong></p>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="cta-section">
    <div class="container">
      <h2>Ready to Transform Your <span class="highlight">Email Revenue</span>?</h2>
      <p>Let's turn your email list into consistent income. <strong id="slotsLeft3">7</strong> spots available this month.</p>
      <a href="#leadForm" class="btn-white">Get My Email Strategy Call →</a>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2025 Your Email Growth Partner. All rights reserved.</p>
    </div>
  </footer>

  <script>
    // COUNTDOWN - Set to 48 hours from now
    const endTime = new Date(Date.now() + 48 * 60 * 60 * 1000).getTime();

    function updateCountdown() {
      const now = new Date().getTime();
      const distance = endTime - now;
      if (distance < 0) {
        document.getElementById('countdown').textContent = 'EXPIRED';
        document.getElementById('countdown2').textContent = 'EXPIRED';
        return;
      }
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);
      const formatted = `${hours}h ${minutes}m ${seconds}s`;
      document.getElementById('countdown').textContent = formatted;
      document.getElementById('countdown2').textContent = formatted;
    }
    updateCountdown();
    setInterval(updateCountdown, 1000);

    // FAQ ACCORDION
    document.querySelectorAll('.faq-q').forEach(btn => {
      btn.addEventListener('click', () => {
        const isOpen = btn.classList.contains('open');
        document.querySelectorAll('.faq-q').forEach(b => b.classList.remove('open'));
        document.querySelectorAll('.faq-a').forEach(a => a.style.maxHeight = null);
        if (!isOpen) {
          btn.classList.add('open');
          const answer = btn.nextElementSibling;
          answer.style.maxHeight = answer.scrollHeight + 'px';
        }
      });
    });

    // SMOOTH SCROLL
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      });
    });

    // FORM SUBMIT OVERLAY
    document.getElementById('leadForm').addEventListener('submit', function() {
      const overlay = document.createElement('div');
      overlay.style.cssText = 'position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.6);display:flex;align-items:center;justify-content:center;z-index:9999;';
      overlay.innerHTML = '<div style="background:#fff;padding:40px;border-radius:12px;text-align:center;"><h2>Submitting...</h2><p>Please wait.</p></div>';
      document.body.appendChild(overlay);
    });
  </script>

</body>

</html>