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
            <li><strong>⚡ 14-Day Risk-Free Strategy Sprint</strong> — You don't pay a cent if we're not a perfect match</li>
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

  <!-- GUARANTEE -->
  <section class="section" style="background: linear-gradient(135deg, #fff5f0 0%, #fff 100%);">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto;">
        <h2 style="text-align: center;">⚡ Your Risk-Free Start: <span class="highlight">The 14-Day Strategy Sprint</span></h2>
        
        <div style="background: white; border-radius: 16px; padding: 40px; box-shadow: 0 8px 30px rgba(255, 106, 0, 0.1); border: 2px solid rgba(255, 106, 0, 0.1); margin-top: 30px;">
          
          <p style="font-size: 20px; font-weight: 700; color: #2a2a2a; margin-bottom: 24px; text-align: center;">
            You don't pay me a cent if we're not a good match.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
            We'll partner together for <strong>14 days — completely risk-free</strong>.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
            You'll see exactly how I research, plan, and design an email system customized to your brand. <strong>No guesswork. No fluff.</strong> Just real, actionable work from day one.
          </p>
          
          <div style="background: rgba(255, 106, 0, 0.05); border-left: 4px solid #ff6a00; padding: 20px; margin: 24px 0; border-radius: 8px;">
            <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 12px;">
              <strong>If by the end of 14 days you don't feel we're a perfect fit?</strong>
            </p>
            <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a;">
              You walk away — <strong style="color: #ff6a00;">no invoice, no hard feelings, zero payment required</strong>.
            </p>
          </div>
          
          <p style="font-size: 19px; font-weight: 700; color: #2a2a2a; margin: 28px 0 16px 0;">
            But if you do? 💥
          </p>
          
          <p style="font-size: 18px; font-weight: 800; color: #ff6a00; margin-bottom: 20px; letter-spacing: 0.5px;">
            That's when the magic happens.
          </p>
          
          <ul style="list-style: none; margin: 20px 0; padding: 0;">
            <li style="padding: 10px 0 10px 32px; position: relative; font-size: 17px; line-height: 1.7;">
              <span style="position: absolute; left: 0; top: 10px; color: #ff6a00; font-size: 20px;">✓</span>
              We start building something that <strong>grows</strong> — turning contacts into <strong>loyal fans</strong>
            </li>
            <li style="padding: 10px 0 10px 32px; position: relative; font-size: 17px; line-height: 1.7;">
              <span style="position: absolute; left: 0; top: 10px; color: #ff6a00; font-size: 20px;">✓</span>
              I treat every single person on your list like a <strong>real person</strong>, not just a database entry
            </li>
            <li style="padding: 10px 0 10px 32px; position: relative; font-size: 17px; line-height: 1.7;">
              <span style="position: absolute; left: 0; top: 10px; color: #ff6a00; font-size: 20px;">✓</span>
              Each email is crafted for their <strong>actual needs</strong>, not generic mass blasts
            </li>
          </ul>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-top: 24px;">
            After 14 days, you'll receive a <strong>detailed proposal</strong> — a clear, data-backed plan built from my full experience and research.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-top: 16px;">
            If you believe it's worth it, we move forward. If not — you walk away without paying a single cent.
          </p>
          
          <p style="font-size: 20px; font-weight: 800; color: #ff6a00; text-align: center; margin-top: 32px; padding-top: 24px; border-top: 2px solid rgba(255, 106, 0, 0.1);">
            Simple. Fair. Zero risk.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY I DO IT THIS WAY -->
  <section class="section" style="background: linear-gradient(135deg, #fff9f5 0%, #fff 100%);">
    <div class="container">
      <h2>💭 Why I Do It <span class="highlight">This Way</span></h2>
      
      <div style="max-width: 800px; margin: 0 auto;">
        <p style="font-size: 18px; line-height: 1.8; color: #2a2a2a; margin-bottom: 20px;">
          Because when I work with someone...
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          <strong>I don't just care about the project</strong> — I care about the <strong>people behind it</strong>.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          Because I'm not like those who write a few emails, send the invoice, and disappear.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          I care about <strong>what happens after</strong> — the growth, the revenue, and how your audience actually responds.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 20px;">
          Every project I take on, I treat like <strong>my own business</strong> — because I believe in <strong>long-term partnerships</strong>, not one-time gigs.
        </p>
        
        <p style="font-size: 18px; font-weight: 700; color: #ff6a00; margin: 30px 0 20px 0;">
          That's why some of my clients eventually become my friends.
        </p>
        
        <div style="text-align: center; margin: 30px 0;">
          <div style="display: inline-block; padding: 20px; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
            <p style="font-size: 48px; margin: 0;">👥</p>
            <p style="font-size: 14px; color: #888; margin: 10px 0 0 0; font-style: italic;">[Client friendship moments]</p>
          </div>
        </div>
        
        <p style="font-size: 16px; line-height: 1.8; color: #2a2a2a; margin-top: 24px;">
          We hang out, talk business, share wins, and keep pushing each other forward.
        </p>
        
        <p style="font-size: 16px; line-height: 1.8; color: #555; margin-top: 16px; font-style: italic;">
          (Yes, email marketing can actually build friendships — who knew? 😄)
        </p>
      </div>
    </div>
  </section>

  <!-- WHY I CHOSE EMAIL -->
  <section class="section">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto;">
        <h2>From Why I Care to <span class="highlight">Why Email</span></h2>
        <p style="font-size: 18px; line-height: 1.8; color: #2a2a2a; margin-bottom: 20px;">
          Because if I'm going to put my heart into something, <strong>I'd better choose a tool that actually lasts</strong>.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          See, I've watched too many brands build their empire on <strong>rented land</strong> — one algorithm change, and poof! their audience disappears overnight.
        </p>
        
        <div style="background: rgba(217, 48, 37, 0.05); border-left: 4px solid #d93025; padding: 20px; margin: 24px 0; border-radius: 8px;">
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 12px;">
            <strong>Take 2023 for example:</strong>
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a;">
            When Meta updated its ad policy, over <strong>200,000 business accounts got restricted overnight</strong>. Many of those brands lost 80–90% of their traffic in just a week.
          </p>
        </div>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          But here's the thing — <strong>I'm not saying social media doesn't work</strong>.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          In fact, it's amazing for discovery, connection, and storytelling.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          But if you stop there, you're only halfway through the customer journey.
        </p>
        
        <p style="font-size: 18px; font-weight: 700; color: #ff6a00; margin: 24px 0 16px 0;">
          The real magic happens after someone discovers you.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          When you keep showing up in their inbox, build trust through consistency, and turn that first impression into a lasting relationship.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          That's why I believe in building something that's <strong>yours</strong> — not the platform's, not the algorithm's.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          Something they own. Something that lets you connect directly with people who care about your brand, your product, and your story.
        </p>
        
        <p style="font-size: 19px; font-weight: 800; color: #ff6a00; margin: 28px 0 16px 0; text-align: center;">
          That's why I chose email.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; text-align: center; font-style: italic;">
          It's not about replacing social — it's about reinforcing it.
        </p>
        
        <p style="font-size: 18px; font-weight: 700; color: #2a2a2a; margin-top: 20px; text-align: center;">
          It's yours. Forever.
        </p>
      </div>
    </div>
  </section>

  <!-- THE TRUTH ABOUT EMAIL -->
  <section class="section" style="background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%);">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto;">
        <h2>The Truth About <span class="highlight">"Old-School"</span> Email Marketing</h2>
        
        <p style="font-size: 18px; line-height: 1.8; color: #2a2a2a; margin-bottom: 20px;">
          People say "Email marketing is dead."
        </p>
        
        <p style="font-size: 18px; line-height: 1.8; color: #2a2a2a; margin-bottom: 24px;">
          Well… if that's true, it's the most profitable ghost I've ever seen. 👻
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          Because while social media platforms rise and fall, email stays solid.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          It's not sexy. It's not trending.
        </p>
        
        <p style="font-size: 18px; font-weight: 700; color: #ff6a00; margin-bottom: 20px;">
          But it's the only marketing channel you truly own.
        </p>
        
        <ul style="list-style: none; margin: 24px 0; padding: 0;">
          <li style="padding: 10px 0 10px 32px; position: relative; font-size: 17px; line-height: 1.7;">
            <span style="position: absolute; left: 0; top: 10px; color: #d93025; font-size: 20px;">⚠️</span>
            Social media algorithms change overnight
          </li>
          <li style="padding: 10px 0 10px 32px; position: relative; font-size: 17px; line-height: 1.7;">
            <span style="position: absolute; left: 0; top: 10px; color: #d93025; font-size: 20px;">⚠️</span>
            Ad costs go up every month
          </li>
          <li style="padding: 10px 0 10px 32px; position: relative; font-size: 17px; line-height: 1.7;">
            <span style="position: absolute; left: 0; top: 10px; color: #d93025; font-size: 20px;">⚠️</span>
            One "community guidelines" mistake? <strong>Boom</strong> — account restricted, reach gone
          </li>
        </ul>
        
        <div style="background: white; border: 2px solid rgba(217, 48, 37, 0.2); border-radius: 12px; padding: 30px; margin: 32px 0;">
          <p style="font-size: 17px; font-weight: 700; color: #2a2a2a; margin-bottom: 16px;">
            Think about TikTok:
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 12px;">
            You can spend <strong>months</strong> building your account — posting daily, growing your followers, engaging your audience.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 12px;">
            Then one morning… <strong style="color: #d93025;">boom</strong>.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 12px;">
            Your account's gone because of a random "community guidelines" violation.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a;">
            All your content, followers, and views — <strong>vanished overnight</strong>.
          </p>
        </div>
        
        <p style="font-size: 18px; line-height: 1.8; color: #2a2a2a; margin: 24px 0 16px 0;">
          That's like building a beautiful house on <strong>rented land</strong>.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          It looks amazing, it brings attention, but it's not yours.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 24px;">
          The landlord (a.k.a. the algorithm) can kick you out anytime.
        </p>
        
        <div style="background: linear-gradient(135deg, #fff5f0 0%, #fff 100%); border-left: 4px solid #ff6a00; padding: 30px; margin: 32px 0; border-radius: 12px; box-shadow: 0 4px 20px rgba(255, 106, 0, 0.08);">
          <p style="font-size: 19px; font-weight: 800; color: #ff6a00; margin-bottom: 16px;">
            But email?
          </p>
          
          <p style="font-size: 18px; font-weight: 700; color: #2a2a2a; margin-bottom: 12px;">
            That's your land.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 8px;">
            You own it.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
            You decide the soil, the water, the sunlight.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a;">
            You can plant seeds from social, SEO, or ads — <strong>and then grow them your way</strong>.
          </p>
        </div>
        
        <div style="text-align: center; margin: 40px 0;">
          <div style="display: inline-block; padding: 30px; background: white; border-radius: 16px; box-shadow: 0 8px 30px rgba(0,0,0,0.08); border: 2px solid rgba(255, 106, 0, 0.1);">
            <p style="font-size: 64px; margin: 0 0 12px 0;">🏡</p>
            <p style="font-size: 16px; color: #2a2a2a; margin: 0; line-height: 1.6; max-width: 300px;">
              <strong>Your email list = Your home</strong><br>
              <span style="color: #888; font-size: 14px;">A place where you nurture trust, relationships, and repeat customers</span>
            </p>
          </div>
        </div>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          That's what makes email so powerful.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          <strong>Social media helps you get discovered</strong>, but <strong>email helps you build a home for your audience</strong> — a place where you can nurture trust, relationships, and repeat customers.
        </p>
        
        <p style="font-size: 16px; line-height: 1.8; color: #555; margin-top: 32px; font-style: italic;">
          Unless one day every email platform — Gmail, Outlook, Apple Mail — collapses (which would be a wild day 😂), email marketing isn't going anywhere.
        </p>
        
        <p style="font-size: 15px; line-height: 1.7; color: #888; margin-top: 12px; font-style: italic;">
          When that happens, sure, marketing will change completely — and I kinda hope I'm still around to see how humans sell stuff in that new era LOL.
        </p>
      </div>
    </div>
  </section>

  <!-- THE NUMBERS -->
  <section class="section">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto;">
        <h2 style="text-align: center;">Must be <span class="highlight">impressive talking numbers</span>…</h2>
        
        <div style="background: linear-gradient(135deg, #fff5f0 0%, #fff 100%); border: 3px solid #ff6a00; border-radius: 16px; padding: 40px; margin: 40px 0; text-align: center; box-shadow: 0 8px 30px rgba(255, 106, 0, 0.15);">
          <p style="font-size: 18px; line-height: 1.8; color: #2a2a2a; margin-bottom: 20px;">
            For every <strong>$1</strong> you spend on email marketing, you get <strong style="color: #ff6a00;">$36–$42</strong> back (DMA/Litmus 2024).
          </p>
          <p style="font-size: 24px; font-weight: 900; color: #ff6a00; margin: 0;">
            That's a 3,600%–4,200% ROI.
          </p>
        </div>
        
        <div style="text-align: center; margin: 40px 0;">
          <div style="display: inline-block; padding: 30px; background: white; border-radius: 16px; box-shadow: 0 8px 30px rgba(0,0,0,0.08); border: 2px solid rgba(255, 106, 0, 0.1);">
            <p style="font-size: 48px; margin: 0 0 12px 0;">📊</p>
            <p style="font-size: 14px; color: #888; margin: 0; font-style: italic; max-width: 280px;">
              [Expert quotes on email marketing ROI or revenue generated from email campaigns]
            </p>
          </div>
        </div>
        
        <p style="font-size: 18px; line-height: 1.8; color: #2a2a2a; margin: 32px 0 16px 0; text-align: center;">
          No ad campaign or viral video can match that.
        </p>
        
        <p style="font-size: 19px; font-weight: 700; color: #2a2a2a; margin: 24px 0;">
          And yet…
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          Most businesses still do it wrong.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 20px;">
          They send the same generic promotions to everyone, or boring newsletters nobody reads.
        </p>
        
        <p style="font-size: 18px; font-weight: 700; color: #ff6a00; margin: 28px 0 16px 0;">
          That's where I come in.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          I design email systems that feel <strong>personal, relevant, and human</strong>.
        </p>
        
        <div style="background: rgba(255, 106, 0, 0.05); border-left: 4px solid #ff6a00; padding: 24px; margin: 28px 0; border-radius: 8px;">
          <p style="font-size: 18px; font-weight: 700; color: #2a2a2a; margin-bottom: 12px;">
            My average client sees 25–35% open rates and 4–8% click-through rates
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a;">
            — that's <strong>3x higher</strong> than industry average.
          </p>
        </div>
        
        <div style="text-align: center; margin: 40px 0;">
          <div style="display: inline-block; padding: 30px; background: white; border-radius: 16px; box-shadow: 0 8px 30px rgba(0,0,0,0.08); border: 2px solid rgba(255, 106, 0, 0.1);">
            <p style="font-size: 48px; margin: 0 0 12px 0;">📈</p>
            <p style="font-size: 14px; color: #888; margin: 0; font-style: italic; max-width: 280px;">
              [Recent campaign performance screenshots showing high open rates & CTR]
            </p>
          </div>
        </div>
        
        <p style="font-size: 16px; line-height: 1.8; color: #555; margin: 24px 0; text-align: center; font-style: italic;">
          It's not magic — it's just strategy, psychology, and a bit of personality. 😉
        </p>
        
        <div style="background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%); border-radius: 12px; padding: 32px; margin: 40px 0; border: 1px solid #e5e5e5;">
          <p style="font-size: 18px; font-weight: 700; color: #2a2a2a; margin-bottom: 20px;">
            To put it in perspective:
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
            If you spend <strong>$1,000 on ads</strong>, you hope to break even.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a;">
            But with email, even a small list of <strong>2,000 subscribers</strong> can bring you <strong style="color: #ff6a00;">consistent revenue month after month</strong> — no new ad budget needed.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- CASE STUDY -->
  <section class="section" style="background: linear-gradient(135deg, #fff9f5 0%, #fff 100%);">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto;">
        <h2>Real Example: <span class="highlight">From Ads to Assets</span></h2>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
          One of my clients, a <strong>corporate legal services firm</strong>, used to rely 100% on Google paid ads, with no strategy or channel to nurture those customers — they wanted a way to convert those one-time leads into long-term clients.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 20px;">
          So we built an email system — a warm welcome sequence, follow-ups triggered by behavior, and monthly campaigns that delivered real value instead of sales pitches.
        </p>
        
        <div style="background: white; border: 3px solid #ff6a00; border-radius: 16px; padding: 40px; margin: 32px 0; text-align: center; box-shadow: 0 8px 30px rgba(255, 106, 0, 0.12);">
          <p style="font-size: 18px; font-weight: 700; color: #2a2a2a; margin-bottom: 16px;">
            Six months later:
          </p>
          <p style="font-size: 32px; font-weight: 900; color: #ff6a00; margin: 0;">
            Email alone brought in $12,000+ in repeat orders
          </p>
        </div>
        
        <div style="text-align: center; margin: 40px 0;">
          <div style="display: inline-block; padding: 30px; background: white; border-radius: 16px; box-shadow: 0 8px 30px rgba(0,0,0,0.08); border: 2px solid rgba(255, 106, 0, 0.1);">
            <p style="font-size: 48px; margin: 0 0 12px 0;">💰</p>
            <p style="font-size: 14px; color: #888; margin: 0; font-style: italic; max-width: 280px;">
              [Campaign revenue/performance proof]
            </p>
          </div>
        </div>
        
        <ul style="list-style: none; margin: 32px 0; padding: 0; text-align: center;">
          <li style="padding: 8px 0; font-size: 17px; color: #2a2a2a;">No viral campaigns.</li>
          <li style="padding: 8px 0; font-size: 17px; color: #2a2a2a;">No big discounts.</li>
          <li style="padding: 8px 0; font-size: 18px; font-weight: 700; color: #ff6a00;">Just consistent, relevant, human emails that built trust.</li>
        </ul>
        
        <p style="font-size: 18px; line-height: 1.8; color: #2a2a2a; margin: 32px 0 16px 0; text-align: center;">
          That's the difference between <strong>renting traffic</strong>…
        </p>
        
        <p style="font-size: 20px; font-weight: 800; color: #ff6a00; margin: 0; text-align: center;">
          and owning relationships.
        </p>
        
        <div style="border-top: 2px solid rgba(255, 106, 0, 0.2); margin: 48px 0 32px 0; padding-top: 32px;">
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
            Today, every campaign I run is powered by that same framework.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
            And across industries, it keeps proving one simple truth:
          </p>
          
          <p style="font-size: 18px; font-weight: 700; color: #2a2a2a; margin-bottom: 20px;">
            It's not about writing more emails.
          </p>
          
          <p style="font-size: 18px; font-weight: 700; color: #ff6a00; margin-bottom: 20px;">
            It's about writing smarter ones — with strategy, timing, and empathy.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a; margin-bottom: 16px;">
            That's what the <strong>Reveall Method</strong> was built for.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: #2a2a2a;">
            And that's how we turn everyday emails into <strong>moments that sell, without feeling like selling</strong>.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- THE REVEAL METHOD -->
  <section class="section" style="background: linear-gradient(180deg, #0a0a0a 0%, #1a1a1a 100%); color: #ffffff; position: relative; overflow: hidden;">
    <div style="position: absolute; top: -50%; right: -10%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 106, 0, 0.15) 0%, transparent 70%); border-radius: 50%; filter: blur(100px);"></div>
    
    <div class="container" style="position: relative; z-index: 1;">
      <div style="max-width: 950px; margin: 0 auto;">
        <h2 style="text-align: center; color: #ffffff; margin-bottom: 16px;">⚙️ The Reveal Method</h2>
        <p style="text-align: center; font-size: 20px; color: rgba(255, 255, 255, 0.8); margin-bottom: 50px; font-style: italic;">
          Born From Failure, Refined by Curiosity
        </p>
        
        <div style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 16px; padding: 40px; margin-bottom: 40px;">
          <p style="font-size: 18px; line-height: 1.8; color: rgba(255, 255, 255, 0.95); margin-bottom: 16px;">
            I didn't start as "the guy whose emails people couldn't stop reading."
          </p>
          
          <p style="font-size: 18px; line-height: 1.8; color: rgba(255, 255, 255, 0.95); margin-bottom: 20px;">
            Far from it.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 16px;">
            When I first started, I wrote hundreds of emails — and most of them <strong>died quietly in inboxes</strong>.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 20px;">
            No opens. No replies. Just silence.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 12px;">
            I tried every "best practice" you can name:
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 20px; font-style: italic;">
            catchy subject lines, emojis, urgency timers, "value-packed" copy…
          </p>
          
          <p style="font-size: 18px; font-weight: 700; color: #ff6a00; margin-bottom: 20px;">
            Nothing worked.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 16px;">
            It was frustrating.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 16px;">
            I'd spend days crafting campaigns — and still, the results were flat.
          </p>
          
          <p style="font-size: 18px; font-style: italic; color: rgba(255, 255, 255, 0.9); margin-bottom: 24px;">
            I kept wondering: <strong style="color: #ff6a00;">Why do people ignore me?</strong>
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 20px;">
            So I did what any obsessed copywriter would do — <strong>I started studying</strong>.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 16px;">
            I read and dissected hundreds of emails from the best copywriters in the world — breaking down how they used <strong>rhythm, contrast, and emotion</strong> to make people read to the last line.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 16px;">
            I went through courses from people like <strong>Dan Lok</strong> and <strong>Daniel Throssell</strong>, devoured every book I could find on persuasion and storytelling, and took notes on every sentence that made me stop scrolling.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 24px;">
            I noticed patterns.
          </p>
          
          <p style="font-size: 18px; font-weight: 700; color: rgba(255, 255, 255, 0.95); margin-bottom: 20px;">
            But something was still missing.
          </p>
        </div>
        
        <div style="background: linear-gradient(135deg, rgba(255, 106, 0, 0.15) 0%, rgba(255, 140, 66, 0.1) 100%); border: 2px solid rgba(255, 106, 0, 0.3); border-radius: 16px; padding: 40px; margin: 40px 0; box-shadow: 0 8px 30px rgba(255, 106, 0, 0.2);">
          <p style="font-size: 18px; line-height: 1.8; color: rgba(255, 255, 255, 0.95); margin-bottom: 16px;">
            Then one day, while rewriting yet another email that no one would probably read, <strong style="color: #ffa559;">something clicked</strong>.
          </p>
          
          <p style="font-size: 19px; font-weight: 700; color: #ffa559; margin: 24px 0;">
            I realized people don't open emails because of offers — they open because of emotion.
          </p>
          
          <p style="font-size: 18px; line-height: 1.8; color: rgba(255, 255, 255, 0.95); margin-bottom: 16px;">
            Because of curiosity.
          </p>
          
          <p style="font-size: 18px; line-height: 1.8; color: rgba(255, 255, 255, 0.95); margin-bottom: 24px;">
            Because they want to <strong>feel something</strong>.
          </p>
          
          <p style="font-size: 20px; font-weight: 800; color: #ff6a00; margin-bottom: 20px;">
            So I stopped trying to sell… and started to reveal.
          </p>
          
          <p style="font-size: 18px; font-weight: 700; color: #ffa559; margin-top: 28px;">
            That moment changed everything.
          </p>
        </div>
        
        <div style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 16px; padding: 40px; margin: 40px 0;">
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 16px;">
            My emails became <strong>little stories</strong> — each one built around a moment of surprise, a shift, a "wait, what?" moment that made readers lean in.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 16px;">
            And suddenly, people weren't just opening my emails — <strong style="color: #ff6a00;">they were replying</strong>.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 20px;">
            They wanted to know more.
          </p>
          
          <p style="font-size: 20px; font-weight: 800; color: #ff6a00; text-align: center; margin-top: 32px;">
            That's how The Reveal Method was born.
          </p>
        </div>
        
        <h3 style="font-size: 28px; font-weight: 800; color: #ffffff; margin: 60px 0 30px 0; text-align: center;">
          🔍 What It Is
        </h3>
        
        <p style="font-size: 18px; line-height: 1.8; color: rgba(255, 255, 255, 0.9); margin-bottom: 24px; text-align: center;">
          The Reveal Method isn't about "persuading" people — it's about <strong style="color: #ffa559;">inviting them in</strong>.
        </p>
        
        <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 32px; text-align: center;">
          Each email becomes a small discovery, a story that rewards curiosity.
        </p>
        
        <p style="font-size: 18px; font-weight: 700; color: rgba(255, 255, 255, 0.95); margin-bottom: 32px; text-align: center;">
          It's built around three core principles:
        </p>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin: 40px 0;">
          <div style="background: rgba(255, 255, 255, 0.08); border: 2px solid rgba(255, 106, 0, 0.3); border-radius: 16px; padding: 32px; text-align: center;">
            <p style="font-size: 48px; margin-bottom: 16px;">🔍</p>
            <p style="font-size: 22px; font-weight: 800; color: #ff6a00; margin-bottom: 16px;">1️⃣ Curiosity</p>
            <p style="font-size: 16px; line-height: 1.7; color: rgba(255, 255, 255, 0.85); margin-bottom: 12px;">
              Every email opens a loop — a reason for readers to keep going.
            </p>
            <p style="font-size: 15px; line-height: 1.6; color: rgba(255, 255, 255, 0.7); font-style: italic;">
              Because the best marketing isn't loud; it's intriguing.
            </p>
          </div>
          
          <div style="background: rgba(255, 255, 255, 0.08); border: 2px solid rgba(255, 106, 0, 0.3); border-radius: 16px; padding: 32px; text-align: center;">
            <p style="font-size: 48px; margin-bottom: 16px;">❤️</p>
            <p style="font-size: 22px; font-weight: 800; color: #ff6a00; margin-bottom: 16px;">2️⃣ Emotion</p>
            <p style="font-size: 16px; line-height: 1.7; color: rgba(255, 255, 255, 0.85); margin-bottom: 12px;">
              Facts tell, stories move.
            </p>
            <p style="font-size: 15px; line-height: 1.6; color: rgba(255, 255, 255, 0.7); font-style: italic;">
              The Reveal Method turns logic into feeling — so your readers don't just read; they connect.
            </p>
          </div>
          
          <div style="background: rgba(255, 255, 255, 0.08); border: 2px solid rgba(255, 106, 0, 0.3); border-radius: 16px; padding: 32px; text-align: center;">
            <p style="font-size: 48px; margin-bottom: 16px;">✨</p>
            <p style="font-size: 22px; font-weight: 800; color: #ff6a00; margin-bottom: 16px;">3️⃣ Authenticity</p>
            <p style="font-size: 16px; line-height: 1.7; color: rgba(255, 255, 255, 0.85); margin-bottom: 12px;">
              Every line sounds like it's written by a person — not a brand.
            </p>
            <p style="font-size: 15px; line-height: 1.6; color: rgba(255, 255, 255, 0.7); font-style: italic;">
              Because people don't fall in love with funnels. They fall in love with stories.
            </p>
          </div>
        </div>
        
        <div style="background: linear-gradient(135deg, rgba(255, 106, 0, 0.2) 0%, rgba(255, 140, 66, 0.15) 100%); border: 3px solid #ff6a00; border-radius: 16px; padding: 40px; margin: 60px 0; text-align: center; box-shadow: 0 12px 40px rgba(255, 106, 0, 0.3);">
          <p style="font-size: 19px; line-height: 1.8; color: rgba(255, 255, 255, 0.95); margin-bottom: 20px;">
            Once I started using The Reveal Method, <strong style="color: #ffa559;">everything changed</strong>.
          </p>
          
          <p style="font-size: 18px; font-weight: 700; color: #ffffff; margin-bottom: 16px;">
            My average client sees 25–35% open rates and 4–8% click-through rates
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.9);">
            — <strong>3x better</strong> than industry average.
          </p>
        </div>
        
        <div style="text-align: center; margin: 40px 0;">
          <div style="display: inline-block; padding: 30px; background: rgba(255, 255, 255, 0.08); border-radius: 16px; border: 2px solid rgba(255, 106, 0, 0.2);">
            <p style="font-size: 48px; margin: 0 0 12px 0;">📊</p>
            <p style="font-size: 14px; color: rgba(255, 255, 255, 0.6); margin: 0; font-style: italic; max-width: 280px;">
              [Result screenshots/metrics]
            </p>
          </div>
        </div>
        
        <div style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 16px; padding: 40px; margin: 40px 0;">
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 16px;">
            But more importantly — they see <strong style="color: #ff6a00;">more clicks, more conversations, and more sales</strong> from the same list.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 16px;">
            Because when an email feels like a <strong>story</strong>, not a pitch… people want to read it.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85); margin-bottom: 24px;">
            When it feels <strong>human</strong>, not robotic… they want to reply.
          </p>
          
          <p style="font-size: 18px; font-weight: 700; color: rgba(255, 255, 255, 0.95); margin-bottom: 16px;">
            It keeps proving one thing:
          </p>
          
          <p style="font-size: 18px; line-height: 1.8; color: rgba(255, 255, 255, 0.9); margin-bottom: 12px;">
            It's not about writing more emails.
          </p>
          
          <p style="font-size: 20px; font-weight: 800; color: #ff6a00; margin-bottom: 24px;">
            It's about writing emails people can't ignore.
          </p>
          
          <p style="font-size: 17px; line-height: 1.8; color: rgba(255, 255, 255, 0.85);">
            Because when you know how to trigger <strong>curiosity and emotion</strong> the right way, your inbox stops being a sales channel — and becomes a place people actually <strong style="color: #ffa559;">look forward to opening</strong>.
          </p>
        </div>
        
        <div style="border-top: 2px solid rgba(255, 106, 0, 0.3); padding-top: 40px; margin-top: 50px; text-align: center;">
          <p style="font-size: 22px; font-weight: 800; color: #ff6a00; margin-bottom: 20px;">
            That's the magic of The Reveal Method.
          </p>
          
          <p style="font-size: 18px; line-height: 1.8; color: rgba(255, 255, 255, 0.9);">
            And that's how we turn inboxes into conversations… and conversations into clients.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="section" style="background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%); padding: 80px 0;">
    <div class="container">
      <h2 style="font-size: 42px; margin-bottom: 16px; text-align: center;">How It Works <span class="highlight">+ Bullet Points</span></h2>
      <p style="text-align: center; font-size: 19px; color: #555; max-width: 720px; margin: 0 auto 60px auto; line-height: 1.6;">
        The Reveal Method broken down into 5 strategic phases — each designed to uncover your story, build momentum, and turn your inbox into your highest-ROI channel.
      </p>

      <!-- PHASE 1 -->
      <div style="background: white; border-radius: 16px; padding: 48px; margin-bottom: 40px; box-shadow: 0 8px 30px rgba(0,0,0,0.06); border-left: 6px solid #ff6a00;">
        <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 24px;">
          <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); color: white; width: 56px; height: 56px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0;">1</div>
          <h3 style="font-size: 28px; margin: 0; color: #1a1a1a;">Phase 1 — The Reveal Audit: Find the Hidden Story Behind Your Brand</h3>
        </div>
        
        <p style="font-size: 17px; line-height: 1.7; color: #333; margin-bottom: 20px;">
          Before we touch a single line of copy, we dig deep.<br>
          <strong>Not into what you sell — but why people care.</strong>
        </p>

        <p style="font-size: 17px; line-height: 1.7; color: #333; margin-bottom: 12px; font-weight: 600;">We analyze:</p>
        <ul style="margin: 0 0 24px 0; padding-left: 24px;">
          <li style="margin-bottom: 10px; line-height: 1.7; color: #333;">What emotions your customers associate with your brand.</li>
          <li style="margin-bottom: 10px; line-height: 1.7; color: #333;">What triggers make them click, buy, or ghost.</li>
          <li style="margin-bottom: 10px; line-height: 1.7; color: #333;">Which part of your funnel leaks the most opportunity.</li>
        </ul>

        <div style="background: linear-gradient(135deg, #fff8f0 0%, #ffe8d6 100%); border-left: 4px solid #ff6a00; padding: 20px 24px; border-radius: 8px; margin-bottom: 24px;">
          <p style="margin: 0; font-size: 16px; line-height: 1.7; color: #2a2a2a;">
            <strong style="color: #ff6a00;">📊 Example:</strong> In one audit, we discovered that 38% of users opened emails but didn't click.<br>
            Fixing just that one leak increased total revenue by 26% in 30 days.
          </p>
        </div>

        <div style="background: #f9fafb; padding: 20px 24px; border-radius: 8px; border: 2px solid #e5e7eb;">
          <p style="margin: 0 0 12px 0; font-weight: 700; color: #1a1a1a; font-size: 16px;">Deliverable:</p>
          <ul class="checkmarks-light" style="margin: 0;">
            <li>Brand voice & audience insight report</li>
            <li>Funnel gap analysis & roadmap showing exactly how email can fill those gaps</li>
          </ul>
        </div>
      </div>

      <!-- PHASE 2 -->
      <div style="background: white; border-radius: 16px; padding: 48px; margin-bottom: 40px; box-shadow: 0 8px 30px rgba(0,0,0,0.06); border-left: 6px solid #ff6a00;">
        <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 24px;">
          <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); color: white; width: 56px; height: 56px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0;">2</div>
          <h3 style="font-size: 28px; margin: 0; color: #1a1a1a;">Phase 2 — Strategy & Campaign Mapping: From Chaos to Clarity</h3>
        </div>
        
        <p style="font-size: 17px; line-height: 1.7; color: #333; margin-bottom: 20px;">
          Most brands send "a few newsletters per month."<br>
          <strong>We build an entire ecosystem.</strong>
        </p>

        <p style="font-size: 17px; line-height: 1.7; color: #333; margin-bottom: 20px;">
          Every email sequence is mapped like a movie script — each scene building anticipation for the next.
        </p>

        <p style="font-size: 17px; line-height: 1.7; color: #333; margin-bottom: 12px; font-weight: 600;">Here's what we design:</p>
        <ul style="margin: 0 0 24px 0; padding-left: 24px;">
          <li style="margin-bottom: 10px; line-height: 1.7; color: #333;"><strong>Welcome Sequences</strong> that turn cold leads into loyal readers.</li>
          <li style="margin-bottom: 10px; line-height: 1.7; color: #333;"><strong>Abandoned Cart Flows</strong> that recover up to 30% of lost sales.</li>
          <li style="margin-bottom: 10px; line-height: 1.7; color: #333;"><strong>Winback Series</strong> that reactivates sleeping customers.</li>
          <li style="margin-bottom: 10px; line-height: 1.7; color: #333;"><strong>Story Campaigns</strong> that make your audience feel before they buy.</li>
        </ul>

        <div style="background: linear-gradient(135deg, #fff8f0 0%, #ffe8d6 100%); border-left: 4px solid #ff6a00; padding: 20px 24px; border-radius: 8px; margin-bottom: 24px;">
          <p style="margin: 0; font-size: 16px; line-height: 1.7; color: #2a2a2a;">
            <strong style="color: #ff6a00;">🎯 Example:</strong> After building a 5-step story-driven flow, one client saw their click-through rate jump from 2.8% → 7.4% in 3 weeks.
          </p>
        </div>

        <div style="background: #f9fafb; padding: 20px 24px; border-radius: 8px; border: 2px solid #e5e7eb;">
          <p style="margin: 0 0 12px 0; font-weight: 700; color: #1a1a1a; font-size: 16px;">Deliverable:</p>
          <ul class="checkmarks-light" style="margin: 0;">
            <li>Visual journey map</li>
            <li>Campaign triggers & logic flow</li>
          </ul>
        </div>
      </div>

      <!-- PHASE 3 -->
      <div style="background: white; border-radius: 16px; padding: 48px; margin-bottom: 40px; box-shadow: 0 8px 30px rgba(0,0,0,0.06); border-left: 6px solid #ff6a00;">
        <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 24px;">
          <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); color: white; width: 56px; height: 56px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0;">3</div>
          <h3 style="font-size: 28px; margin: 0; color: #1a1a1a;">Phase 3 — Copywriting That Reveals, Not Sells</h3>
        </div>
        
        <p style="font-size: 17px; line-height: 1.7; color: #333; margin-bottom: 20px;">
          Here's where the magic of The Reveal Method takes shape.<br>
          <strong>We don't push. We pull.</strong>
        </p>

        <p style="font-size: 17px; line-height: 1.7; color: #333; margin-bottom: 20px;">
          Each email opens a loop — a question, a story, a spark of curiosity.<br>
          Readers keep scrolling not because they have to, but because they <em>want to see what's next</em>.
        </p>

        <p style="font-size: 17px; line-height: 1.7; color: #333; margin-bottom: 12px; font-weight: 600;">Every email we write follows our proprietary 3C Framework:</p>
        <ul style="margin: 0 0 24px 0; padding-left: 24px;">
          <li style="margin-bottom: 10px; line-height: 1.7; color: #333;"><strong style="color: #ff6a00;">Curiosity</strong> → Open the loop.</li>
          <li style="margin-bottom: 10px; line-height: 1.7; color: #333;"><strong style="color: #ff6a00;">Connection</strong> → Build emotional trust.</li>
          <li style="margin-bottom: 10px; line-height: 1.7; color: #333;"><strong style="color: #ff6a00;">Conversion</strong> → Close naturally, never forcefully.</li>
        </ul>

        <div style="background: linear-gradient(135deg, #fff8f0 0%, #ffe8d6 100%); border-left: 4px solid #ff6a00; padding: 20px 24px; border-radius: 8px; margin-bottom: 24px;">
          <p style="margin: 0; font-size: 16px; line-height: 1.7; color: #2a2a2a;">
            <strong style="color: #ff6a00;">✍️ Example:</strong> We replaced a generic promo with a curiosity-based story ("The ingredient that almost got banned — but changed our product forever").<br>
            That single email brought <strong>$2,400 in sales within 48 hours</strong>.
          </p>
        </div>

        <div style="background: #f9fafb; padding: 20px 24px; border-radius: 8px; border: 2px solid #e5e7eb;">
          <p style="margin: 0 0 12px 0; font-weight: 700; color: #1a1a1a; font-size: 16px;">Deliverable:</p>
          <ul class="checkmarks-light" style="margin: 0;">
            <li>Full campaign copy (brand-voiced & conversion-optimized)</li>
            <li>Curiosity hooks & storytelling frameworks ready for testing</li>
          </ul>
        </div>
      </div>

      <!-- PHASE 4 -->
      <div style="background: white; border-radius: 16px; padding: 48px; margin-bottom: 40px; box-shadow: 0 8px 30px rgba(0,0,0,0.06); border-left: 6px solid #ff6a00;">
        <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 24px;">
          <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); color: white; width: 56px; height: 56px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0;">4</div>
          <h3 style="font-size: 28px; margin: 0; color: #1a1a1a;">Phase 4 — Automation & Trigger Logic: The Right Message, Perfectly Timed</h3>
        </div>
        
        <p style="font-size: 17px; line-height: 1.7; color: #333; margin-bottom: 20px;">
          Automation isn't about sending more. <strong>It's about sending smarter.</strong><br>
          We build behavior-based triggers that send the right story to the right person — at the exact right time.
        </p>

        <p style="font-size: 17px; line-height: 1.7; color: #333; margin-bottom: 12px; font-weight: 600;">Here's how it works:</p>
        <ul style="margin: 0 0 24px 0; padding-left: 24px;">
          <li style="margin-bottom: 10px; line-height: 1.7; color: #333;"><strong>Viewed a product</strong> → Get a "soft nudge" story that re-engages interest.</li>
          <li style="margin-bottom: 10px; line-height: 1.7; color: #333;"><strong>Abandoned cart</strong> → Receive a two-part email built on curiosity, not discounts.</li>
          <li style="margin-bottom: 10px; line-height: 1.7; color: #333;"><strong>Bought a product</strong> → Enter a reveal sequence showing behind-the-scenes value, turning one-time buyers into fans.</li>
        </ul>

        <div style="background: linear-gradient(135deg, #fff8f0 0%, #ffe8d6 100%); border-left: 4px solid #ff6a00; padding: 20px 24px; border-radius: 8px; margin-bottom: 24px;">
          <p style="margin: 0; font-size: 16px; line-height: 1.7; color: #2a2a2a;">
            <strong style="color: #ff6a00;">🧩 Result:</strong> Clients typically see a <strong>3–5x increase in click-through rate</strong> after the first 60 days.
          </p>
        </div>

        <div style="background: #f9fafb; padding: 20px 24px; border-radius: 8px; border: 2px solid #e5e7eb;">
          <p style="margin: 0 0 12px 0; font-weight: 700; color: #1a1a1a; font-size: 16px;">Deliverable:</p>
          <ul class="checkmarks-light" style="margin: 0;">
            <li>Complete automation setup in your ESP (Klaviyo, Mailchimp, etc.)</li>
            <li>Conditional triggers + delay logic for emotional pacing</li>
          </ul>
        </div>
      </div>

      <!-- PHASE 5 -->
      <div style="background: white; border-radius: 16px; padding: 48px; margin-bottom: 40px; box-shadow: 0 8px 30px rgba(0,0,0,0.06); border-left: 6px solid #ff6a00;">
        <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 24px;">
          <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); color: white; width: 56px; height: 56px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0;">5</div>
          <h3 style="font-size: 28px; margin: 0; color: #1a1a1a;">Phase 5 — Optimization & Scaling: Refinement Through Data and Psychology</h3>
        </div>
        
        <p style="font-size: 17px; line-height: 1.7; color: #333; margin-bottom: 20px;">
          Once your system is live, we don't walk away — <strong>we watch how it breathes.</strong><br>
          We track open rates, CTRs, conversions, emotional resonance, and adjust weekly.
        </p>

        <p style="font-size: 17px; line-height: 1.7; color: #333; margin-bottom: 24px;">
          Each tweak compounds.<br>
          Over time, open rates rise, unsubscribes drop, and your list becomes your <strong>highest ROI channel</strong>.
        </p>

        <div style="background: linear-gradient(135deg, #fff8f0 0%, #ffe8d6 100%); border-left: 4px solid #ff6a00; padding: 20px 24px; border-radius: 8px; margin-bottom: 24px;">
          <p style="margin: 0; font-size: 16px; line-height: 1.7; color: #2a2a2a;">
            <strong style="color: #ff6a00;">📈 Clients typically grow from 18% → 30% open rate within 90 days,</strong><br>
            and 2–3x their repeat order rate within 6 months — without a single extra ad dollar.
          </p>
        </div>

        <div style="background: #f9fafb; padding: 20px 24px; border-radius: 8px; border: 2px solid #e5e7eb;">
          <p style="margin: 0 0 12px 0; font-weight: 700; color: #1a1a1a; font-size: 16px;">Deliverable:</p>
          <ul class="checkmarks-light" style="margin: 0;">
            <li>Monthly data report + optimization roadmap</li>
            <li>Strategic A/B testing & message refinement</li>
          </ul>
        </div>
      </div>

      <!-- WHY IT WORKS -->
      <div style="background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%); border-radius: 16px; padding: 48px; text-align: center; box-shadow: 0 12px 40px rgba(0,0,0,0.15);">
        <h3 style="font-size: 32px; margin: 0 0 20px 0; color: white;">💬 Why It Works</h3>
        <p style="font-size: 18px; line-height: 1.8; color: #e0e0e0; margin-bottom: 16px; max-width: 800px; margin-left: auto; margin-right: auto;">
          Because The Reveal Method isn't about manipulation.<br>
          <strong style="color: #ff6a00;">It's about momentum.</strong>
        </p>
        <p style="font-size: 18px; line-height: 1.8; color: #e0e0e0; margin-bottom: 16px; max-width: 800px; margin-left: auto; margin-right: auto;">
          Each email reveals just enough to keep your reader curious, connected, and coming back.<br>
          They don't just buy once — <strong style="color: #ffa559;">they stay to see what's next.</strong>
        </p>
        <p style="font-size: 19px; line-height: 1.8; color: white; margin: 32px auto 0 auto; max-width: 820px; font-weight: 600;">
          That's how your inbox turns from "marketing noise"<br>
          → into a <span style="color: #ff6a00;">profit engine that runs on human curiosity</span>.
        </p>
      </div>

      <!-- TRANSITION CTA -->
      <div style="text-align: center; margin-top: 60px; padding: 40px; background: linear-gradient(135deg, #fff8f0 0%, #ffe8d6 100%); border-radius: 16px; border: 2px solid #ff6a00;">
        <p style="font-size: 22px; line-height: 1.7; color: #1a1a1a; margin: 0; font-weight: 600;">
          🔥 If you're ready to see what The Reveal Method could do for your brand,<br>
          <span style="color: #ff6a00;">let's uncover the story hiding inside your inbox — and turn it into sales.</span>
        </p>
      </div>
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

  <!-- FUTURE PACING -->
  <section class="section" style="background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%); padding: 80px 0;">
    <div class="container">
      <h2 style="font-size: 42px; margin-bottom: 48px; text-align: center;">Imagine This: <span class="highlight">90 Days from Now</span></h2>
      
      <div style="max-width: 820px; margin: 0 auto;">
        <p style="font-size: 19px; line-height: 1.9; color: #2a2a2a; margin-bottom: 24px;">
          It's been a few weeks since we started working together.<br>
          You open your inbox — and instead of silence, <strong style="color: #ff6a00;">you see replies</strong>.<br>
          People actually writing back to your emails.
        </p>

        <p style="font-size: 19px; line-height: 1.9; color: #2a2a2a; margin-bottom: 32px; text-align: center; font-weight: 600; font-style: italic;">
          Not just "interested," but <span style="color: #ff6a00;">ready to buy</span>.
        </p>

        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 32px; box-shadow: 0 8px 30px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <p style="font-size: 18px; line-height: 1.9; color: #333; margin-bottom: 16px;">
            Your campaigns are running smoothly,<br>
            your audience finally <strong>feels connected</strong> to your brand,<br>
            and you're no longer guessing what works — <strong style="color: #ff6a00;">you know what works</strong>.
          </p>
        </div>

        <p style="font-size: 19px; line-height: 1.9; color: #2a2a2a; margin-bottom: 24px;">
          Your marketing doesn't feel like shouting into the void anymore.<br>
          <strong>It feels like a conversation</strong> — the kind that builds loyalty,<br>
          creates sales on autopilot,<br>
          and gives you the freedom to focus on growing your business — not chasing it.
        </p>

        <div style="background: linear-gradient(135deg, #fff8f0 0%, #ffe8d6 100%); border-radius: 16px; padding: 36px; margin-bottom: 32px; text-align: center; border: 2px solid #ffa559;">
          <p style="font-size: 19px; line-height: 1.8; color: #1a1a1a; margin: 0;">
            And every time a new order comes in,<br>
            you'll remember this moment —<br>
            <strong style="color: #ff6a00;">the moment you decided to stop sending random emails<br>
            and start building relationships that convert</strong>.
          </p>
        </div>

        <div style="background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%); border-radius: 16px; padding: 48px; text-align: center; box-shadow: 0 12px 40px rgba(0,0,0,0.15);">
          <p style="font-size: 18px; line-height: 1.7; color: #d0d0d0; margin-bottom: 20px;">
            Because that's what The Reveal Method does:
          </p>
          <p style="font-size: 21px; line-height: 1.8; color: white; margin-bottom: 12px; font-weight: 600;">
            It turns <span style="color: #ff6a00;">quiet inboxes into conversations</span>.
          </p>
          <p style="font-size: 21px; line-height: 1.8; color: white; margin-bottom: 12px; font-weight: 600;">
            It turns <span style="color: #ffa559;">conversations into customers</span>.
          </p>
          <p style="font-size: 21px; line-height: 1.8; color: white; margin: 0; font-weight: 600;">
            And it turns <span style="color: #ff6a00;">customers into loyal fans</span> who keep coming back.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- GUARANTEE -->
  <section class="section" style="background: linear-gradient(180deg, #0a0a0a 0%, #1a1a1a 100%); padding: 100px 0; position: relative; overflow: hidden;">
    <!-- Floating orange glow -->
    <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(255, 106, 0, 0.15) 0%, transparent 70%); border-radius: 50%; filter: blur(100px); pointer-events: none;"></div>
    <div style="position: absolute; bottom: -150px; left: -150px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(255, 165, 89, 0.1) 0%, transparent 70%); border-radius: 50%; filter: blur(120px); pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 1;">
      <h2 style="font-size: 48px; margin-bottom: 40px; text-align: center; color: white; font-weight: 800;">
        My <span style="color: #ff6a00;">Guarantee</span>
      </h2>

      <div style="max-width: 820px; margin: 0 auto;">
        <p style="font-size: 22px; line-height: 1.8; color: #e0e0e0; margin-bottom: 32px; text-align: center; font-weight: 500;">
          Let's keep this simple.
        </p>

        <div style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border-radius: 20px; padding: 48px; border: 1px solid rgba(255, 255, 255, 0.1); margin-bottom: 40px;">
          <p style="font-size: 19px; line-height: 1.9; color: #f0f0f0; margin-bottom: 20px;">
            If after working together you don't feel a shift —
          </p>
          <ul style="list-style: none; margin: 0 0 24px 0; padding: 0;">
            <li style="font-size: 18px; line-height: 1.8; color: #d0d0d0; margin-bottom: 12px; padding-left: 32px; position: relative;">
              <span style="position: absolute; left: 0; color: #ff6a00; font-size: 20px;">→</span>
              in how your audience responds,
            </li>
            <li style="font-size: 18px; line-height: 1.8; color: #d0d0d0; margin-bottom: 12px; padding-left: 32px; position: relative;">
              <span style="position: absolute; left: 0; color: #ff6a00; font-size: 20px;">→</span>
              how your emails sound,
            </li>
            <li style="font-size: 18px; line-height: 1.8; color: #d0d0d0; margin-bottom: 12px; padding-left: 32px; position: relative;">
              <span style="position: absolute; left: 0; color: #ff6a00; font-size: 20px;">→</span>
              or how much easier it becomes to sell without "selling"…
            </li>
          </ul>
          <p style="font-size: 21px; line-height: 1.9; color: white; font-weight: 700; text-align: center; margin: 0;">
            then you don't pay the full fee.
          </p>
        </div>

        <p style="font-size: 18px; line-height: 1.8; color: #d0d0d0; margin-bottom: 16px; text-align: center;">
          No questions. No hard feelings.
        </p>

        <p style="font-size: 19px; line-height: 1.9; color: #f0f0f0; margin-bottom: 32px; text-align: center;">
          Because I don't believe in "promising results."<br>
          <strong style="color: white;">I believe in showing them</strong> — before you ever commit.
        </p>

        <!-- 7-Day Sprint Box -->
        <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); border-radius: 20px; padding: 48px; text-align: center; margin-bottom: 40px; box-shadow: 0 20px 60px rgba(255, 106, 0, 0.3);">
          <p style="font-size: 20px; line-height: 1.8; color: white; margin-bottom: 20px; font-weight: 600;">
            That's why every new partnership begins with
          </p>
          <h3 style="font-size: 36px; margin: 0 0 24px 0; color: white; font-weight: 900; text-shadow: 0 2px 8px rgba(0,0,0,0.2);">
            The 7-Day Strategy Sprint
          </h3>
          <p style="font-size: 18px; line-height: 1.8; color: rgba(255, 255, 255, 0.95); margin: 0;">
            We'll work side by side for 7 days — <strong>completely risk-free</strong>.<br>
            You'll see exactly how I research, plan, and design<br>
            an email system customized to your brand.
          </p>
        </div>

        <div style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border-radius: 20px; padding: 40px; border: 1px solid rgba(255, 255, 255, 0.1); margin-bottom: 40px;">
          <p style="font-size: 18px; line-height: 1.9; color: #e0e0e0; margin-bottom: 16px; text-align: center;">
            No theory. No fluff. <strong style="color: white;">Just real, actionable work from day one.</strong>
          </p>
          <p style="font-size: 19px; line-height: 1.9; color: #f0f0f0; margin: 0; text-align: center;">
            If by the end of those 7 days you don't feel we're the right fit,<br>
            <strong style="color: #ff6a00;">you walk away — no invoice, no pressure, no awkward calls.</strong>
          </p>
        </div>

        <p style="font-size: 19px; line-height: 1.9; color: #e0e0e0; margin-bottom: 32px; text-align: center;">
          Because The Reveal Method isn't just built to sell.<br>
          <strong style="color: white;">It's built to earn trust</strong> — one honest step at a time.
        </p>

        <!-- Final Guarantee Statement -->
        <div style="background: rgba(255, 106, 0, 0.1); border: 2px solid #ff6a00; border-radius: 16px; padding: 36px; text-align: center;">
          <p style="font-size: 17px; line-height: 1.6; color: #ffa559; margin-bottom: 16px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">
            That's my guarantee:
          </p>
          <p style="font-size: 24px; line-height: 1.7; color: white; margin: 0; font-weight: 700;">
            No risk. No hype.<br>
            Just real strategy that works — <span style="color: #ff6a00;">or you don't pay</span>.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- HANDLE OBJECTIONS -->
  <section class="section" style="background: linear-gradient(135deg, #ffffff 0%, #fafafa 100%); padding: 80px 0;">
    <div class="container">
      <h2 style="font-size: 42px; margin-bottom: 24px; text-align: center;">Before You <span class="highlight">Ask</span>…</h2>
      <p style="text-align: center; font-size: 18px; color: #666; max-width: 700px; margin: 0 auto 60px auto; line-height: 1.6;">
        These are the most common questions I hear. If you're wondering any of these, you're in the right place.
      </p>

      <div style="max-width: 900px; margin: 0 auto;">
        
        <!-- Objection 1 -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 32px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <h3 style="font-size: 22px; margin: 0 0 20px 0; color: #1a1a1a; font-weight: 700;">
            "What if I already have someone doing email for us?"
          </h3>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            Perfect — that means you already believe in the power of email.
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            But here's the truth: <strong>most agencies or freelancers focus on sending emails, not strategizing them</strong>.
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin: 0;">
            The Reveal Method isn't about adding noise to your inbox — it's about building a system that turns emails into conversations and conversations into customers. We can even collaborate with your current team to refine what's already working and elevate your results — <strong style="color: #ff6a00;">no overhaul needed</strong>.
          </p>
        </div>

        <!-- Objection 2 -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 32px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <h3 style="font-size: 22px; margin: 0 0 20px 0; color: #1a1a1a; font-weight: 700;">
            "What if our list is too small?"
          </h3>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            <strong style="color: #ff6a00;">That's actually the best time to start.</strong>
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            A small list means you can build genuine relationships — the kind that scale with you. I've helped brands with under 1,000 subscribers create campaigns that generated <strong>4-figure launches</strong>.
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin: 0;">
            When you focus on depth over reach, your emails don't just sell — <strong>they stick</strong>.
          </p>
        </div>

        <!-- Objection 3 -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 32px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <h3 style="font-size: 22px; margin: 0 0 20px 0; color: #1a1a1a; font-weight: 700;">
            "What if we don't have time to manage all this?"
          </h3>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            <strong style="color: #ff6a00;">You don't have to.</strong> That's exactly why I built The Reveal Method.
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            It's plug-and-play: <strong>I handle strategy, automation, and optimization</strong> — you approve, watch, and see results.
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin: 0;">
            No extra workload. No daily check-ins. Just a system that runs while you focus on your business.
          </p>
        </div>

        <!-- Objection 4 -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 32px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <h3 style="font-size: 22px; margin: 0 0 20px 0; color: #1a1a1a; font-weight: 700;">
            "We've tried email before, and it didn't work."
          </h3>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            I get it — that's what most of my clients said before they came to me.
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            <strong>The problem isn't email — it's how it's used.</strong>
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin: 0;">
            If your past emails felt forced, salesy, or ignored, that's not failure — that's feedback. The Reveal Method rebuilds your campaigns from the ground up — from message timing to emotional storytelling — so your audience <strong style="color: #ff6a00;">actually wants to open, read, and buy</strong>.
          </p>
        </div>

        <!-- Objection 5 -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 32px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <h3 style="font-size: 22px; margin: 0 0 20px 0; color: #1a1a1a; font-weight: 700;">
            "What if we don't see results right away?"
          </h3>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            Good question — and fair.
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            Email is about relationships, not overnight spikes. Most clients start seeing <strong>engagement lift within 2–3 weeks</strong>, and conversions ramp up from there.
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin: 0;">
            And with the 7-Day Strategy Sprint, you'll already see the foundation of your profit engine — before you even decide to move forward. <strong style="color: #ff6a00;">Zero risk. 100% clarity.</strong>
          </p>
        </div>

        <!-- Objection 6 -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 32px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <h3 style="font-size: 22px; margin: 0 0 20px 0; color: #1a1a1a; font-weight: 700;">
            "Are we locked into a long contract?"
          </h3>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            <strong style="color: #ff6a00;">Nope.</strong>
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            You start with the 7-Day Strategy Sprint — a complete audit, strategy, and roadmap tailored to your brand.
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin: 0;">
            If you love it (and you likely will), we continue. If not, you walk away with a full plan — <strong>no charge, no strings attached</strong>.
          </p>
        </div>

        <!-- Objection 7 -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 32px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <h3 style="font-size: 22px; margin: 0 0 20px 0; color: #1a1a1a; font-weight: 700;">
            "What if our brand tone is unique — can you match it?"
          </h3>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            <strong style="color: #ff6a00;">Absolutely.</strong>
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            In fact, that's one of the pillars of The Reveal Method — <strong>Authenticity</strong>.
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin: 0;">
            Before I write a single email, I study your brand voice, audience behavior, and emotional triggers to make sure every word sounds like you. Because your customers should never feel like someone else wrote your emails — <strong>they should feel like you're talking to them directly</strong>.
          </p>
        </div>

        <!-- Objection 8 -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 48px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <h3 style="font-size: 22px; margin: 0 0 20px 0; color: #1a1a1a; font-weight: 700;">
            "Can this work for our industry?"
          </h3>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            I've worked with brands in skincare, education, SaaS, and lifestyle — and <strong>the psychology never changes</strong>.
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            People buy from people who make them feel understood.
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin: 0;">
            The Reveal Method isn't tied to one niche. It's built on <strong style="color: #ff6a00;">timeless principles of curiosity, emotion, and authenticity</strong> — the same ones that drive every great sale.
          </p>
        </div>

        <!-- Transition CTA -->
        <div style="background: linear-gradient(135deg, #fff8f0 0%, #ffe8d6 100%); border-radius: 16px; padding: 48px; text-align: center; border: 2px solid #ff6a00;">
          <p style="font-size: 20px; line-height: 1.8; color: #1a1a1a; margin: 0 0 16px 0; font-weight: 600;">
            💬 Still thinking it over? That's perfectly fine.
          </p>
          <p style="font-size: 18px; line-height: 1.8; color: #333; margin: 0;">
            Most of my best clients started exactly where you are — curious, cautious, and wondering if this could finally be the thing that makes email work for them.<br>
            <strong style="color: #ff6a00;">And within weeks, they knew they'd made the right choice.</strong>
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- PRICING & INVESTMENT -->
  <section class="section" style="background: linear-gradient(180deg, #0a0a0a 0%, #1a1a1a 100%); padding: 100px 0; position: relative; overflow: hidden;">
    <!-- Floating orange glow -->
    <div style="position: absolute; top: -100px; left: 50%; transform: translateX(-50%); width: 600px; height: 600px; background: radial-gradient(circle, rgba(255, 106, 0, 0.12) 0%, transparent 70%); border-radius: 50%; filter: blur(120px); pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 1;">
      <h2 style="font-size: 48px; margin-bottom: 24px; text-align: center; color: white; font-weight: 800;">
        Investment — When "Buying Emails" Becomes a <span style="color: #ff6a00;">Strategic Move</span>
      </h2>
      
      <div style="max-width: 820px; margin: 0 auto 60px auto; text-align: center;">
        <p style="font-size: 20px; line-height: 1.8; color: #d0d0d0; margin-bottom: 20px;">
          Let's be honest.
        </p>
        <p style="font-size: 19px; line-height: 1.8; color: #e0e0e0; margin-bottom: 20px;">
          You're not here to "buy some emails."<br>
          You're here because you want to <strong style="color: white;">stop sending words that go nowhere</strong> — and start building a system that brings qualified leads, predictable replies, and real clients.
        </p>
        <p style="font-size: 19px; line-height: 1.8; color: #e0e0e0; margin: 0;">
          <strong style="color: #ff6a00;">That's what this investment is about.</strong>
        </p>
      </div>

      <!-- Market Context -->
      <div style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border-radius: 20px; padding: 40px; border: 1px solid rgba(255, 255, 255, 0.1); margin-bottom: 60px; max-width: 900px; margin-left: auto; margin-right: auto;">
        <p style="font-size: 17px; line-height: 1.8; color: #d0d0d0; margin-bottom: 16px; text-align: center;">
          <strong style="color: white;">Here's the reality of the market:</strong>
        </p>
        <ul style="list-style: none; margin: 0; padding: 0;">
          <li style="font-size: 16px; line-height: 1.8; color: #c0c0c0; margin-bottom: 12px; padding-left: 32px; position: relative;">
            <span style="position: absolute; left: 0; color: #ff6a00; font-size: 18px;">→</span>
            Full-service agencies charge <strong style="color: #ffa559;">$1,500–$3,000 per campaign</strong> or $5,000–$10,000+/month for retainers
          </li>
          <li style="font-size: 16px; line-height: 1.8; color: #c0c0c0; margin-bottom: 12px; padding-left: 32px; position: relative;">
            <span style="position: absolute; left: 0; color: #ff6a00; font-size: 18px;">→</span>
            Experienced email copywriters charge <strong style="color: #ffa559;">$300–$500 per email</strong> (design costs another $100–$300)
          </li>
          <li style="font-size: 16px; line-height: 1.8; color: #c0c0c0; margin: 0; padding-left: 32px; position: relative;">
            <span style="position: absolute; left: 0; color: #ff6a00; font-size: 18px;">→</span>
            One well-written campaign can open doors worth <strong style="color: #ffa559;">$5,000, $10,000, or $50,000+ in contracts</strong>
          </li>
        </ul>
        <p style="font-size: 18px; line-height: 1.8; color: white; margin: 32px 0 0 0; text-align: center; font-weight: 600;">
          So the real question isn't <em>"Can I afford this?"</em><br>
          It's <span style="color: #ff6a00;">"Can I afford to keep sending emails that don't work?"</span>
        </p>
      </div>

      <!-- Pricing Cards -->
      <div style="max-width: 1100px; margin: 0 auto 60px auto;">
        <p style="font-size: 22px; line-height: 1.7; color: white; margin-bottom: 48px; text-align: center; font-weight: 600;">
          Three paths. Pick what fits your goals:
        </p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px; margin-bottom: 48px;">
          
          <!-- STARTER PACKAGE -->
          <div style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(10px); border-radius: 20px; padding: 40px; border: 2px solid rgba(255, 255, 255, 0.15); position: relative; transition: transform 0.3s ease;">
            <div style="background: linear-gradient(135deg, #666 0%, #888 100%); color: white; padding: 8px 20px; border-radius: 8px; display: inline-block; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
              Starter
            </div>
            <h3 style="font-size: 48px; margin: 0 0 8px 0; color: white; font-weight: 900;">
              $595
            </h3>
            <p style="font-size: 15px; color: #aaa; margin: 0 0 24px 0; text-decoration: line-through;">
              Normal: $1,000+
            </p>
            <p style="font-size: 16px; line-height: 1.7; color: #d0d0d0; margin-bottom: 28px; font-style: italic;">
              Best for founders testing outreach — human, high-open emails without complex automation
            </p>
            
            <div style="border-top: 1px solid rgba(255, 255, 255, 0.2); padding-top: 24px;">
              <p style="font-size: 15px; color: #bbb; margin: 0 0 16px 0; font-weight: 600;">What's Included:</p>
              <ul style="list-style: none; margin: 0; padding: 0;">
                <li style="padding: 10px 0; color: #e0e0e0; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  60–90 min kickoff + brand brief
                </li>
                <li style="padding: 10px 0; color: #e0e0e0; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  Deep audit of current list & #1 conversion leak
                </li>
                <li style="padding: 10px 0; color: #e0e0e0; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  3 plain-text emails (The Reveal voice)
                </li>
                <li style="padding: 10px 0; color: #e0e0e0; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  1 free stock image per campaign
                </li>
                <li style="padding: 10px 0; color: #e0e0e0; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  Subject-line split-test suggestions
                </li>
                <li style="padding: 10px 0; color: #e0e0e0; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  1 round of revision
                </li>
              </ul>
              <p style="font-size: 14px; color: #999; margin: 20px 0 0 0;">
                ⏱ Turnaround: 7–10 business days
              </p>
            </div>
          </div>

          <!-- STANDARD PACKAGE (MOST POPULAR) -->
          <div style="background: linear-gradient(135deg, rgba(255, 106, 0, 0.15) 0%, rgba(255, 165, 89, 0.15) 100%); backdrop-filter: blur(10px); border-radius: 20px; padding: 40px; border: 3px solid #ff6a00; position: relative; transform: scale(1.05); box-shadow: 0 20px 60px rgba(255, 106, 0, 0.3);">
            <div style="position: absolute; top: -16px; right: 24px; background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); color: white; padding: 8px 20px; border-radius: 20px; font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; box-shadow: 0 4px 15px rgba(255, 106, 0, 0.4);">
              Most Popular
            </div>
            <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); color: white; padding: 8px 20px; border-radius: 8px; display: inline-block; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
              Standard
            </div>
            <h3 style="font-size: 56px; margin: 0 0 8px 0; color: white; font-weight: 900;">
              $1,350
            </h3>
            <p style="font-size: 15px; color: #ccc; margin: 0 0 24px 0; text-decoration: line-through;">
              Normal: $2,500+
            </p>
            <p style="font-size: 17px; line-height: 1.7; color: #f0f0f0; margin-bottom: 28px; font-style: italic; font-weight: 500;">
              Copy + design + basic automation — the sweet spot for ROI-minded brands
            </p>
            
            <div style="border-top: 1px solid rgba(255, 255, 255, 0.3); padding-top: 24px;">
              <p style="font-size: 15px; color: #ddd; margin: 0 0 16px 0; font-weight: 600;">What's Included:</p>
              <ul style="list-style: none; margin: 0; padding: 0;">
                <li style="padding: 10px 0; color: white; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  90–120 min strategy session + full Reveal Audit
                </li>
                <li style="padding: 10px 0; color: white; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  4–5 emails (copy + responsive design)
                </li>
                <li style="padding: 10px 0; color: white; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  Up to 5 custom email graphics/banners
                </li>
                <li style="padding: 10px 0; color: white; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  Basic automation setup in your ESP
                </li>
                <li style="padding: 10px 0; color: white; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  Tagging & trigger logic (welcome/cart/follow-up)
                </li>
                <li style="padding: 10px 0; color: white; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  Dashboard snapshot + KPI view
                </li>
                <li style="padding: 10px 0; color: white; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  2-week optimization support post-launch
                </li>
              </ul>
              <p style="font-size: 14px; color: #bbb; margin: 20px 0 0 0;">
                ⏱ Turnaround: 10–18 business days
              </p>
            </div>
          </div>

          <!-- PREMIUM PACKAGE -->
          <div style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(10px); border-radius: 20px; padding: 40px; border: 2px solid rgba(255, 255, 255, 0.15); position: relative;">
            <div style="background: linear-gradient(135deg, #ffa559 0%, #ff6a00 100%); color: white; padding: 8px 20px; border-radius: 8px; display: inline-block; font-size: 14px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
              Premium
            </div>
            <h3 style="font-size: 48px; margin: 0 0 8px 0; color: white; font-weight: 900;">
              $2,950
            </h3>
            <p style="font-size: 15px; color: #aaa; margin: 0 0 24px 0; text-decoration: line-through;">
              Normal: $4,500+
            </p>
            <p style="font-size: 16px; line-height: 1.7; color: #d0d0d0; margin-bottom: 28px; font-style: italic;">
              Full Reveal System — advanced automation & scaling for serious revenue growth
            </p>
            
            <div style="border-top: 1px solid rgba(255, 255, 255, 0.2); padding-top: 24px;">
              <p style="font-size: 15px; color: #bbb; margin: 0 0 16px 0; font-weight: 600;">What's Included:</p>
              <ul style="list-style: none; margin: 0; padding: 0;">
                <li style="padding: 10px 0; color: #e0e0e0; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  Full Reveal Audit + 2-hour strategy workshop
                </li>
                <li style="padding: 10px 0; color: #e0e0e0; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  6–8 emails (copy + premium design)
                </li>
                <li style="padding: 10px 0; color: #e0e0e0; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  Up to 10 custom graphics + GIFs/CTAs
                </li>
                <li style="padding: 10px 0; color: #e0e0e0; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  Advanced multi-branch automation flows
                </li>
                <li style="padding: 10px 0; color: #e0e0e0; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  ESP migration or Klaviyo advanced setup
                </li>
                <li style="padding: 10px 0; color: #e0e0e0; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  Customer segmentation & conditional triggers
                </li>
                <li style="padding: 10px 0; color: #e0e0e0; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  4 weeks optimization + monthly report
                </li>
                <li style="padding: 10px 0; color: #e0e0e0; font-size: 15px; line-height: 1.6; padding-left: 28px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-weight: 900;">✓</span>
                  1 performance call + priority support
                </li>
              </ul>
              <p style="font-size: 14px; color: #999; margin: 20px 0 0 0;">
                ⏱ Turnaround: 3–6 weeks
              </p>
            </div>
          </div>

        </div>

        <!-- Add-Ons Section -->
        <div style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border-radius: 16px; padding: 36px; border: 1px solid rgba(255, 255, 255, 0.1); margin-bottom: 48px;">
          <h3 style="font-size: 22px; margin: 0 0 24px 0; color: white; text-align: center;">Need Something Extra?</h3>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
            <div style="text-align: center; padding: 20px;">
              <p style="font-size: 16px; color: #d0d0d0; margin: 0 0 8px 0;">Extra email (copy only)</p>
              <p style="font-size: 28px; color: #ff6a00; font-weight: 800; margin: 0;">$300</p>
            </div>
            <div style="text-align: center; padding: 20px;">
              <p style="font-size: 16px; color: #d0d0d0; margin: 0 0 8px 0;">Extra designed email</p>
              <p style="font-size: 28px; color: #ff6a00; font-weight: 800; margin: 0;">$450</p>
            </div>
            <div style="text-align: center; padding: 20px;">
              <p style="font-size: 16px; color: #d0d0d0; margin: 0 0 8px 0;">Monthly optimization retainer</p>
              <p style="font-size: 28px; color: #ff6a00; font-weight: 800; margin: 0;">$1,200<span style="font-size: 16px; color: #999;">/mo</span></p>
            </div>
          </div>
        </div>
      </div>

      <!-- 7-Day Sprint Guarantee -->
      <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); border-radius: 20px; padding: 48px; text-align: center; max-width: 900px; margin: 0 auto 48px auto; box-shadow: 0 20px 60px rgba(255, 106, 0, 0.4);">
        <h3 style="font-size: 28px; margin: 0 0 20px 0; color: white; font-weight: 800;">
          🛡️ Every Package Starts with the 7-Day Strategy Sprint
        </h3>
        <p style="font-size: 18px; line-height: 1.8; color: rgba(255, 255, 255, 0.95); margin: 0;">
          You'll see exactly how I research, plan, and map your email system <strong>before we even send a single email</strong>.<br>
          If by the end of the week you don't feel it's a perfect fit — you walk away.<br>
          <strong style="font-size: 20px;">No invoice. No hard feelings. Zero risk.</strong>
        </p>
      </div>

      <!-- Scarcity -->
      <div style="background: rgba(217, 48, 37, 0.15); border: 2px solid #d93025; border-radius: 16px; padding: 40px; text-align: center; max-width: 800px; margin: 0 auto;">
        <p style="font-size: 18px; line-height: 1.7; color: white; margin: 0 0 16px 0; font-weight: 700;">
          ⚠️ Limited Availability
        </p>
        <p style="font-size: 17px; line-height: 1.8; color: #e0e0e0; margin: 0;">
          I only take <strong style="color: #ff6a00;">3 clients per month</strong> to ensure each project gets my full attention and creative focus.<br>
          After these slots fill, rates return to standard pricing and new bookings reopen next quarter.
        </p>
      </div>

    </div>
  </section>

  <!-- REVERSE PSYCHOLOGY -->
  <section class="section" style="background: linear-gradient(135deg, #f5f5f5 0%, #fafafa 100%); padding: 80px 0;">
    <div class="container">
      <h2 style="font-size: 42px; margin-bottom: 32px; text-align: center;">
        9️⃣ This Might Not Be <span class="highlight">For You</span>
      </h2>
      
      <div style="max-width: 820px; margin: 0 auto;">
        <p style="font-size: 20px; line-height: 1.8; color: #2a2a2a; margin-bottom: 32px; text-align: center; font-weight: 600;">
          Let's be honest — The Reveal Method isn't for everyone.
        </p>

        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 32px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #d93025;">
          <p style="font-size: 18px; line-height: 1.8; color: #333; margin-bottom: 20px;">
            If you're looking for a <strong>"plug-in and pray"</strong> system that sends 1000 emails overnight and magically converts strangers into loyal customers…<br>
            <strong style="color: #d93025;">you're going to be disappointed.</strong>
          </p>
          
          <p style="font-size: 18px; line-height: 1.8; color: #333; margin-bottom: 20px;">
            If you want a quick dopamine hit from seeing your email list "grow fast" — instead of earning trust slowly —<br>
            <strong style="color: #d93025;">this isn't your thing either.</strong>
          </p>

          <p style="font-size: 18px; line-height: 1.8; color: #333; margin: 0;">
            If you're chasing hacks, templates, or the next "secret headline formula"…<br>
            <strong style="color: #d93025;">you'll probably hate how much I talk about empathy, story, and timing.</strong>
          </p>
        </div>

        <div style="text-align: center; padding: 40px 0;">
          <p style="font-size: 22px; line-height: 1.7; color: #1a1a1a; margin: 0; font-weight: 700;">
            But —
          </p>
        </div>

        <div style="background: linear-gradient(135deg, #fff8f0 0%, #ffe8d6 100%); border-radius: 16px; padding: 48px; margin-bottom: 40px; border: 2px solid #ff6a00;">
          <p style="font-size: 19px; line-height: 1.9; color: #1a1a1a; margin-bottom: 20px;">
            If you're the kind of person who believes in <strong style="color: #ff6a00;">craft over chaos</strong>,
          </p>
          <p style="font-size: 19px; line-height: 1.9; color: #1a1a1a; margin-bottom: 20px;">
            who understands that building relationships takes more than sending "blast" campaigns,
          </p>
          <p style="font-size: 19px; line-height: 1.9; color: #1a1a1a; margin-bottom: 20px;">
            and who wants to see their brand be <strong style="color: #ff6a00;">remembered</strong>, not just be <em>seen</em> —
          </p>
          <p style="font-size: 21px; line-height: 1.9; color: #1a1a1a; margin: 0; font-weight: 700; text-align: center;">
            then this is for you.
          </p>
        </div>

        <p style="font-size: 19px; line-height: 1.9; color: #2a2a2a; margin-bottom: 32px; text-align: center;">
          Because The Reveal Method isn't about playing the short game.<br>
          <strong>It's about turning every email into a small, emotional reveal</strong> — a story that your customers want to keep opening.
        </p>

        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 40px; box-shadow: 0 6px 25px rgba(0,0,0,0.08);">
          <p style="font-size: 18px; line-height: 1.8; color: #333; margin-bottom: 20px; font-weight: 600; text-align: center;">
            And here's the truth:
          </p>
          <p style="font-size: 18px; line-height: 1.9; color: #555; margin-bottom: 16px; text-align: center;">
            Most people won't do this work.
          </p>
          <p style="font-size: 18px; line-height: 1.9; color: #555; margin-bottom: 32px; text-align: center;">
            They'll keep chasing trends, tweaking subject lines, and wondering why their emails don't convert.
          </p>
          
          <div style="border-top: 2px solid #f0f0f0; padding-top: 32px;">
            <p style="font-size: 19px; line-height: 1.9; color: #1a1a1a; margin-bottom: 20px;">
              But the few who do — the ones who commit to doing it right —<br>
              <strong style="color: #ff6a00;">they're the ones who wake up to see their inbox filled with replies, orders, and repeat customers</strong> who say things like:
            </p>
            <blockquote style="background: #f9f9f9; border-left: 4px solid #ff6a00; padding: 24px; margin: 24px 0 0 0; font-style: italic; font-size: 18px; line-height: 1.8; color: #333;">
              "I don't even know why, but your email felt so real I had to click."
            </blockquote>
          </div>
        </div>

        <div style="background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%); border-radius: 16px; padding: 48px; text-align: center; box-shadow: 0 12px 40px rgba(0,0,0,0.2);">
          <p style="font-size: 20px; line-height: 1.8; color: #d0d0d0; margin-bottom: 20px;">
            So if that's the kind of connection you want…
          </p>
          <p style="font-size: 26px; line-height: 1.7; color: white; margin: 0; font-weight: 700;">
            then you already know — <span style="color: #ff6a00;">you're not "most people."</span>
          </p>
        </div>

        <!-- Transition -->
        <div style="text-align: center; margin-top: 48px; padding: 36px; background: linear-gradient(135deg, #fff8f0 0%, #ffe8d6 100%); border-radius: 16px; border: 2px solid #ffa559;">
          <p style="font-size: 19px; line-height: 1.8; color: #1a1a1a; margin: 0;">
            💬 And that's exactly why The Reveal Method exists —<br>
            <strong style="color: #ff6a00;">not to please everyone, but to transform the few who are ready to build something real.</strong>
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- TWO OPTIONS -->
  <section class="section" style="background: linear-gradient(180deg, #0a0a0a 0%, #1a1a1a 100%); padding: 100px 0; position: relative; overflow: hidden;">
    <!-- Floating glow -->
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 800px; height: 800px; background: radial-gradient(circle, rgba(255, 106, 0, 0.08) 0%, transparent 70%); border-radius: 50%; filter: blur(150px); pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 1;">
      <h2 style="font-size: 48px; margin-bottom: 24px; text-align: center; color: white; font-weight: 800;">
        You Have Two Choices <span style="color: #ff6a00;">Right Now</span>
      </h2>
      
      <p style="font-size: 19px; line-height: 1.8; color: #d0d0d0; margin-bottom: 60px; text-align: center; max-width: 720px; margin-left: auto; margin-right: auto;">
        This isn't about pressure. It's about clarity.<br>
        You can stay where you are, or you can move forward. Both are choices.
      </p>

      <div style="max-width: 1000px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 60px;">
          
          <!-- OPTION 1 - The Status Quo (Gray/Negative) -->
          <div style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border-radius: 20px; padding: 48px; border: 2px solid rgba(150, 150, 150, 0.3); position: relative;">
            <div style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); background: linear-gradient(135deg, #666 0%, #888 100%); color: white; padding: 10px 28px; border-radius: 20px; font-size: 16px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
              Option 1
            </div>

            <h3 style="font-size: 28px; margin: 32px 0 24px 0; color: #aaa; font-weight: 700; text-align: center;">
              Keep Doing What You've Been Doing
            </h3>

            <div style="background: rgba(0, 0, 0, 0.3); border-radius: 12px; padding: 32px; margin-bottom: 24px;">
              <ul style="list-style: none; margin: 0; padding: 0;">
                <li style="padding: 14px 0; color: #c0c0c0; font-size: 17px; line-height: 1.7; padding-left: 32px; position: relative; border-bottom: 1px solid rgba(255,255,255,0.1);">
                  <span style="position: absolute; left: 0; color: #999; font-size: 20px;">→</span>
                  Keep sending random emails with mediocre results
                </li>
                <li style="padding: 14px 0; color: #c0c0c0; font-size: 17px; line-height: 1.7; padding-left: 32px; position: relative; border-bottom: 1px solid rgba(255,255,255,0.1);">
                  <span style="position: absolute; left: 0; color: #999; font-size: 20px;">→</span>
                  Watch competitors turn email into consistent revenue while your list sits cold
                </li>
                <li style="padding: 14px 0; color: #c0c0c0; font-size: 17px; line-height: 1.7; padding-left: 32px; position: relative; border-bottom: 1px solid rgba(255,255,255,0.1);">
                  <span style="position: absolute; left: 0; color: #999; font-size: 20px;">→</span>
                  Keep wondering why email marketing "doesn't work" for you
                </li>
                <li style="padding: 14px 0; color: #c0c0c0; font-size: 17px; line-height: 1.7; padding-left: 32px; position: relative;">
                  <span style="position: absolute; left: 0; color: #999; font-size: 20px;">→</span>
                  Leave money on the table every single week
                </li>
              </ul>
            </div>

            <p style="font-size: 18px; line-height: 1.7; color: #999; margin: 0; text-align: center; font-style: italic;">
              Safe. Familiar. And completely stuck.
            </p>
          </div>

          <!-- OPTION 2 - The Reveal Method (Orange/Positive) -->
          <div style="background: linear-gradient(135deg, rgba(255, 106, 0, 0.15) 0%, rgba(255, 165, 89, 0.15) 100%); backdrop-filter: blur(10px); border-radius: 20px; padding: 48px; border: 3px solid #ff6a00; position: relative; box-shadow: 0 20px 60px rgba(255, 106, 0, 0.3);">
            <div style="position: absolute; top: -20px; left: 50%; transform: translateX(-50%); background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); color: white; padding: 10px 28px; border-radius: 20px; font-size: 16px; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; box-shadow: 0 6px 20px rgba(255, 106, 0, 0.5);">
              Option 2
            </div>

            <h3 style="font-size: 28px; margin: 32px 0 24px 0; color: white; font-weight: 700; text-align: center;">
              Partner with The Reveal Method
            </h3>

            <div style="background: rgba(255, 106, 0, 0.1); border: 2px solid rgba(255, 106, 0, 0.3); border-radius: 12px; padding: 32px; margin-bottom: 24px;">
              <ul style="list-style: none; margin: 0; padding: 0;">
                <li style="padding: 14px 0; color: white; font-size: 17px; line-height: 1.7; padding-left: 32px; position: relative; border-bottom: 1px solid rgba(255,255,255,0.2);">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-size: 20px; font-weight: 900;">✓</span>
                  Build a system that turns emails into conversations and conversations into customers
                </li>
                <li style="padding: 14px 0; color: white; font-size: 17px; line-height: 1.7; padding-left: 32px; position: relative; border-bottom: 1px solid rgba(255,255,255,0.2);">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-size: 20px; font-weight: 900;">✓</span>
                  See your open rates climb to 30%+, click rates hit 4-8%, and revenue compound monthly
                </li>
                <li style="padding: 14px 0; color: white; font-size: 17px; line-height: 1.7; padding-left: 32px; position: relative; border-bottom: 1px solid rgba(255,255,255,0.2);">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-size: 20px; font-weight: 900;">✓</span>
                  Work with someone who's built this system from the ground up — tested, proven, refined
                </li>
                <li style="padding: 14px 0; color: white; font-size: 17px; line-height: 1.7; padding-left: 32px; position: relative;">
                  <span style="position: absolute; left: 0; color: #ff6a00; font-size: 20px; font-weight: 900;">✓</span>
                  Start with the 7-Day Strategy Sprint — completely risk-free, walk away if it's not a fit
                </li>
              </ul>
            </div>

            <p style="font-size: 18px; line-height: 1.7; color: #ffa559; margin: 0; text-align: center; font-style: italic; font-weight: 600;">
              New. Strategic. And actually works.
            </p>
          </div>

        </div>

        <!-- The Choice Statement -->
        <div style="text-align: center; padding: 48px; background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255, 255, 255, 0.1);">
          <p style="font-size: 20px; line-height: 1.8; color: #d0d0d0; margin-bottom: 20px;">
            The first option keeps you stuck.
          </p>
          <p style="font-size: 20px; line-height: 1.8; color: #d0d0d0; margin-bottom: 32px;">
            The second option gets you results.
          </p>
          <p style="font-size: 28px; line-height: 1.6; color: white; margin: 0; font-weight: 700;">
            The choice is <span style="color: #ff6a00;">yours</span>.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- SCARCITY -->
  <section class="section" style="background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%); padding: 80px 0;">
    <div class="container">
      <h2 style="font-size: 42px; margin-bottom: 32px; text-align: center;">
        🔥 Only <span class="highlight">3 Spots</span> — Because "Good Enough" Isn't Good Enough
      </h2>
      
      <div style="max-width: 820px; margin: 0 auto;">
        <p style="font-size: 20px; line-height: 1.8; color: #2a2a2a; margin-bottom: 32px; text-align: center; font-weight: 600;">
          Here's the truth: <strong style="color: #ff6a00;">I don't run a factory.</strong>
        </p>

        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 32px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <p style="font-size: 18px; line-height: 1.9; color: #333; margin-bottom: 20px;">
            I don't mass-produce email campaigns, and I don't hand your brand off to an intern.
          </p>
          <p style="font-size: 18px; line-height: 1.9; color: #333; margin: 0;">
            When you work with me, <strong style="color: #ff6a00;">you're getting my full focus</strong> — from deep audience research to strategy, copy, and optimization.<br>
            And that level of attention takes time.
          </p>
        </div>

        <div style="background: linear-gradient(135deg, #fff8f0 0%, #ffe8d6 100%); border-radius: 16px; padding: 48px; margin-bottom: 32px; border: 2px solid #ff6a00; text-align: center;">
          <p style="font-size: 22px; line-height: 1.8; color: #1a1a1a; margin-bottom: 20px; font-weight: 700;">
            That's why I only take on <span style="color: #ff6a00; font-size: 32px; font-weight: 900;">3 clients</span> per month.
          </p>
          <p style="font-size: 18px; line-height: 1.8; color: #333; margin: 0;">
            Each project deserves the space to breathe, evolve, and perform —<br>
            <strong>not be rushed through a checklist.</strong>
          </p>
        </div>

        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 40px; box-shadow: 0 6px 25px rgba(0,0,0,0.08);">
          <p style="font-size: 18px; line-height: 1.9; color: #333; margin-bottom: 20px;">
            Once those 3 slots are filled, <strong style="color: #d93025;">I close new enrollments until the following month</strong>.<br>
            No exceptions.
          </p>
          <p style="font-size: 18px; line-height: 1.9; color: #333; margin: 0;">
            Because if I said "yes" to everyone, I'd be saying "no" to the results that make this system work.
          </p>
        </div>

        <div style="background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%); border-radius: 16px; padding: 48px; text-align: center; box-shadow: 0 12px 40px rgba(0,0,0,0.2); margin-bottom: 40px;">
          <p style="font-size: 20px; line-height: 1.8; color: #d0d0d0; margin-bottom: 20px;">
            So if you've been thinking about building a real email engine —<br>
            one that actually converts —
          </p>
          <p style="font-size: 26px; line-height: 1.7; color: white; margin-bottom: 24px; font-weight: 700;">
            <span style="color: #ff6a00;">This is your window.</span>
          </p>
          <p style="font-size: 19px; line-height: 1.7; color: #e0e0e0; margin: 0; font-style: italic;">
            Once the seats are gone, they're gone.
          </p>
        </div>

        <!-- CTA Box -->
        <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); border-radius: 20px; padding: 48px; text-align: center; box-shadow: 0 20px 60px rgba(255, 106, 0, 0.4);">
          <p style="font-size: 22px; line-height: 1.7; color: white; margin-bottom: 24px; font-weight: 600;">
            📩 Spots remaining this month:
          </p>
          <div style="background: rgba(0, 0, 0, 0.2); border-radius: 12px; padding: 20px; margin-bottom: 24px; display: inline-block; min-width: 200px;">
            <p style="font-size: 64px; color: white; margin: 0; font-weight: 900; line-height: 1;" id="slotsLeft2">3</p>
          </div>
          <p style="font-size: 19px; line-height: 1.7; color: rgba(255, 255, 255, 0.95); margin: 0; font-weight: 600;">
            Apply now to secure your spot before the month's roster closes.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- BONUS -->
  <section class="section" style="background: linear-gradient(135deg, #fafafa 0%, #ffffff 100%); padding: 80px 0;">
    <div class="container">
      <h2 style="font-size: 42px; margin-bottom: 32px; text-align: center;">
        🎁 What You'll Get When You <span class="highlight">Work With Me</span>
      </h2>
      
      <p style="font-size: 19px; line-height: 1.8; color: #555; max-width: 820px; margin: 0 auto 48px auto; text-align: center;">
        If you decide to work with me, you're not just hiring someone to "write emails."<br>
        <strong style="color: #ff6a00;">You're bringing in a partner who'll rebuild how your brand communicates</strong> — from the inside out.
      </p>

      <div style="max-width: 900px; margin: 0 auto;">
        
        <!-- Bonus 1 -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 24px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 20px;">
            <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); color: white; width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0;">1</div>
            <h3 style="font-size: 24px; margin: 0; color: #1a1a1a;">The Reveal Audit</h3>
            <span style="background: #fff8f0; color: #ff6a00; padding: 6px 16px; border-radius: 20px; font-size: 14px; font-weight: 700; margin-left: auto;">Value: $500</span>
          </div>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin: 0;">
            A deep dive into your existing setup to uncover where your list is leaking money, where your timing's off, and how to turn that into revenue opportunities. Most clients say <strong>this part alone gives them more clarity than months of guessing and A/B testing combined</strong>.
          </p>
        </div>

        <!-- Bonus 2 -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 24px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 20px;">
            <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); color: white; width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0;">2</div>
            <h3 style="font-size: 24px; margin: 0; color: #1a1a1a;">2-Week Optimization Support</h3>
            <span style="background: #fff8f0; color: #ff6a00; padding: 6px 16px; border-radius: 20px; font-size: 14px; font-weight: 700; margin-left: auto;">Value: $400</span>
          </div>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin: 0;">
            I'll personally monitor your results for the first two weeks — <strong>tweaking subject lines, CTAs, send times</strong> — until every part of your campaign starts humming like a well-tuned machine. You'll see your open rates rise, click-throughs jump, and conversions start feeling… <em>predictable</em>.
          </p>
        </div>

        <!-- Bonus 3 -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 24px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 20px;">
            <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); color: white; width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0;">3</div>
            <h3 style="font-size: 24px; margin: 0; color: #1a1a1a;">Welcome Series Template Pack</h3>
            <span style="background: #fff8f0; color: #ff6a00; padding: 6px 16px; border-radius: 20px; font-size: 14px; font-weight: 700; margin-left: auto;">Value: $300</span>
          </div>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin: 0;">
            A ready-to-deploy Welcome Series, built using The Reveal Method — <strong>designed to turn first-time visitors into loyal repeat buyers automatically</strong>. You'll get 3 pre-built sequences that you can plug in instantly for new subscribers.
          </p>
        </div>

        <!-- Bonus 4 -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 24px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 20px;">
            <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); color: white; width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0;">4</div>
            <h3 style="font-size: 24px; margin: 0; color: #1a1a1a;">The Reveal Dashboard Setup</h3>
            <span style="background: #fff8f0; color: #ff6a00; padding: 6px 16px; border-radius: 20px; font-size: 14px; font-weight: 700; margin-left: auto;">Value: $250</span>
          </div>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin: 0;">
            A real-time dashboard, so you can <strong>watch the numbers move</strong> — open rates, CTRs, revenue — and know exactly what's working, and what's next. A live analytics dashboard that tracks your performance daily.
          </p>
        </div>

        <!-- Bonus 5 -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 40px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); border-left: 5px solid #ff6a00;">
          <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 20px;">
            <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); color: white; width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: 800; flex-shrink: 0;">5</div>
            <h3 style="font-size: 24px; margin: 0; color: #1a1a1a;">Custom Branded Email Graphics</h3>
            <span style="background: #fff8f0; color: #ff6a00; padding: 6px 16px; border-radius: 20px; font-size: 14px; font-weight: 700; margin-left: auto;">Value: $350</span>
          </div>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin-bottom: 16px;">
            Because great storytelling deserves great presentation, I'll also include <strong>up to 10 custom-designed graphics</strong> for your campaigns — banners, headers, and product visuals that fit your brand like a glove.
          </p>
          <p style="font-size: 17px; line-height: 1.8; color: #333; margin: 0; font-style: italic;">
            These visuals don't just make your emails look premium — <strong style="color: #ff6a00;">they make them unforgettable</strong>.
          </p>
        </div>

        <!-- Total Value Box -->
        <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); border-radius: 20px; padding: 48px; text-align: center; box-shadow: 0 20px 60px rgba(255, 106, 0, 0.4);">
          <p style="font-size: 20px; line-height: 1.6; color: rgba(255, 255, 255, 0.9); margin-bottom: 16px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">
            💰 Total Bonus Value:
          </p>
          <p style="font-size: 56px; line-height: 1.2; color: white; margin-bottom: 20px; font-weight: 900;">
            $1,800
          </p>
          <p style="font-size: 22px; line-height: 1.7; color: white; margin: 0; font-weight: 700;">
            Included FREE when you book this month
          </p>
        </div>

        <!-- Bottom Statement -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-top: 32px; box-shadow: 0 6px 25px rgba(0,0,0,0.08); text-align: center;">
          <p style="font-size: 18px; line-height: 1.9; color: #333; margin-bottom: 16px;">
            These bonuses aren't fluff.
          </p>
          <p style="font-size: 19px; line-height: 1.9; color: #1a1a1a; margin: 0; font-weight: 600;">
            They're the creative edge that makes your emails <span style="color: #ff6a00;">impossible to ignore</span> —<br>
            and turns your campaigns into an engine that keeps printing ROI long after we hit "send."
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- VALUE STACK -->
  <section class="section" style="background: linear-gradient(180deg, #0a0a0a 0%, #1a1a1a 100%); padding: 100px 0; position: relative; overflow: hidden;">
    <div style="position: absolute; top: -100px; left: 50%; transform: translateX(-50%); width: 600px; height: 600px; background: radial-gradient(circle, rgba(255, 106, 0, 0.12) 0%, transparent 70%); border-radius: 50%; filter: blur(120px); pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 1;">
      <h2 style="font-size: 48px; margin-bottom: 24px; text-align: center; color: white; font-weight: 800;">
        💎 The Full Reveal Experience — <span style="color: #ff6a00;">What You're Getting</span>
      </h2>
      
      <p style="font-size: 20px; line-height: 1.8; color: #d0d0d0; max-width: 820px; margin: 0 auto 60px auto; text-align: center;">
        When you come onboard, you're not just buying an email service.<br>
        <strong style="color: white;">You're unlocking a system</strong> that's been tested, refined, and proven to turn attention into revenue — consistently.
      </p>

      <div style="max-width: 900px; margin: 0 auto;">
        
        <!-- Stack Items -->
        <div style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(10px); border-radius: 16px; padding: 32px; margin-bottom: 20px; border: 1px solid rgba(255, 255, 255, 0.1);">
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
              <h3 style="font-size: 22px; margin: 0 0 8px 0; color: white; font-weight: 700;">The Reveal Audit & Strategy Plan</h3>
              <p style="font-size: 16px; line-height: 1.7; color: #d0d0d0; margin: 0;">
                We'll uncover what's working, what's not, and design a roadmap that turns your email list into a real profit engine.
              </p>
            </div>
            <div style="text-align: right; margin-left: 32px;">
              <p style="font-size: 28px; color: #ff6a00; font-weight: 900; margin: 0;">$600</p>
              <p style="font-size: 14px; color: #999; margin: 0;">value</p>
            </div>
          </div>
        </div>

        <div style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(10px); border-radius: 16px; padding: 32px; margin-bottom: 20px; border: 1px solid rgba(255, 255, 255, 0.1);">
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
              <h3 style="font-size: 22px; margin: 0 0 8px 0; color: white; font-weight: 700;">Custom Email Sequences (4–6 campaign flows)</h3>
              <p style="font-size: 16px; line-height: 1.7; color: #d0d0d0; margin: 0;">
                From abandoned carts to product launches — all written to sound human, persuasive, and on-brand.
              </p>
            </div>
            <div style="text-align: right; margin-left: 32px;">
              <p style="font-size: 28px; color: #ff6a00; font-weight: 900; margin: 0;">$1,200</p>
              <p style="font-size: 14px; color: #999; margin: 0;">value</p>
            </div>
          </div>
        </div>

        <div style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(10px); border-radius: 16px; padding: 32px; margin-bottom: 20px; border: 1px solid rgba(255, 255, 255, 0.1);">
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
              <h3 style="font-size: 22px; margin: 0 0 8px 0; color: white; font-weight: 700;">The Reveal Optimization Phase</h3>
              <p style="font-size: 16px; line-height: 1.7; color: #d0d0d0; margin: 0;">
                Two full weeks of live performance tracking, tweaks, and refinements until every part of your funnel performs like clockwork.
              </p>
            </div>
            <div style="text-align: right; margin-left: 32px;">
              <p style="font-size: 28px; color: #ff6a00; font-weight: 900; margin: 0;">$800</p>
              <p style="font-size: 14px; color: #999; margin: 0;">value</p>
            </div>
          </div>
        </div>

        <div style="background: rgba(255, 106, 0, 0.1); backdrop-filter: blur(10px); border-radius: 16px; padding: 32px; margin-bottom: 20px; border: 2px solid rgba(255, 106, 0, 0.3);">
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
              <p style="font-size: 14px; color: #ffa559; margin: 0 0 8px 0; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">🎁 Bonus #1</p>
              <h3 style="font-size: 22px; margin: 0 0 8px 0; color: white; font-weight: 700;">Welcome Series Built with The Reveal Method</h3>
              <p style="font-size: 16px; line-height: 1.7; color: #e0e0e0; margin: 0;">
                Your audience's first impression — rebuilt to hook them instantly and set the tone for loyalty.
              </p>
            </div>
            <div style="text-align: right; margin-left: 32px;">
              <p style="font-size: 28px; color: #ffa559; font-weight: 900; margin: 0;">$500</p>
              <p style="font-size: 14px; color: #bbb; margin: 0;">value</p>
            </div>
          </div>
        </div>

        <div style="background: rgba(255, 106, 0, 0.1); backdrop-filter: blur(10px); border-radius: 16px; padding: 32px; margin-bottom: 20px; border: 2px solid rgba(255, 106, 0, 0.3);">
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
              <p style="font-size: 14px; color: #ffa559; margin: 0 0 8px 0; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">🎁 Bonus #2</p>
              <h3 style="font-size: 22px; margin: 0 0 8px 0; color: white; font-weight: 700;">10 Custom Email Graphics</h3>
              <p style="font-size: 16px; line-height: 1.7; color: #e0e0e0; margin: 0;">
                Eye-catching visuals tailored to your campaigns — because words convert, but presentation amplifies.
              </p>
            </div>
            <div style="text-align: right; margin-left: 32px;">
              <p style="font-size: 28px; color: #ffa559; font-weight: 900; margin: 0;">$300</p>
              <p style="font-size: 14px; color: #bbb; margin: 0;">value</p>
            </div>
          </div>
        </div>

        <div style="background: rgba(255, 106, 0, 0.1); backdrop-filter: blur(10px); border-radius: 16px; padding: 32px; margin-bottom: 48px; border: 2px solid rgba(255, 106, 0, 0.3);">
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
              <p style="font-size: 14px; color: #ffa559; margin: 0 0 8px 0; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">🎁 Bonus #3</p>
              <h3 style="font-size: 22px; margin: 0 0 8px 0; color: white; font-weight: 700;">Real-Time Campaign Dashboard Access</h3>
              <p style="font-size: 16px; line-height: 1.7; color: #e0e0e0; margin: 0;">
                You'll see exactly what's happening — open rates, clicks, revenue — updated daily.
              </p>
            </div>
            <div style="text-align: right; margin-left: 32px;">
              <p style="font-size: 28px; color: #ffa559; font-weight: 900; margin: 0;">$200</p>
              <p style="font-size: 14px; color: #bbb; margin: 0;">value</p>
            </div>
          </div>
        </div>

        <!-- Total Value -->
        <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); border-radius: 20px; padding: 48px; text-align: center; margin-bottom: 48px; box-shadow: 0 20px 60px rgba(255, 106, 0, 0.4);">
          <p style="font-size: 20px; line-height: 1.6; color: rgba(255, 255, 255, 0.9); margin-bottom: 16px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">
            Total Value:
          </p>
          <p style="font-size: 64px; line-height: 1.2; color: white; margin-bottom: 20px; font-weight: 900;">
            $3,600+
          </p>
          <p style="font-size: 19px; line-height: 1.7; color: rgba(255, 255, 255, 0.95); margin: 0;">
            All bundled into a partnership designed to make your brand impossible to ignore.
          </p>
        </div>

        <!-- Bottom Statement -->
        <div style="text-align: center; padding: 40px;">
          <p style="font-size: 20px; line-height: 1.8; color: #d0d0d0; margin-bottom: 20px;">
            But here's the truth — I'm not here to nickel-and-dime.
          </p>
          <p style="font-size: 22px; line-height: 1.8; color: white; margin-bottom: 20px; font-weight: 600;">
            I'm here to create ROI that <span style="color: #ff6a00;">pays for itself</span>, again and again.
          </p>
          <p style="font-size: 24px; line-height: 1.7; color: white; margin: 0; font-weight: 700;">
            That's why you're not paying $3,600.<br>
            <span style="color: #ffa559;">You're investing in a system</span> — one that keeps making money long after the campaign ends.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- EMOTIONAL TRIGGER -->
  <section class="section" style="background: linear-gradient(135deg, #fff8f0 0%, #ffe8d6 100%); padding: 80px 0;">
    <div class="container">
      <div style="max-width: 820px; margin: 0 auto; text-align: center;">
        <p style="font-size: 22px; line-height: 1.9; color: #1a1a1a; margin-bottom: 32px; font-weight: 600; font-style: italic;">
          Imagine this — you open your inbox in the morning and see a reply that says:
        </p>

        <blockquote style="background: white; border-left: 5px solid #ff6a00; padding: 32px; margin: 0 0 32px 0; border-radius: 12px; box-shadow: 0 6px 25px rgba(0,0,0,0.08);">
          <p style="font-size: 20px; line-height: 1.8; color: #ff6a00; margin: 0; font-style: italic; font-weight: 600;">
            "Hey, I read your email and really liked your approach. Let's talk this week."
          </p>
        </blockquote>

        <p style="font-size: 19px; line-height: 1.9; color: #333; margin-bottom: 24px;">
          That quiet sense of excitement and relief hits you — <strong>knowing that your message actually landed</strong>.
        </p>

        <p style="font-size: 18px; line-height: 1.9; color: #555; margin-bottom: 24px;">
          No more sending emails into the void. No more wondering if you said something wrong or why no one replied.
        </p>

        <p style="font-size: 19px; line-height: 1.9; color: #1a1a1a; margin-bottom: 32px; font-weight: 600;">
          Instead, you start seeing <span style="color: #ff6a00;">consistent responses, booked calls</span>, and most importantly — <strong>that deep confidence that your skills are finally being recognized</strong>.
        </p>

        <div style="background: white; border-radius: 16px; padding: 40px; box-shadow: 0 6px 25px rgba(0,0,0,0.08);">
          <p style="font-size: 18px; line-height: 1.9; color: #333; margin-bottom: 20px;">
            If you've ever felt ignored, or questioned whether cold outreach still works, this service will help you experience the difference.
          </p>
          <p style="font-size: 18px; line-height: 1.9; color: #333; margin: 0;">
            Because I don't just write emails — I translate your personality, confidence, and professionalism into every line, so your prospects don't just read your message… <strong style="color: #ff6a00;">they feel who you are behind it</strong>.
          </p>
        </div>

        <p style="font-size: 20px; line-height: 1.9; color: #1a1a1a; margin: 48px 0 0 0; font-weight: 600;">
          Think about the first time you'll get a genuine, quality response — one that reminds you why you started doing this in the first place.<br>
          <span style="color: #ff6a00;">That feeling — calm, confident, and motivated</span> — is exactly what I aim to create with every campaign I write.
        </p>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="section" style="background: linear-gradient(180deg, #0a0a0a 0%, #1a1a1a 100%); padding: 100px 0; position: relative; overflow: hidden;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 800px; height: 800px; background: radial-gradient(circle, rgba(255, 106, 0, 0.15) 0%, transparent 70%); border-radius: 50%; filter: blur(150px); pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 1;">
      <div style="max-width: 900px; margin: 0 auto; text-align: center;">
        <h2 style="font-size: 48px; margin-bottom: 32px; color: white; font-weight: 800;">
          Your Next Client Is <span style="color: #ff6a00;">One Email Away</span>
        </h2>
        
        <p style="font-size: 20px; line-height: 1.8; color: #d0d0d0; margin-bottom: 24px;">
          If you've ever felt frustrated sending cold emails that vanish into silence —<br>
          <strong style="color: white;">this is your moment to change that</strong>.
        </p>

        <p style="font-size: 19px; line-height: 1.8; color: #e0e0e0; margin-bottom: 48px;">
          You've seen what's possible when your message actually connects.<br>
          You've seen how a few words, written the right way, can open doors to opportunities you didn't even know existed.
        </p>

        <div style="background: linear-gradient(135deg, #ff6a00 0%, #ffa559 100%); border-radius: 24px; padding: 60px; margin-bottom: 40px; box-shadow: 0 20px 60px rgba(255, 106, 0, 0.4);">
          <p style="font-size: 32px; line-height: 1.5; color: white; margin-bottom: 32px; font-weight: 800;">
            Now, it's your turn.
          </p>
          
          <a href="#leadMagnetForm" style="display: inline-block; background: white; color: #ff6a00; padding: 24px 60px; border-radius: 50px; font-size: 22px; font-weight: 800; text-decoration: none; box-shadow: 0 8px 30px rgba(0,0,0,0.3); transition: transform 0.3s ease, box-shadow 0.3s ease; text-transform: uppercase; letter-spacing: 1px;">
            📩 Book My Email Campaign Now
          </a>

          <p style="font-size: 16px; line-height: 1.6; color: rgba(255, 255, 255, 0.9); margin: 32px 0 0 0; font-style: italic;">
            (Spots are limited — only 3 clients per month)
          </p>
        </div>

        <blockquote style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border-left: 4px solid #ff6a00; padding: 32px; border-radius: 12px; margin: 0;">
          <p style="font-size: 20px; line-height: 1.8; color: #f0f0f0; margin: 0; font-style: italic;">
            "Once your campaign starts getting responses, you'll wonder why you didn't do this sooner."
          </p>
        </blockquote>
      </div>
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