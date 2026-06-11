<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pribadi</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
            padding: 6rem 1.5rem 4rem; 
            max-width: 1200px;
            margin: 0 auto;
        }

        /* ==========================================================================
           1.5. Navbar (Navigasi Atas)
           ========================================================================== */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1.2rem 5%;
            background-color: rgba(15, 23, 42, 0.85); 
            backdrop-filter: blur(10px); 
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            border-bottom: 1px solid var(--bg-section);
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
            text-decoration: none;
            letter-spacing: 1px;
        }

        .navbar .logo span {
            color: var(--accent-primary);
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-primary);
            font-weight: 600;
            font-size: 0.95rem;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--accent-primary);
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
            padding-top: 80px; 
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
            border-radius: 18px;
            min-height: 320px;
            padding: 1.5rem;
            background: linear-gradient(180deg, rgba(15, 23, 42, 0.95), rgba(30, 41, 59, 0.9));
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.25);
            perspective: 1600px;
        }

        #threeContainer {
            width: 100%;
            height: 100%;
            min-height: 320px;
            border-radius: 22px;
            overflow: hidden;
            position: relative;
            background: rgba(15, 23, 42, 0.15);
        }

        #threeContainer canvas {
            width: 100%;
            height: 100%;
            display: block;
        }

        .three-help {
            position: absolute;
            left: 1rem;
            top: 1rem;
            z-index: 1;
            background: rgba(15, 23, 42, 0.72);
            color: rgba(248, 250, 252, 0.92);
            padding: 0.55rem 0.9rem;
            border-radius: 999px;
            font-size: 0.9rem;
            pointer-events: none;
        }


        @media (min-width: 768px) {
            .hero {
                flex-direction: row;
                text-align: left;
            }
            .hero-content p {
                margin: 0;
            }
            .hero-3d-container {
                min-height: 520px;
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

        .biodata-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 1rem; 
        }

        .biodata-list li {
            display: flex;
            align-items: flex-start; 
            color: var(--text-secondary);
        }

        .biodata-list strong {
            color: var(--text-primary);
            flex-shrink: 0; 
            width: 140px; 
            display: flex;
            justify-content: space-between; 
            margin-right: 10px; 
        }

        .biodata-list strong .label-txt {
            display: inline-block;
            width: 115px; 
        }

        .biodata-list span.info-text {
            flex: 1; 
        }

        .skills-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            flex: 1;
        }

        .skill-pill {
            background-color: rgba(56, 189, 248, 0.1);
            color: var(--accent-primary);
            border: 1px solid var(--accent-primary);
            padding: 0.3rem 0.8rem;
            border-radius: 999px; 
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: default;
        }

        .skill-pill:hover {
            background-color: var(--accent-primary);
            color: var(--bg-main);
            transform: translateY(-2px);
        }

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

        @media (min-width: 768px) {
            .about-grid {
                flex-direction: row;
            }
            .card {
                flex: 1;
            }
        }

        /* ==========================================================================
           4. Portfolio Section (Bawah) - Slider Setup
           ========================================================================== */
        .portfolio-category {
            font-size: 1.5rem;
            margin: 3rem 0 1rem;
            color: var(--text-primary);
        }

        .slider-horizontal {
            display: flex;
            gap: 1.5rem;
            overflow-x: auto;
            padding-bottom: 1rem;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: thin;
            scrollbar-color: var(--accent-primary) var(--bg-main);
        }

        .slider-horizontal::-webkit-scrollbar {
            height: 8px;
        }
        .slider-horizontal::-webkit-scrollbar-track {
            background: var(--bg-main);
            border-radius: 4px;
        }
        .slider-horizontal::-webkit-scrollbar-thumb {
            background-color: var(--accent-primary);
            border-radius: 4px;
        }

        .photo-item {
            flex: 0 0 80%;
            scroll-snap-align: center;
            border-radius: 12px;
            overflow: hidden;
            aspect-ratio: 1 / 1;
            position: relative;
        }

        .photo-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .photo-item:hover img {
            transform: scale(1.1);
        }

        @media (min-width: 768px) {
            .photo-item {
                flex: 0 0 30%;
                scroll-snap-align: start;
            }
        }

        /* Dimensi Kartu Desain Grafis Poster 3:4 */
        .design-card {
            flex: 0 0 70%;
            scroll-snap-align: center;
            background-color: var(--bg-section);
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            aspect-ratio: 3 / 4; 
        }

        .design-card:hover {
            transform: translateY(-5px);
        }

        .design-card img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
        }

        @media (min-width: 768px) {
            .design-card {
                flex: 0 0 25%; 
                scroll-snap-align: start;
            }
        }

        /* Penyesuaian Bagian UI/UX Untuk Slider */
        .uiux-showcase {
            background-color: var(--bg-section);
            border-radius: 16px;
            overflow: hidden;
            width: 100%;
            flex: 0 0 85%; 
            scroll-snap-align: center;
        }

        .uiux-showcase img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .uiux-showcase:hover img {
            transform: scale(1.02);
        }

        @media (min-width: 768px) {
            .uiux-showcase {
                flex: 0 0 60%; 
                scroll-snap-align: start;
            }
            .uiux-showcase img {
                height: 450px;
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ==========================================================================
           5. Chatbot AI UI
           ========================================================================== */
        .chatbot-btn {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
            color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            z-index: 1000;
            transition: transform 0.3s ease;
            border: none;
        }

        .chatbot-btn:hover {
            transform: scale(1.1);
        }

        .chatbot-window {
            position: fixed;
            bottom: 6rem;
            right: 2rem;
            width: 350px;
            background-color: var(--bg-section);
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
            display: flex;
            flex-direction: column;
            z-index: 999;
            transform: scale(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .chatbot-window.active {
            transform: scale(1);
        }

        .chat-header {
            background-color: var(--bg-main);
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .chat-header h4 {
            font-size: 1rem;
            color: var(--accent-primary);
        }

        .close-chat {
            cursor: pointer;
            color: var(--text-secondary);
            font-weight: bold;
        }

        .chat-body {
            padding: 1rem;
            height: 300px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            scrollbar-width: thin;
        }

        .chat-msg {
            max-width: 80%;
            padding: 0.8rem 1rem;
            border-radius: 12px;
            font-size: 0.9rem;
            line-height: 1.4;
        }

        .chat-msg.bot {
            background-color: var(--bg-main);
            color: var(--text-primary);
            align-self: flex-start;
            border-bottom-left-radius: 0;
        }

        .chat-msg.user {
            background-color: var(--accent-primary);
            color: var(--bg-main);
            align-self: flex-end;
            border-bottom-right-radius: 0;
            font-weight: 600;
        }

        .chat-options-area {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            padding: 1rem;
            background-color: var(--bg-main);
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .chat-option-btn {
            background-color: transparent;
            color: var(--accent-primary);
            border: 1px solid var(--accent-primary);
            padding: 0.6rem 1rem;
            border-radius: 8px;
            font-family: inherit;
            font-size: 0.85rem;
            text-align: left;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .chat-option-btn:hover {
            background-color: var(--accent-primary);
            color: var(--bg-main);
            font-weight: 500;
        }
    </style>

<script type="importmap">
      {
        "imports": {
          "three": "https://cdn.jsdelivr.net/npm/three@0.158.0/build/three.module.js",
          "three/addons/": "https://cdn.jsdelivr.net/npm/three@0.158.0/examples/jsm/"
        }
      }
    </script>
</head>
<body>

    <nav class="navbar">
        <a href="#home" class="logo">My<span>Profile</span></a>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
        </ul>
    </nav>

    <section class="hero" id="home">
        <div class="hero-content fade-in">
            <h1>Halo, Saya <br><span class="gradient-text">Putri</span></h1>
            <p>Mahasiswa Multimedia Broadcasting di Politeknik Elektronika Negeri Surabaya (PENS) angkatan 2024 yang kreatif, adaptif, dan memiliki ketertarikan kuat di bidang produksi video, UI/UX design, design graphic. Berpengalaman dalam mengelola proyek kreatif, kepanitiaan kampus, serta mahir mengoperasikan berbagai software editing dan desain. Siap berkontribusi secara produktif dalam program magang di lingkungan kerja yang dinamis.</p>
        </div>
        <div class="hero-3d-container fade-in" id="hero3dContainer">
            <div id="threeContainer">
                <div class="three-help">Klik dan geser untuk putar model 3D</div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <h2 class="section-title fade-in">Tentang Saya</h2>
        <div class="about-grid">
            
            <div class="card biodata fade-in">
                <h3>Informasi Pribadi</h3>
                <ul class="biodata-list">
                    <li>
                        <strong><span class="label-txt">Nama</span>:</strong> 
                        <span class="info-text">Putri Amalia Hamidah</span>
                    </li>
                    <li>
                        <strong><span class="label-txt">Lokasi</span>:</strong> 
                        <span class="info-text">Surabaya, Indonesia</span>
                    </li>
                    <li>
                        <strong><span class="label-txt">Email</span>:</strong> 
                        <span class="info-text">putriamalia230705@gmail.com</span>
                    </li>
                    <li>
                        <strong><span class="label-txt">Ketertarikan</span>:</strong> 
                        <span class="info-text">Desain Grafis, Penyiar, Editing</span>
                    </li>
                    <li>
                        <strong><span class="label-txt">Skill</span>:</strong> 
                        <div class="skills-wrapper">
                            <span class="skill-pill">Adobe Premiere</span>
                            <span class="skill-pill">Adobe Illustrator</span>
                            <span class="skill-pill">After Effects</span>
                            <span class="skill-pill">CapCut</span>
                            <span class="skill-pill">Canva</span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="card education fade-in">
                <h3>Riwayat Pendidikan</h3>
                <div class="timeline">
                    <div class="timeline-item">
                        <h4>SMA Negeri Jogoroto</h4>
                        <span>2022-2024</span>
                        <p>Ilmu Pengetahuan Sosial</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Politeknik Elektronika Negeri Surabaya</h4>
                        <span>2024 - Sekarang</span>
                        <p>Menjalani program studi di bidang Teknologi Multimedia Broadcasting.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <h2 class="section-title fade-in">Karya & Portofolio</h2>

        <h3 class="portfolio-category fade-in">Fotografi</h3>
        <div class="slider-horizontal fade-in">
            <div class="photo-item">
                <img src="/img/D4.jpeg" alt="Foto D4">
            </div>
            <div class="photo-item">
                <img src="/img/D4-1.jpeg" alt="Foto D4-1">
            </div>
            <div class="photo-item">
                <img src="/img/jemur garam.jpeg" alt="Foto Jemur Garam">
            </div>
            <div class="photo-item">
                <img src="/img/PENS.jpeg" alt="Foto PENS">
            </div>
            <div class="photo-item">
                <img src="/img/Sunset.jpeg" alt="Foto Sunset">
            </div>
            <div class="photo-item">
                <img src="/img/SMA.jpeg" alt="Foto SMA">
            </div>
        </div>

        <h3 class="portfolio-category fade-in">Desain Grafis</h3>
        <div class="slider-horizontal fade-in">
            <div class="design-card">
                <img src="/img/2.png" alt="Karya Desain 1">
            </div>
            <div class="design-card">
                <img src="/img/Cake Menu.png" alt="Karya Desain 2">
            </div>
            <div class="design-card">
                <img src="/img/Biryani.png" alt="Karya Desain 3">
            </div>
            <div class="design-card">
                <img src="/img/poster otak atik otak kuning-01.png" alt="Karya Desain 4">
            </div>
        </div>

        <h3 class="portfolio-category fade-in">UI/UX Design</h3>
        <div class="slider-horizontal fade-in">
            <div class="uiux-showcase">
                <img src="/img/bakmie.png" alt="Mockup Aplikasi UI/UX 1">
            </div>
            <div class="uiux-showcase">
                <img src="/img/Gymfit.png" alt="Mockup Aplikasi UI/UX 2">
            </div>
        </div>
    </section>

    <button class="chatbot-btn" id="chatToggleBtn">💬</button>
    
    <div class="chatbot-window" id="chatWindow">
        <div class="chat-header">
            <h4>Tanya Putri (AI Bot)</h4>
            <span class="close-chat" id="chatCloseBtn">✕</span>
        </div>
        
        <div class="chat-body" id="chatBody">
            <div class="chat-msg bot">Halo! Saya asisten virtual Putri. Pilih pertanyaan di bawah ini untuk mengenal Putri lebih jauh!</div>
        </div>
        
        <div class="chat-options-area" id="chatOptions">
            <button class="chat-option-btn" onclick="sendOption(this)">Apa keahlian utamamu?</button>
            <button class="chat-option-btn" onclick="sendOption(this)">Apa kesibukan terbarumu?</button>
            <button class="chat-option-btn" onclick="sendOption(this)">Bagaimana cara menghubungimu?</button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const faders = document.querySelectorAll('.fade-in');
            const appearOptions = { threshold: 0.15, rootMargin: "0px 0px -50px 0px" };

            const appearOnScroll = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                });
            }, appearOptions);

            faders.forEach(fader => {
                appearOnScroll.observe(fader);
            });

            const chatToggleBtn = document.getElementById('chatToggleBtn');
            const chatCloseBtn = document.getElementById('chatCloseBtn');
            const chatWindow = document.getElementById('chatWindow');

            chatToggleBtn.addEventListener('click', () => {
                chatWindow.classList.add('active');
            });
            chatCloseBtn.addEventListener('click', () => {
                chatWindow.classList.remove('active');
            });
        });

        const chatBody = document.getElementById('chatBody');
        const chatOptions = document.getElementById('chatOptions');

        const botAnswers = {
            "Apa keahlian utamamu?": "Keahlian utama saya adalah Video Editing (Premiere, After Effects), Desain Grafis, UI/UX!",
            "Apa kesibukan terbarumu?": "Selain sibuk kuliah di prodi Multimedia Broadcasting PENS!",
            "Bagaimana cara menghubungimu?": "Kamu bisa langsung mengirimkan email ke putriamalia230705@gmail.com. Saya akan berusaha membalasnya secepat mungkin!"
        };

        function appendMessage(text, sender) {
            const msgDiv = document.createElement('div');
            const msgDivClasses = ['chat-msg', sender];
            msgDiv.classList.add(...msgDivClasses);
            msgDiv.textContent = text;
            chatBody.appendChild(msgDiv);
            chatBody.scrollTop = chatBody.scrollHeight;
        }

        window.sendOption = function(btn) {
            const questionText = btn.textContent;
            appendMessage(questionText, 'user');
            chatOptions.style.display = 'none';

            setTimeout(() => {
                const answer = botAnswers[questionText] || "Maaf, saya tidak memiliki jawaban untuk itu.";
                appendMessage(answer, 'bot');
                chatOptions.style.display = 'flex';
            }, 800);
        };

    </script>

    <script type="module">
        import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.158.0/build/three.module.js';
        import { MTLLoader } from 'https://cdn.jsdelivr.net/npm/three@0.158.0/examples/jsm/loaders/MTLLoader.js';
        import { OBJLoader } from 'https://cdn.jsdelivr.net/npm/three@0.158.0/examples/jsm/loaders/OBJLoader.js';

        const container = document.getElementById('threeContainer');
        const scene = new THREE.Scene();
        scene.background = new THREE.Color(0x0f172a);

        const camera = new THREE.PerspectiveCamera(35, container.clientWidth / container.clientHeight, 0.1, 1000);
        camera.position.set(0, 1.0, 2.7);

        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setPixelRatio(window.devicePixelRatio);
        renderer.setSize(container.clientWidth, container.clientHeight);
        renderer.outputEncoding = THREE.sRGBEncoding;
        container.appendChild(renderer.domElement);

        const lights = [];
        lights.push(new THREE.AmbientLight(0xffffff, 0.7));
        lights.push(new THREE.DirectionalLight(0xffffff, 0.8));
        lights[1].position.set(4, 7, 5);
        lights.push(new THREE.PointLight(0x88bbff, 0.4, 0, 2));
        lights[2].position.set(-4, 2, 5);
        lights.forEach(light => scene.add(light));

        const grid = new THREE.GridHelper(6, 12, 0x3b82f6, 0x1e293b);
        grid.position.y = -1.05;
        scene.add(grid);

        const modelGroup = new THREE.Group();
        scene.add(modelGroup);

        // Jalur folder sudah sesuai dengan yang sukses di-download tadi
        const basePath = '/img/b85db16746a65105df3f3a77c91af29b/';
        
        const mtlLoader = new MTLLoader();
        mtlLoader.setPath(basePath);
        mtlLoader.load('material.mtl', (materials) => {
            materials.preload();
            
            const objLoader = new OBJLoader();
            objLoader.setMaterials(materials);
            objLoader.setPath(basePath);
            objLoader.load('52140c56ebd2fea6e88cccf56b000c16.obj', (object) => {
                
                // Trik Auto-Fit: Pas di tengah, pas di layar
                const box = new THREE.Box3().setFromObject(object);
                const size = box.getSize(new THREE.Vector3());
                const center = box.getCenter(new THREE.Vector3());

                object.position.x = -center.x;
                object.position.y = -center.y;
                object.position.z = -center.z;

                const maxDim = Math.max(size.x, size.y, size.z);
                const scale = 2 / maxDim; 
                object.scale.set(scale, scale, scale);

                object.traverse((child) => {
                    if (child.isMesh) {
                        child.castShadow = true;
                        child.receiveShadow = true;
                        if (child.material) child.material.side = THREE.DoubleSide;
                    }
                });
                
                modelGroup.add(object);
                console.log("SUKSES: Model 3D berhasil dimuat!");

            }, undefined, (error) => {
                console.error('OBJ load error:', error);
            });
        }, undefined, (error) => {
            console.error('MTL load error:', error);
        });

        const controlState = {
            dragging: false,
            startX: 0,
            startY: 0,
            rotX: 0.15,
            rotY: 0
        };

        container.addEventListener('pointerdown', (event) => {
            controlState.dragging = true;
            controlState.startX = event.clientX;
            controlState.startY = event.clientY;
            container.setPointerCapture(event.pointerId);
        });

        container.addEventListener('pointermove', (event) => {
            if (!controlState.dragging) return;
            const deltaX = event.clientX - controlState.startX;
            const deltaY = event.clientY - controlState.startY;
            controlState.startX = event.clientX;
            controlState.startY = event.clientY;
            controlState.rotY += deltaX * 0.004;
            controlState.rotX = Math.max(-0.6, Math.min(0.6, controlState.rotX + deltaY * 0.003));
            modelGroup.rotation.y = controlState.rotY;
            modelGroup.rotation.x = controlState.rotX;
        });

        ['pointerup', 'pointerleave', 'pointercancel'].forEach(eventName => {
            container.addEventListener(eventName, () => {
                controlState.dragging = false;
            });
        });

        window.addEventListener('resize', () => {
            camera.aspect = container.clientWidth / container.clientHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(container.clientWidth, container.clientHeight);
        });

        const clock = new THREE.Clock();
        function animate() {
            requestAnimationFrame(animate);
            modelGroup.rotation.y += 0.001;
            renderer.render(scene, camera);
        }
        animate();
    </script>
</body>
</html>