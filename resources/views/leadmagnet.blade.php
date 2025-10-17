<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Growth Partner — Build Your Email List with Confidence</title>
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
          <span class="badge">✨ Email Growth Partner</span>
          <h1>Build Your <span class="highlight">Email List</span> with Strategy, Execution & <span class="highlight">Zero Risk</span></h1>
          <p class="lead">Work with me to create high-converting lead magnets, sales pages, and email campaigns that grow your audience — backed by a 14-day satisfaction guarantee.</p>
          <ul class="checkmarks">
            <li>Complete lead magnet strategy, design & copywriting</li>
            <li>Professional sales pages that actually convert</li>
            <li>Email campaigns optimized for your audience</li>
            <li>Clear communication and fast execution</li>
            <li>14-day guarantee — walk away if you're not satisfied</li>
          </ul>
        </div>
        <div>
          <div class="form-card">
            <h3>Let's Work Together</h3>
            <p class="muted">Start building your email list today</p>
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
              <button type="submit" class="btn-primary">Start My Email Growth Journey →</button>
            </form>
            <div style="margin-top:18px; margin-bottom:6px; background:rgba(255,106,0,0.07); border-radius:8px; padding:14px 18px; color:#222; font-size:15px; text-align:center;">
              <strong>14-Day Satisfaction Guarantee:</strong> Work with me for 14 days. If you're not completely satisfied with the strategy, execution, or communication, you can walk away — <span style="color:#ff6a00;font-weight:700;">no payment required</span>. I only work with clients who feel confident we're building something that truly grows.
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
      <h2>Why <span class="highlight">Email Growth Partner</span>?</h2>
      <p>Here's the truth: Most businesses struggle to grow their email list because they lack strategy, execution, or both. You need someone who understands what converts and can deliver it.</p>
      <p>I've spent years perfecting lead magnets and email campaigns that convert at <strong>35%+</strong> — meaning 35 out of 100 people who see your lead magnet actually download it and join your email list. That's the difference between crickets and a thriving audience.</p>
      <p>I work with a limited number of clients each month because I believe in quality over quantity. When we work together, you get my full attention and expertise — backed by a rock-solid guarantee.</p>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="section">
    <div class="container">
      <h2>How It Works <span class="highlight">(Dead Simple)</span></h2>
      <ol>
        <li><strong>Fill out the form above</strong> — Takes 60 seconds.</li>
        <li><strong>We hop on a discovery call</strong> — I'll learn about your audience, your goals, and what you want to build.</li>
        <li><strong>I create your strategy & assets</strong> — Lead magnets, sales pages, email campaigns — all designed to convert.</li>
        <li><strong>We launch together</strong> — I'll guide you through implementation and make sure everything works.</li>
        <li><strong>14-day checkpoint</strong> — If you're not satisfied, walk away. No payment. No hard feelings.</li>
      </ol>
      <p style="margin-top: 16px;">Clear communication. Fast execution. Results you can measure.</p>
    </div>
  </section>

  <!-- PROOF -->
  <section class="section">
    <div class="container">
      <h2>Results Our Clients Have <span class="highlight">Seen</span></h2>
      <div class="testimonials">
        <div class="testimonial">
          <blockquote>"We went from 12 email signups a month to 340. The lead magnet is doing all the heavy lifting now."</blockquote>
          <cite>— Sarah Mitchell, Business Coach @ Peak Performance Coaching</cite>
        </div>
        <div class="testimonial">
          <blockquote>"This lead magnet converted at 42%. We've never seen numbers like that from paid ads before."</blockquote>
          <cite>— David Chen, Life Coach @ Momentum Method</cite>
        </div>
        <div class="testimonial">
          <blockquote>"In 30 days we added 800+ qualified prospects to our email list. Our discovery call bookings tripled."</blockquote>
          <cite>— Maria Rodriguez, Executive Coach @ Leadership Edge</cite>
        </div>
      </div>
    </div>
  </section>

  <!-- GUARANTEE -->
  <section class="section">
    <div class="container">
      <h2>14-Day <span class="highlight">Satisfaction Guarantee</span></h2>
      <p><strong>Work with me for 14 days.</strong></p>
      <p>If you're not completely satisfied with the strategy, execution, or communication, you can walk away — <strong>no payment required</strong>.</p>
      <p>I only work with clients who feel confident we're building something that truly grows.</p>
      <p style="margin-top: 20px; font-style: italic; color: #6b6b6b;">This isn't about lock-in contracts or pressure. It's about building trust and delivering real value.</p>
    </div>
  </section>

  <!-- FUTURE PACING -->
  <section class="section">
    <div class="container">
      <h2>Imagine This: <span class="highlight">90 Days from Now</span></h2>
      <p>You wake up to <strong>47 new email subscribers</strong> — all qualified leads who downloaded your lead magnet overnight.</p>
      <p>Your email list is growing steadily. Your campaigns are converting. You're building real relationships with your audience.</p>
      <p>Your cost per acquisition? <strong>Lower than ever</strong>. Your time spent on marketing? <strong>More strategic</strong>. Your revenue? <strong>Growing consistently</strong>.</p>
      <p><strong>This is what a great email strategy does.</strong> It runs 24/7, attracting the right people while you focus on what you do best.</p>
    </div>
  </section>

  <!-- HANDLE OBJECTIONS -->
  <section class="section">
    <div class="container">
      <h2>But Wait… Why Should I Trust You?</h2>
      <p>Fair question. Here's why:</p>
      <ul>
        <li><strong>I've done this before.</strong> I've built lead magnets and email campaigns for businesses across multiple niches. I know what works.</li>
        <li><strong>I stand behind my work.</strong> The 14-day guarantee means you risk nothing. If you're not satisfied, you don't pay.</li>
        <li><strong>I work with limited clients.</strong> I can't work with everyone. I focus on quality, not quantity — which means you get my full attention.</li>
        <li><strong>You keep full ownership.</strong> Everything I create is yours. Use it however you want, forever.</li>
      </ul>
    </div>
  </section>

  <!-- REVERSE PSYCHOLOGY -->
  <section class="section">
    <div class="container">
      <h2>This is FOR You If...</h2>
      <ul class="checkmarks-light">
        <li>You run an online business (coaching, consulting, courses, services, etc.)</li>
        <li>You're tired of expensive ads that don't convert</li>
        <li>You want to build an email list of qualified prospects</li>
        <li>You're willing to implement what I create</li>
        <li>You value clear communication and fast execution</li>
      </ul>
      <h2 style="margin-top: 40px;">This is NOT For You If...</h2>
      <ul style="list-style: none; margin: 24px 0 0 0;">
        <li style="padding: 14px 0 14px 40px; position: relative; color: #2a2a2a; line-height: 1.7;">
          <span style="position: absolute; left: 0; top: 14px; width: 28px; height: 28px; background: #d93025; border-radius: 50%; color: white; font-weight: 900; font-size: 18px; text-align: center; line-height: 28px; box-shadow: 0 4px 15px rgba(217, 48, 37, 0.3);">✗</span>
          You're not serious about growing your business
        </li>
        <li style="padding: 14px 0 14px 40px; position: relative; color: #2a2a2a; line-height: 1.7;">
          <span style="position: absolute; left: 0; top: 14px; width: 28px; height: 28px; background: #d93025; border-radius: 50%; color: white; font-weight: 900; font-size: 18px; text-align: center; line-height: 28px; box-shadow: 0 4px 15px rgba(217, 48, 37, 0.3);">✗</span>
          You expect magic results without any effort on your part
        </li>
        <li style="padding: 14px 0 14px 40px; position: relative; color: #2a2a2a; line-height: 1.7;">
          <span style="position: absolute; left: 0; top: 14px; width: 28px; height: 28px; background: #d93025; border-radius: 50%; color: white; font-weight: 900; font-size: 18px; text-align: center; line-height: 28px; box-shadow: 0 4px 15px rgba(217, 48, 37, 0.3);">✗</span>
          You're just "browsing" and have no intention of launching this
        </li>
        <li style="padding: 14px 0 14px 40px; position: relative; color: #2a2a2a; line-height: 1.7;">
          <span style="position: absolute; left: 0; top: 14px; width: 28px; height: 28px; background: #d93025; border-radius: 50%; color: white; font-weight: 900; font-size: 18px; text-align: center; line-height: 28px; box-shadow: 0 4px 15px rgba(217, 48, 37, 0.3);">✗</span>
          You're looking for a get-rich-quick scheme (this is a real marketing strategy)
        </li>
      </ul>
    </div>
  </section>

  <!-- TWO OPTIONS -->
  <section class="section">
    <div class="container">
      <h2>You Have Two Choices Right Now</h2>
      <p><strong>Option 1:</strong> Keep doing what you're doing. Keep paying for ads that underperform. Keep manually chasing down leads. Keep wondering why your competitors are growing faster than you.</p>
      <p><strong>Option 2:</strong> Work with me to build a real email growth strategy, backed by a 14-day guarantee, and start attracting leads on autopilot.</p>
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
          <p>Work with me for 14 days. If you're not completely satisfied with the strategy, execution, or communication, you can walk away — no payment required. Simple as that.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-q">What if I don't like what you create?</button>
        <div class="faq-a">
          <p>I'll revise it until you love it. If you're still not satisfied within the first 14 days, we'll part ways — no hard feelings, no cost to you.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-q">How long does this take?</button>
        <div class="faq-a">
          <p>Typically 10-14 business days from our kickoff call to final delivery, depending on the scope. I move fast without sacrificing quality.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-q">Do I need to know how to code or design?</button>
        <div class="faq-a">
          <p>Nope. I handle everything — copywriting, design, and setup instructions. You just approve and launch.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-q">What kind of lead magnet will you create?</button>
        <div class="faq-a">
          <p>It depends on your audience and offer. Could be a quiz, a downloadable guide, a free training video, a roadmap, a checklist, or something custom. We'll figure out what converts best for your business.</p>
        </div>
      </div>
      <div class="faq-item">
        <button class="faq-q">What's your pricing?</button>
        <div class="faq-a">
          <p>Every project is different, so pricing varies based on scope. After our discovery call, I'll provide a clear quote. Remember: you have 14 days to decide if we're a good fit.</p>
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
        <li><strong>A 30-minute conversion optimization audit</strong> (worth $500) — I'll review your website and give you 5 quick wins to boost conversions.</li>
        <li><strong>Email templates</strong> to follow up with leads who download your lead magnet.</li>
      </ul>
      <p>This bonus disappears when the timer hits zero. Don't miss it.</p>
    </div>
  </section>

  <!-- VALUE STACK -->
  <section class="section">
    <div class="container">
      <h2>What You Get as an <span class="highlight">Email Growth Partner</span></h2>
      <div class="value-grid">
        <div class="value-item">
          <strong>Custom Lead Magnet Strategy & Design</strong>
          <p>Copywriting, design, and strategy tailored to your business and audience.</p>
          <div class="price">Included</div>
        </div>
        <div class="value-item">
          <strong>Professional Sales Pages</strong>
          <p>High-converting landing pages that turn visitors into subscribers.</p>
          <div class="price">Included</div>
        </div>
        <div class="value-item">
          <strong>Email Campaign Setup</strong>
          <p>Nurture sequences and promotional campaigns that convert.</p>
          <div class="price">Included</div>
        </div>
        <div class="value-item">
          <strong>Fast Delivery</strong>
          <p>Most projects completed in 10-14 days so you can start growing ASAP.</p>
          <div class="price">Included</div>
        </div>
        <div class="value-item">
          <strong>Conversion Audit (Bonus)</strong>
          <p>30-minute review of your website + 5 quick wins.</p>
          <div class="price">Bonus</div>
        </div>
        <div class="value-item">
          <strong>14-Day Satisfaction Guarantee</strong>
          <p>Not satisfied? Walk away. No payment required.</p>
          <div class="price">Peace of Mind</div>
        </div>
      </div>
    </div>
  </section>

  <!-- EMOTIONAL TRIGGERS -->
  <section class="section">
    <div class="container">
      <h2>The Real Cost of <span class="highlight">Doing Nothing</span></h2>
      <p>Every day you wait, your competitors are getting better at attracting leads. They're building email lists. They're nurturing relationships. They're growing.</p>
      <p>Meanwhile, you're spending money on ads that barely break even. You're watching your conversion rates stay flat. You're stuck in the grind.</p>
      <p><strong>Six months from now, you'll wish you started today.</strong></p>
      <p>This is your chance to level up — backed by a risk-free guarantee. Don't let it slip by.</p>
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
      <h2>Ready to Grow Your <span class="highlight">Email List</span>?</h2>
      <p>Let's build something great together. <strong id="slotsLeft3">7</strong> spots available this month.</p>
      <a href="#leadForm" class="btn-white">Start My Email Growth Journey →</a>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2025 Email Growth Partner. All rights reserved.</p>
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