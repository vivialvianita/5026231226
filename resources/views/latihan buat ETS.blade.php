<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simplify Structures</title>
  <style>
    /* Reset default margin and padding */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
    }

    /* Navbar styles */
    nav {
      display: flex;
      justify-content: space-between;
      padding: 20px;
      background-color: #f5fff5;
      color: #000000;
    }
    nav .logo {
      font-size: 24px;
      font-weight: bold;
    }
    nav ul {
      list-style-type: none;
      display: flex;
      gap: 20px;
    }
    nav ul li {
      display: inline;
    }
    nav ul li a {
      color: #000000;
      text-decoration: none;
      font-size: 18px;
    }
    nav .logo img {
      width: 50%;
      height: auto;
    }

    /* Button styles */
    .btn-green {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      text-align: center;
      border-radius: 5px;
    }
    .btn-green:hover {
      background-color: #45a049;
    }

    /* Section styles */
    .section {
      padding: 60px 0;
      text-align: center;
    }
    .highlight-boxes {
      display: flex;
      justify-content: center;
      gap: 30px;
      margin-top: 30px;
    }
    .highlight-boxes img {
      border-radius: 10px; 
      width: 400px;
      height: 300px;
    }
    .highlight-box1 {
      padding: 20px;
      background-color: #f4f4f4;
      border: 1px solid #8b8b8b;
      width: 300px;
      height: 250px;
      border-radius: 10px
    }
    .highlight-box2 {
      padding: 20px;
      background-color: #f5fff5;
      border: 1px solid #8b8b8b;
      width: 300px;
      height: 250px;
      border-radius: 10px
    }
    .highlight-box3 {
      padding: 20px;
      background-color: #000000;
      border: 1px solid #8b8b8b;
      width: 300px;
      height: 250px;
      border-radius: 10px
    }

    /* Section headline */
    .section-headline {
      font-size: 32px;
      margin-bottom: 30px;
    }

    /* Service list */
    .services-list {
      list-style-type: none;
      text-align: left;
      margin-top: 30px;
    }
    .services-list li {
      font-size: 18px;
      margin-bottom: 10px;
    }

    /* Footer styles */
    footer {
      background-color: #f5fff5;
      color: #000000;
      padding: 20px;
      text-align: center;
    }
    footer a {
      color: #000000;
      text-decoration: none;
      margin: 0 10px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
<nav>
    <div class="logo">
      <img src="AssetLatihan/logoComp.png"/>
    </div>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Testimonials</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services⏷</a>
      <li><a href="#">Instant Estimate</a></li>
      <li><a href="#">Contact</a></li>
      </ul>
      </li>
    </ul>
  </nav>

  <!-- Hero Section -->
  <div class="section">
    <button class="btn-green">Contact Us</button>
    <div class="highlight-boxes">
      <div class="highlight-box1">
        <h2>Affordable Chartered Engineers</h2>
        <p>Accurate & Hassle-Free Structural Reports and Calculations You Can Trust</p>
      </div>
      <div class="highlight-box2">
        <h3>100%</h3>
        <p>Building Control Approval</p>
      </div>
      <div class="highlight-box3">
        <h3>5–10 days Turnaround</h3>
        <p>Turnaround</p>
      </div>
    </div>
  </div>

  <!-- Structural Consulting Section -->
  <div class="section">
    <h2 class="section-headline">Helpful Structural Consulting for Homeowners, Architects, and Contractors</h2>
    <button class="btn-green">GET INSTANT COST ESTIMATE</button>
    <div class="highlight-boxes">
      <img src="AssetLatihan/dindingbata.jpg" alt="Cracked Wall" width="300px">
      <img src="AssetLatihan/rumah.jpg" alt="Classic House" width="300px">
    </div>
    <h3>Chartered Engineers Structural Inspection and Design Services</h3>
    <button class="btn-green">ALL SERVICES</button>
    <ul class="services-list">
      <li>Structural Engineer for Wall Removals, Lofts and Home Extensions</li>
      <li>General Structural Inspection (GSI)</li>
      <li>Specific Structural Inspection (SSI)</li>
      <li>Certificate of Structural Adequacy (CSA)</li>
      <li>Home Structural Inspection</li>
      <li>Pre-Purchase Structural Inspection</li>
      <li>Subsidence Inspection</li>
    </ul>
  </div>

  <!-- Trusted Name Section -->
  <div class="section">
    <h2 class="section-headline">Simplify Structures has Became a Trusted Name in Structural Inspections & Design</h2>
    <p>Simplify Structures menyediakan layanan konsultasi yang jelas dan langsung...</p>
    <button class="btn-green">READ MORE</button>
    <div class="highlight-boxes">
      <div class="highlight-box">
        <h3>Our Approach</h3>
        <p>Since our inception...</p>
      </div>
      <div class="highlight-box">
        <img src="damaged-wall.jpg" alt="Damaged Wall" width="300px">
      </div>
    </div>
    <button class="btn-green">READ MORE</button>
  </div>

  <!-- Why Choose Us Section -->
  <div class="section">
    <h2 class="section-headline">Why Choose Simplify Structures?</h2>
    <p><strong>Expert Engineers</strong>: Our small team of seasoned structural engineers...</p>
    <p><strong>Customer Focused</strong>: We prioritise client satisfaction...</p>
    <img src="house-with-scaffolding.jpg" alt="House with Scaffolding" width="300px">
    <h3>Client Experiences</h3>
    <p>Ben Newman ⭐⭐⭐⭐⭐ (May 21, 2022)</p>
    <p>Andy York ⭐⭐⭐⭐⭐ (October 13, 2020)</p>
    <p>Kirk Wright ⭐⭐⭐⭐⭐ (March 18, 2022)</p>
    <p>Sue Rawling ⭐⭐⭐⭐⭐ (October 18, 2022)</p>
    <p>Google rating score: 4.9 of 5, based on 133 reviews</p>
  </div>

  <!-- Call to Action Section -->
  <div class="section">
    <h2 class="section-headline">Don’t Wait, Ensure Your Property’s Safety Today!</h2>
    <h3>Get in touch with us for expert and comprehensive structural consulting services!</h3>
    <button class="btn-green">GET STARTED</button>
  </div>

  <!-- Contact Form -->
  <section class="py-5 bg-light" id="contact-form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 bg-white p-4 rounded shadow">
          <h3 class="text-center mb-4" style="font-family: 'Dancing Script', cursive;">Hubungi Kami</h3>
          <form id="legitForm" novalidate>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" required>
              <div class="invalid-feedback">Nama tidak boleh kosong.</div>
            </div>
            <div class="mb-3">
              <label for="wa" class="form-label">Nomor Handphone (WA)</label>
              <input type="tel" class="form-control" id="wa" pattern="62[0-9]{9,}" required placeholder="62xxxxxxxxx">
              <div class="invalid-feedback">Masukkan nomor WA yang valid diawali 62.</div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required>
              <div class="invalid-feedback">Masukkan alamat email yang valid.</div>
            </div>
            <button type="submit" class="btn btn-warning w-100">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div>
      <a href="#">Home</a>
      <a href="#">Services</a>
      <a href="#">About</a>
      <a href="#">Blog</a>
      <a href="#">Instant Estimate</a>
      <a href="#">Areas Covered</a>
      <a href="#">Contact</a>
      <a href="#">Partnering with Architects</a>
    </div>
    <p>Copyright © Affordable Chartered Structural Engineers - Simplify Structures</p>
    <p>Our office: 6 Frederick Street, Unit 6, Wigston, Leicester, LE18 1PJ</p>
  </footer>

</body>
</html>
