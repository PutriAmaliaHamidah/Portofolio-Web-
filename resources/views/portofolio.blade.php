<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pribadi</title>
    
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
                border: none;
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
            margin-bottom: 1.5rem;
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

        /* --- Style Baru: Badge Software Skills --- */
        .software-skills h4 {
            font-size: 1rem;
            color: var(--text-primary);
            margin-bottom: 0.75rem;
        }

        .skill-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .skill-badge {
            background-color: rgba(56, 189, 248, 0.1);
            color: var(--accent-primary);
            border: 1px solid rgba(56, 189, 248, 0.2);
            padding: 0.35rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .skill-badge:hover {
            background-color: var(--accent-primary);
            color: var(--bg-main);
            transform: translateY(-2px);
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

        /* --- Slider Fotografi --- */
        .slider-photography {
            display: flex;
            gap: 1rem;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            padding-bottom: 1rem;
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
            flex: 0 0 85%;
            scroll-snap-align: center;
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

        @media (min-width: 768px) {
            .photo-slide {
                flex: 0 0 30%;
                scroll-snap-align: start;
            }
        }

        /* --- Slider UI/UX Design --- */
        .slider-uiux {
            display: flex;
            gap: 1.5rem;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            padding-bottom: 1rem;
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
            flex: 0 0 90%;
            scroll-snap-align: center;
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

        @media (min-width: 768px) {
            .uiux-slide {
                flex: 0 0 75%;
            }
            .uiux-slide img {
                height: 450px;
            }
        }

        /* Utility class untuk animasi */
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

    <section class="hero" id="home">
        <div class="hero-content fade-in">
            <h1>Halo, Saya <br><span class="gradient-text">Putri</span></h1>
            <p>Saya adalah mahasiswa Multimedia Broadcasting yang memiliki fokus keahlian di bidang produksi media digital, desain grafis, dan pengembangan web. Tertarik di bidang industri kreatif, aktif mengikuti perkembangan teknologi multimedia, serta memiliki pengalaman dalam memimpin kepanitiaan kampus dan manajemen organisasi.</p>
        </div>
        <div class="hero-3d-container fade-in">
            <p style="color: var(--text-secondary); opacity: 0.5;">[ Area Render Aset 3D ]</p>
        </div>
    </section>

    <section class="about" id="about">
        <h2 class="section-title fade-in">Tentang Saya</h2>
        <div class="about-grid">
            
            <div class="card biodata fade-in">
                <h3>Informasi Pribadi</h3>
                <ul class="biodata-list">
                    <li><strong>Nama :</strong> Putri Amalia Hamidah</li>
                    <li><strong>Kontak :</strong> 089699090033</li>
                    <li><strong>Email:</strong> putriamaliahamidah23@gmail.com</li>
                    <li><strong>Lokasi:</strong> Surabaya Timur</li>
                    <li><strong>Minat:</strong> Desain Grafis, Web Dev, UI/UX</li>
                </ul>

                <div class="software-skills">
                    <h4>Keahlian Software:</h4>
                    <div class="skill-badges">
                        <span class="skill-badge">Adobe Premiere Pro</span>
                        <span class="skill-badge">Adobe After Effects</span>
                        <span class="skill-badge">Adobe Illustrator</span>
                        <span class="skill-badge">Figma</span>
                        <span class="skill-badge">Canva</span>
                        <span class="skill-badge">HTML / CSS / PHP</span>
                    </div>
                </div>
            </div>

            <div class="card education fade-in">
                <h3>Riwayat Pendidikan</h3>
                <div class="timeline">
                    <div class="timeline-item">
                        <h4>SMA Negeri Jogoroto</h4>
                        <span>2022 - 2024</span>
                        <p>Ilmu Pengetahuan Sosial (IPS)</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Politeknik Elektronika Negeri Surabaya</h4>
                        <span>2024 - Sekarang</span>
                        <p>Menjalani program studi Teknologi Multimedia Broadcasting.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

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

        <h3 class="portfolio-category fade-in">Desain Grafis</h3>
        <div class="slider-photography fade-in">
            <div class="photo-slide">
                <img src="{{ asset('img/2.png') }}" alt="Karya Desain 1">
            </div>
            <div class="photo-slide">
                <img src="{{ asset('img/Biryani.png') }}" alt="Karya Desain 2">
            </div>
            <div class="photo-slide">
                <img src="{{ asset('img/Cake Menu.png') }}" alt="Karya Desain 3">
            </div>
             <div class="photo-slide">
                <img src="{{ asset('img/poster otak atik otak kuning-01.png') }}" alt="Karya Desain 4">
            </div>
             <div class="photo-slide">
                <img src="{{ asset('img/poster otak atik otak kuning-02.png') }}" alt="Karya Desain 5">
            </div>
        </div>

        <h3 class="portfolio-category fade-in">UI/UX Design</h3>
        <div class="slider-uiux fade-in">
            <div class="uiux-slide">
                <img src="{{ asset('img/Bakmie.png') }}" alt="UI/UX Design Mockup 1">
            </div>
            <div class="uiux-slide">
                <img src="{{ asset('img/Gymfit.png') }}" alt="Mockup Aplikasi UI/UX 2">
            </div>
        </div>
    </section>

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