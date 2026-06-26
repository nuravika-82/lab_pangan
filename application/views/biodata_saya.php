<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hello | Nur Avika</title>
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
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 30px;
            padding: 40px;
            width: 90%;
            max-width: 450px;
            text-align: center;
            box-shadow: 0 25px 45px rgba(0,0,0,0.1);
            position: relative;
        }
        .profile-area { position: relative; margin-bottom: 25px; }
        .avatar {
            width: 120px; height: 120px;
            background: white; border-radius: 50%;
            margin: 0 auto; display: flex;
            align-items: center; justify-content: center;
            font-size: 50px; box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            border: 5px solid rgba(255,255,255,0.5);
        }
        h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 28px; color: #fff;
            margin-bottom: 5px; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        .role {
            font-size: 14px; color: rgba(255,255,255,0.9);
            text-transform: uppercase; letter-spacing: 2px;
            font-weight: 700; margin-bottom: 20px;
        }
        .content {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px; border-radius: 20px;
            margin-bottom: 25px; color: #444; line-height: 1.6;
        }
        .btn-contact {
            display: inline-block;
            background: #fff;
            color: #e73c7e;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            border: 2px solid transparent;
        }
        .btn-contact:hover {
            transform: scale(1.05);
            background: transparent;
            color: #fff;
            border: 2px solid #fff;
        }
        .footer-info { margin-top: 30px; font-size: 10px; color: rgba(255,255,255,0.7); }
        .circle { position: absolute; background: rgba(255,255,255,0.1); border-radius: 50%; z-index: -1; }
    </style>
</head>
<body>

<div class="circle" style="width: 200px; height: 200px; top: -50px; left: -50px;"></div>
<div class="circle" style="width: 150px; height: 150px; bottom: -30px; right: -30px;"></div>

<div id="container">
    <div class="profile-area">
        <div class="avatar">👩🏻‍💻</div>
    </div>
    
    <h1>Nur Avika</h1>
    <div class="role">Management Informatics</div>

    <div class="content">
        <p>Selamat datang di project <b>PBO-UTS</b> saya. Sedang belajar membuat sistem yang handal dan visual yang cantik! ✨</p>
    </div>

    <a href="<?php echo base_url('welcome/sukses'); ?>" class="btn-contact">Lihat Hasil Sukses! 💌</a>

    <div class="footer-info">
        Page rendered in <strong>{elapsed_time}</strong>s | CI v<?php echo CI_VERSION ?>
    </div>
</div>

</body>
</html>