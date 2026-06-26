<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Success! | Nur Avika</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&family=Outfit:wght@300;500;800&display=swap" rel="stylesheet">
    <style type="text/css">
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Quicksand', sans-serif;
            overflow: hidden;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        #container {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 25px;
            width: 85%;
            max-width: 380px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            position: relative;
        }

        .avatar {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 35px;
            border: 3px solid rgba(255,255,255,0.5);
        }

        h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 22px;
            color: #fff;
            margin-bottom: 2px;
            text-shadow: 1px 1px 5px rgba(0,0,0,0.1);
        }

        .role {
            font-size: 11px;
            color: rgba(255,255,255,0.9);
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .content {
            background: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 15px;
            margin-bottom: 20px;
            color: #333;
            text-align: left;
        }

        .bio-row {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #f0f0f0;
            padding: 6px 0;
            font-size: 13px;
        }

        .bio-row:last-child { border: 0; }

        /* Container untuk tombol agar berjejer */
        .button-group {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .btn-contact, .btn-back {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 12px;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            flex: 1; /* Biar ukuran tombol seimbang */
        }

        .btn-contact {
            background: #fff;
            color: #e73c7e;
        }

        .btn-contact:hover {
            background: #e73c7e;
            color: #fff;
            transform: translateY(-2px);
        }

        .btn-back {
            background: rgba(255, 255, 255, 0.3);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(5px);
        }

        .btn-back:hover {
            background: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
        }

        .footer-info {
            margin-top: 20px;
            font-size: 9px;
            color: rgba(255,255,255,0.7);
            letter-spacing: 0.5px;
        }

        .circle {
            position: absolute;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            z-index: -1;
        }
    </style>
</head>
<body>

<div class="circle" style="width: 150px; height: 150px; top: -40px; left: -40px;"></div>
<div class="circle" style="width: 100px; height: 100px; bottom: -20px; right: -20px;"></div>

<div id="container">
    <div class="avatar">👑</div>
    
    <h1>BERHASIL!</h1>
    <div class="role">BIODATA MAHASISWA</div>

    <div class="content">
        <p style="text-align: center; font-weight: 700; color: #e73c7e; margin-bottom: 8px; font-size: 15px;">
            Halo, Nur Avika! ✨
        </p>
        
        <div class="bio-row">
            <span>📍 Kampus</span>
            <strong>Politeknik Negeri Sambas</strong>
        </div>
        <div class="bio-row">
            <span>🎓 Prodi</span>
            <strong>Manajemen Informatika (D3)</strong>
        </div>
        <div class="bio-row">
            <span>📂 Kelas</span>
            <strong>MIF 4B</strong>
        </div>
    </div>

    <div class="button-group">
        <a href="<?php echo base_url('welcome/biodata'); ?>" class="btn-back">⬅️ Kembali</a>
        <a href="https://wa.me/628XXXXXXXXXX" class="btn-contact">Hubungi 💌</a>
    </div>

    <div class="footer-info">
        CI v<?php echo CI_VERSION ?> • {elapsed_time}s • INDONESIA 🇮🇩
    </div>
</div>

</body>
</html>