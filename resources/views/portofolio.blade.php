<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pribadi</title>
    
    <!-- Google Fonts: Poppins untuk tampilan modern -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        /* ==========================================================================
           1. CSS Variables & Reset
           ========================================================================== */
        :root {
            --bg-main: #0F172A;
            --bg-section: #1E293B;
            --accent-primary: #38BDF8;
            --accent-secondary: #818CF8;
            --text-primary: #F8FAFC;
            --text-secondary: #94A3B8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-main);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        h1, h2, h3, h4 {
            color: var(--text-primary);
        }

        p {
            color: var(--text-secondary);
        }

        section {
            padding: 4rem 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* ==========================================================================
           2. Hero Section (Atas)
           ========================================================================== */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            gap: 2rem;
        }

        .hero-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        .gradient-text {
            background: linear-gradient(90deg, var(--accent-primary), var(--accent-secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
        }

        .hero-content p {
            font-size: 1.1rem;
            max-width: 500px;
            margin: 0 auto;
        }

        .hero-3d-container {
            flex: 1;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px dashed var(--text-secondary);
            border-radius: 12px;
            min-height: 300px;
        }

        /* Desktop Layout Hero */
        @media (min-width: 768px) {
            .hero {
                flex-direction: row;
                text-align: left;
            }
            .hero-content p {
                margin: 0;
            }
            .hero-3d-container {
                min-height: 500px;
                border: none; /* Hilangkan border putus-putus saat implementasi asli */
            }
        }

        /* ==========================================================================
           3. About Me Section (Tengah)
           ========================================================================== */
        .section-title {
            font-size: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .about-grid {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .card {
            background-color: var(--bg-section);
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            margin-bottom: 1.5rem;
            color: var(--accent-primary);
            border-bottom: 2px solid var(--bg-main);
            padding-bottom: 0.5rem;
        }

        /* List Biodata */
        .biodata-list {
            list-style: none;
        }

        .biodata-list li {
            margin-bottom: 1rem;
            color: var(--text-secondary);
        }

        .biodata-list strong {
            color: var(--text-primary);
            display: inline-block;
            width: 120px;
        }

        /* Timeline Pendidikan */
        .timeline {
            border-left: 2px solid var(--accent-secondary);
            padding-left: 1.5rem;
            margin-left: 0.5rem;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -1.85rem;
            top: 0.25rem;
            width: 12px;
            height: 12px;
            background-color: var(--accent-primary);
            border-radius: 50%;
        }

        .timeline-item h4 {
            font-size: 1.1rem;
            margin-bottom: 0.25rem;
        }

        .timeline-item span {
            font-size: 0.85rem;
            color: var(--accent-primary);
            display: block;
            margin-bottom: 0.5rem;
        }

        /* Desktop Layout About */
        @media (min-width: 768px) {
            .about-grid {
                flex-direction: row;
            }
            .card {
                flex: 1;
            }
        }

        /* ==========================================================================
           4. Portfolio Section (Bawah)
           ========================================================================== */
        .portfolio-category {
            font-size: 1.5rem;
            margin: 3rem 0 1rem;
            color: var(--text-primary);
        }

        /* Baris 1: Fotografi (Grid 3 Kolom) */
       /* --- Slider Fotografi --- */
        .slider-photography {
            display: flex;
            gap: 1rem;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            padding-bottom: 1rem;
            
            /* Kustomisasi Scrollbar agar rapi */
            scrollbar-width: thin;
            scrollbar-color: var(--accent-primary) var(--bg-main);
        }

        .slider-photography::-webkit-scrollbar {
            height: 8px;
        }

        .slider-photography::-webkit-scrollbar-track {
            background: var(--bg-main);
            border-radius: 4px;
        }

        .slider-photography::-webkit-scrollbar-thumb {
            background-color: var(--accent-primary);
            border-radius: 4px;
        }

        .photo-slide {
            flex: 0 0 85%; /* Menampilkan 85% lebar foto di layar HP */
            scroll-snap-align: center; /* Berhenti tepat di tengah saat digeser */
            border-radius: 12px;
            overflow: hidden;
            aspect-ratio: 1 / 1;
        }

        .photo-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .photo-slide:hover img {
            transform: scale(1.05);
        }

        /* Tampilan untuk Tablet dan Desktop */
        @media (min-width: 768px) {
            .photo-slide {
                flex: 0 0 30%; /* Menampilkan 3 foto sekaligus di layar lebar */
                scroll-snap-align: start;
            }
        }

        /* Baris 2: Desain Grafis (Card Layout) */
       /* --- Slider Desain Grafis --- */
        .slider-graphic {
            display: flex;
            gap: 1.5rem;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            padding-bottom: 1rem;
            
            /* Kustomisasi Scrollbar */
            scrollbar-width: thin;
            scrollbar-color: var(--accent-primary) var(--bg-main);
        }

        .slider-graphic::-webkit-scrollbar {
            height: 8px;
        }

        .slider-graphic::-webkit-scrollbar-track {
            background: var(--bg-main);
            border-radius: 4px;
        }

        .slider-graphic::-webkit-scrollbar-thumb {
            background-color: var(--accent-primary);
            border-radius: 4px;
        }

        .design-slide {
            flex: 0 0 85%; /* Mengambil 85% lebar layar HP */
            scroll-snap-align: center; /* Berhenti di tengah saat digeser */
            background-color: var(--bg-section);
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .design-slide:hover {
            transform: translateY(-5px);
        }

        .design-slide img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .design-info {
            padding: 1.5rem;
        }

        .design-info h4 {
            margin-bottom: 0.5rem;
        }

        /* Tampilan untuk Tablet dan Desktop */
        @media (min-width: 768px) {
            .design-slide {
                flex: 0 0 45%; /* Menampilkan 2 kartu di layar lebar */
                scroll-snap-align: start;
            }
        }

        /* Baris 3: UI/UX Design (Showcase Foto Penuh) */
        /* --- Slider UI/UX Design --- */
        .slider-uiux {
            display: flex;
            gap: 1.5rem;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            padding-bottom: 1rem;
            
            /* Kustomisasi Scrollbar */
            scrollbar-width: thin;
            scrollbar-color: var(--accent-primary) var(--bg-main);
        }

        .slider-uiux::-webkit-scrollbar {
            height: 8px;
        }

        .slider-uiux::-webkit-scrollbar-track {
            background: var(--bg-main);
            border-radius: 4px;
        }

        .slider-uiux::-webkit-scrollbar-thumb {
            background-color: var(--accent-primary);
            border-radius: 4px;
        }

        .uiux-slide {
            flex: 0 0 90%; /* Mengambil 90% lebar layar HP agar gambar sebelahnya ngintip sedikit */
            scroll-snap-align: center; /* Snap di tengah */
            background-color: var(--bg-section);
            border-radius: 16px;
            overflow: hidden;
        }

        .uiux-slide img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .uiux-slide:hover img {
            transform: scale(1.02);
        }

        /* Tampilan untuk Tablet dan Desktop */
        @media (min-width: 768px) {
            .uiux-slide {
                flex: 0 0 75%; /* Menampilkan 75% di desktop agar gambar lebar tetap proporsional */
            }
            .uiux-slide img {
                height: 450px; /* Gambar lebih tinggi di desktop */
            }
        }

        /* Utility class untuk animasi dasar (dikontrol via JS) */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

    <!-- =======================================================================
         1. BAGIAN HERO
         ======================================================================= -->
    <section class="hero" id="home">
        <div class="hero-content fade-in">
            <h1>Halo, Saya <br><span class="gradient-text">Putri</span></h1>
            <p>Saya adalah mahasiswa Multimedia Broadcasting yang memiliki fokus keahlian di bidang produksi media digital, desain grafis, dan pengembangan web. Tertarik di bidang industri kreatif, aktif mengikuti perkembangan teknologi multimedia, serta memiliki pengalaman dalam memimpin kepanitiaan kampus dan manajemen organisasi.</p>
        </div>
        <div class="hero-3d-container fade-in">
            <!-- Insert 3D Asset (e.g., Spline viewer or 3D Render PNG) here -->
            <p style="color: var(--text-secondary); opacity: 0.5;">[ Area Render Aset 3D ]</p>
        </div>
    </section>

    <!-- =======================================================================
         2. BAGIAN ABOUT ME
         ======================================================================= -->
    <section class="about" id="about">
        <h2 class="section-title fade-in">Tentang Saya</h2>
        <div class="about-grid">
            
            <!-- Kolom 1: Biodata -->
            <div class="card biodata fade-in">
                <h3>Informasi Pribadi</h3>
                <ul class="biodata-list">
                    <li><strong>Nama :</strong> Putri Amalia Hamidah</li>
                    <li><strong>Lokasi:</strong> Surabaya</li>
                    <li><strong>Email:</strong> putriamaliahamidah23@gmail.com</li>
                    <li><strong>Minat:</strong>Desain Grafis</li>
                </ul>
            </div>

            <!-- Kolom 2: Pendidikan -->
            <div class="card education fade-in">
                <h3>Riwayat Pendidikan</h3>
                <div class="timeline">
                    <div class="timeline-item">
                        <h4>SMA Negeri Jogorotp</h4>
                        <span>2022 - 2024</span>
                        <p>Ilmu Pengetahuan Sosial (IPS)</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Politeknik Elektronika Negeri Surabaya </h4>
                        <span>2024 - Sekarang</span>
                        <p>Menjalani program studi Teknologi Multimedia Broadcasting.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =======================================================================
         3. BAGIAN PORTOFOLIO
         ======================================================================= -->
    <section class="portfolio" id="portfolio">
        <h2 class="section-title fade-in">Karya & Portofolio</h2>

        <h3 class="portfolio-category fade-in">Fotografi</h3>
        <div class="slider-photography fade-in">
            <div class="photo-slide"><img src="https://images.unsplash.com/photo-1516339901601-2e1b62dc0c45?q=80&w=400&auto=format&fit=crop" alt="Foto 1"></div>
            <div class="photo-slide"><img src="https://images.unsplash.com/photo-1542038784456-1ea8e935640e?q=80&w=400&auto=format&fit=crop" alt="Foto 2"></div>
            <div class="photo-slide"><img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=400&auto=format&fit=crop" alt="Foto 3"></div>
            <div class="photo-slide"><img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=400&auto=format&fit=crop" alt="Foto 4"></div>
            <div class="photo-slide"><img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=400&auto=format&fit=crop" alt="Foto 5"></div>
        </div>

        <!-- Baris 2: Desain Grafis -->
        <h3 class="portfolio-category fade-in">Desain Grafis</h3>
        <div class="slider-photography fade-in">
            <div class="photo-slide">
                <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?q=80&w=600&auto=format&fit=crop" alt="Karya Desain 1">
            </div>
            <div class="photo-slide">
                <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?q=80&w=600&auto=format&fit=crop" alt="Karya Desain 2">
            </div>
            <div class="photo-slide">
                <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?q=80&w=600&auto=format&fit=crop" alt="Karya Desain 3">
            </div>
             <div class="photo-slide">
                <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?q=80&w=600&auto=format&fit=crop" alt="Karya Desain 3">
            </div>
             <div class="photo-slide">
                <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?q=80&w=600&auto=format&fit=crop" alt="Karya Desain 3">
            </div>
        </div>

        <!-- Baris 3: UI/UX Design (Diperbarui) -->
        <h3 class="portfolio-category fade-in">UI/UX Design</h3>
        <div class="slider-uiux fade-in">
            <div class="uiux-slide">
                <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?q=80&w=1200&auto=format&fit=crop" alt="Mockup Aplikasi UI/UX 1">
            </div>
            <div class="uiux-slide">
                <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?q=80&w=1200&auto=format&fit=crop" alt="Mockup Aplikasi UI/UX 2">
            </div>
        </div>
    </section>

    <!-- =======================================================================
         SCRIPT JAVASCRIPT (Interaktivitas Dasar)
         ======================================================================= -->
    <script>
        // Vanilla JS untuk efek Fade-in saat elemen masuk ke viewport (Scroll Reveal)
        document.addEventListener("DOMContentLoaded", () => {
            const faders = document.querySelectorAll('.fade-in');

            const appearOptions = {
                threshold: 0.15,
                rootMargin: "0px 0px -50px 0px"
            };

            const appearOnScroll = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) {
                        return;
                    } else {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, appearOptions);

            faders.forEach(fader => {
                appearOnScroll.observe(fader);
            });
        });
    </script>
</body>
</html>