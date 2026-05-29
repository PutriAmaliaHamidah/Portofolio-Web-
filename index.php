<?php
// Single-file Personal Portfolio SPA
// Author: Generated for user
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Profil — Nama Saya</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <meta name="color-scheme" content="dark">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header>
    <div class="wrap nav">
      <div class="brand">Nama Saya</div>
      <nav class="navlinks" aria-label="Main navigation">
        <a href="#hero">Home</a>
        <a href="#about">About</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
      </nav>
    </div>
  </header>

  <main>
    <!-- HERO SECTION: Split Screen (Left: Text, Right: 3D Asset Placeholder) -->
    <section id="hero" class="hero">
      <div class="wrap hero-inner">
        <div>
          <h1 class="hero-title">Halo, saya <span class="name-gradient">Nama Saya</span></h1>
          <p class="hero-sub">Web Developer • UI/UX Enthusiast • Photographer — Saya membuat digital product dengan fokus pada pengalaman pengguna yang rapi dan estetis.</p>
          <p style="margin-top:18px"><a class="btn" href="#portfolio">Lihat Karya</a></p>
        </div>
      </div>

      <div class="wrap">
        <div class="hero-visual">
          <div class="visual-shell">
            <!-- Insert 3D Asset (e.g., Spline viewer or 3D Render PNG) here -->
            3D Asset Placeholder
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT SECTION: Biodata + Education Timeline -->
    <section id="about">
      <div class="wrap">
        <h2 class="section-title">About Me</h2>
        <div class="cards" style="grid-template-columns:1fr;">
          <div style="display:grid;gap:16px;grid-template-columns:1fr;">
            <div class="card">
              <!-- Biodata Card -->
              <h3 style="margin-top:0">Biodata</h3>
              <dl class="biodata">
                <dt>Nama Lengkap</dt>
                <dd>Nama Saya</dd>
                <dt>Lokasi</dt>
                <dd>Jawa Timur, Indonesia</dd>
                <dt>Email</dt>
                <dd>nama.saya@email.com</dd>
                <dt>Ketertarikan</dt>
                <dd>Frontend, Branding, Fotografi</dd>
              </dl>
            </div>

            <div class="card">
              <!-- Education Timeline Card -->
              <h3 style="margin-top:0">Pendidikan</h3>
              <div class="timeline">
                <div class="timeline-item">
                  <h4>S1 — Teknik Informatika</h4>
                  <p>Universitas Contoh — 2016 - 2020</p>
                </div>
                <div class="timeline-item">
                  <h4>SMK — Multimedia</h4>
                  <p>SMK Contoh — 2013 - 2016</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PORTFOLIO SECTION: Photography, Graphic Design, UI/UX -->
    <section id="portfolio">
      <div class="wrap">
        <h2 class="section-title">Portfolio</h2>

        <!-- Row 1: Photography (masonry grid) -->
        <div style="margin-bottom:26px">
          <h3 style="margin:0 0 12px 0">Fotografi</h3>
          <div class="photo-masonry">
            <div class="photo-item"><img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=0" alt="photo1"></div>
            <div class="photo-item"><img src="https://images.unsplash.com/photo-1499084732479-de2c02d45fc4?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=0" alt="photo2"></div>
            <div class="photo-item"><img src="https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=0" alt="photo3"></div>
            <div class="photo-item"><img src="https://images.unsplash.com/photo-1504198458649-3128b932f49b?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=0" alt="photo4"></div>
            <div class="photo-item"><img src="https://images.unsplash.com/photo-1472214103451-9374bd1c798e?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=0" alt="photo5"></div>
          </div>
        </div>

        <!-- Row 2: Graphic Design (cards) -->
        <div style="margin-bottom:26px">
          <h3 style="margin:0 0 12px 0">Desain Grafis</h3>
          <div class="cards-grid">
            <div class="work-card">
              <img src="https://images.unsplash.com/photo-1517487881594-2787fef5ebf7?q=80&w=1400&auto=format&fit=crop&ixlib=rb-4.0.3&s=0" alt="design1">
              <div class="meta"><h3>Brand Poster</h3><p>Desain poster untuk kampanye brand minimalis.</p></div>
            </div>
            <div class="work-card">
              <img src="https://images.unsplash.com/photo-1503602642458-232111445657?q=80&w=1400&auto=format&fit=crop&ixlib=rb-4.0.3&s=0" alt="design2">
              <div class="meta"><h3>Packaging</h3><p>Konsep kemasan produk dengan estetika modern.</p></div>
            </div>
            <div class="work-card">
              <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1400&auto=format&fit=crop&ixlib=rb-4.0.3&s=0" alt="design3">
              <div class="meta"><h3>Social Campaign</h3><p>Seri grafis untuk promosi media sosial.</p></div>
            </div>
          </div>
        </div>

        <!-- Row 3: UI/UX (mockup showcase) -->
        <div>
          <h3 style="margin:0 0 12px 0">UI / UX Design</h3>
          <div class="mockup">
            <div class="mockup-img">
              <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1400&auto=format&fit=crop&ixlib=rb-4.0.3&s=0" alt="mockup">
            </div>
            <div style="display:flex;align-items:center;justify-content:space-between;gap:12px;flex-wrap:wrap">
              <div>
                <h3 style="margin:0 0 6px 0">Aplikasi Finansial — Dashboard</h3>
                <p style="margin:0;color:var(--text-secondary)">Case study singkat tentang desain dashboard yang fokus pada data clarity.</p>
              </div>
              <div><a class="btn" href="#">Lihat Studi Kasus</a></div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact">
      <div class="wrap">
        <h2 class="section-title">Contact</h2>
        <div class="card" style="max-width:680px">
          <p style="margin:0 0 12px 0;color:var(--text-secondary)">Silakan kirim email untuk kerjasama atau pertanyaan.</p>
          <p style="margin:0"><strong>Email:</strong> nama.saya@email.com</p>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="wrap">© <?php echo date('Y'); ?> Nama Saya — Built with PHP, HTML5, CSS3 & Vanilla JS</div>
  </footer>

  <script src="assets/js/main.js" defer></script>
</body>
</html>
