<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Portofolio Saya</title>
    <style>
        /* Gaya dasar (CSS) untuk mempercantik tampilan */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 50px 20px;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        header p {
            font-size: 1.2em;
            color: #bdc3c7;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .project-card {
            border: 1px solid #ddd;
            padding: 20px;
            margin-top: 15px;
            border-radius: 5px;
            background-color: #fafafa;
        }
        .project-card h3 {
            margin-top: 0;
            color: #2980b9;
        }
    </style>
</head>
<body>

    <header>
        <h1>Nama Kamu</h1>
        <p>Mahasiswa & Pengembang Web</p>
    </header>

    <div class="container">
        
        <section>
            <h2>Tentang Saya</h2>
            <p>Halo! Saya adalah seseorang yang antusias dalam mempelajari teknologi baru, memecahkan masalah, dan membangun website yang fungsional. Selamat datang di halaman portofolio saya.</p>
        </section>

        <section>
            <h2>Proyek Portofolio</h2>
            
            <div class="project-card">
                <h3>Sistem Manajemen Data</h3>
                <p><strong>Deskripsi:</strong> Membuat aplikasi berbasis web untuk mengelola data menggunakan PHP dan MySQL.</p>
                <p><strong>Teknologi:</strong> Laravel, Bootstrap, MySQL.</p>
            </div>

            <div class="project-card">
                <h3>Desain UI/UX Aplikasi Belajar</h3>
                <p><strong>Deskripsi:</strong> Merancang antarmuka pengguna untuk aplikasi pembelajaran yang interaktif dan mudah digunakan.</p>
                <p><strong>Teknologi:</strong> Figma, HTML, CSS.</p>
            </div>
        </section>

        <section>
            <h2>Hubungi Saya</h2>
            <p>Email: emailkamu@example.com</p>
            <p>GitHub: github.com/usernamekamu</p>
        </section>

    </div>

</body>
</html>