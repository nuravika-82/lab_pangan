<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System - Premium Blue 3D (Laptop Size)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-blue: #007bff;
            --deep-blue: #0056b3;
            --soft-blue: #e7f1ff;
            --glass-bg: rgba(255, 255, 255, 0.9);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f0f4f8;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            overflow: hidden;
            position: relative;
        }

        /* --- Animasi Background Latar Belakang --- */
        .bg-circles {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: -1;
            background: radial-gradient(circle at 50% 50%, #ffffff 0%, #d1e3f8 100%);
        }

        .circle {
            position: absolute;
            background: linear-gradient(135deg, rgba(0, 123, 255, 0.2), rgba(0, 123, 255, 0.05));
            border-radius: 50%;
            animation: move 25s infinite linear;
        }

        @keyframes move {
            from { transform: translateY(0) rotate(0deg); }
            to { transform: translateY(-1000px) rotate(720deg); }
        }

        /* --- Card Login (UKURAN DISESUAIKAN UNTUK LAPTOP) --- */
        .login-card {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.7);
            border-radius: 25px; /* Sedikit lebih kecil */
            padding: 35px 30px; /* Padding lebih ramping */
            width: 90%;
            max-width: 380px; /* Ukuran pas laptop (Mirip 350px-an) */
            box-shadow: 
                0 15px 35px rgba(0, 0, 0, 0.05),
                15px 15px 40px #d1d9e6,
                -15px -15px 40px #ffffff;
            position: relative;
            z-index: 10;
            transform: perspective(1000px) rotateX(0deg);
            transition: transform 0.5s ease;
        }

        .login-card:hover {
            transform: perspective(1000px) rotateX(2deg) translateY(-5px);
        }

        /* --- Icon & Header (DIKECILKAN SEDIKIT) --- */
        .brand-logo {
		    width: 65px; 
		    height: 65px;
		    background: linear-gradient(135deg, #ffffff 0%, #f0f4f8 100%); /* Kita ganti background jadi putih agar logo poltesa terlihat jelas */
		    border-radius: 18px;
		    margin: 0 auto 20px;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		    box-shadow: 0 8px 20px rgba(0, 123, 255, 0.15); /* Bayangan lebih halus */
		    animation: float 3s ease-in-out infinite;
		    overflow: hidden; /* Agar gambar tidak keluar kotak */
		    border: 2px solid #fff; /* Tambahan border putih agar makin 3D */
		}

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        .login-card h2 {
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 5px;
            font-size: 22px; /* Ukuran teks judul */
            letter-spacing: -0.5px;
        }

        .login-card p {
            color: #718096;
            font-size: 13px; /* Teks lebih kecil */
            margin-bottom: 25px;
        }

        /* --- Input Styling (LEBIH RAMPING) --- */
        .input-group-custom {
            margin-bottom: 18px;
            position: relative;
        }

        .input-group-custom i {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #cbd5e0;
            transition: 0.3s;
            z-index: 5;
            font-size: 14px;
        }

        .form-control-custom {
            width: 100%;
            padding: 12px 15px 12px 48px; /* Padding input lebih rapat */
            background: #f8fafc;
            border: 2px solid #edf2f7;
            border-radius: 14px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-control-custom:focus {
            background: #fff;
            border-color: var(--primary-blue);
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.1);
            outline: none;
        }

        .form-control-custom:focus + i {
            color: var(--primary-blue);
        }

        /* --- Button 3D Blue --- */
        .btn-premium {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            border: none;
            width: 100%;
            padding: 12px; /* Lebih ramping */
            border-radius: 14px;
            font-weight: 600;
            font-size: 15px;
            box-shadow: 0 8px 15px rgba(0, 123, 255, 0.2);
            transition: all 0.3s ease;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-premium:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 20px rgba(0, 123, 255, 0.3);
            filter: brightness(1.1);
        }

        /* --- Footer --- */
        .footer-text {
            margin-top: 25px;
            font-size: 13px;
            color: #a0aec0;
        }

        .footer-text a {
            color: var(--primary-blue);
            text-decoration: none;
            font-weight: 600;
        }

        /* Dekorasi Lingkaran */
        .shape-1 { width: 120px; height: 120px; top: 10%; left: 10%; }
        .shape-2 { width: 150px; height: 150px; bottom: 10%; right: 5%; animation-delay: -5s; }
        .shape-3 { width: 60px; height: 60px; top: 40%; right: 15%; animation-delay: -10s; }
    </style>
</head>
<body>

    <div class="bg-circles">
        <div class="circle shape-1"></div>
        <div class="circle shape-2"></div>
        <div class="circle shape-3"></div>
    </div>

    <div class="login-card text-center">
        <div class="brand-logo">
	    <img src="<?= base_url('assets/img/logo_poltesa.png') ?>" alt="Poltesa" style="width: 70%; height: auto; filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));">
		</div>

        <h2>Portal Login</h2>
        <p>Masuk menggunakan akun Anda</p>
		<?php if($this->session->flashdata('error')): ?>
		    <div class="alert alert-danger animate__animated animate__headShake" 
		         style="font-size: 12px; border-radius: 12px; border: none; background: rgba(220, 53, 69, 0.1); color: #dc3545; text-align: center; padding: 10px; margin-bottom: 20px;">
		        <i class="fa-solid fa-triangle-exclamation me-2"></i>
		        <?= $this->session->flashdata('error'); ?>
		    </div>
		<?php endif; ?>
        <?php echo form_open('auth/login_action'); ?>
            
            <div class="input-group-custom">
                <input type="text" name="username" class="form-control-custom" placeholder="Nama Pengguna" required>
                <i class="fa-solid fa-envelope"></i>
            </div>

            <div class="input-group-custom">
                <input type="password" name="password" class="form-control-custom" placeholder="Kata Sandi" required>
                <i class="fa-solid fa-lock"></i>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3 px-1">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label text-muted" for="remember" style="font-size: 12px;">Ingat saya</label>
                </div>
                <a href="#" style="font-size: 12px; color: #007bff; text-decoration: none;">Lupa sandi?</a>
            </div>

            <button type="submit" class="btn-premium">
                Masuk Sistem <i class="fa-solid fa-chevron-right"></i>
            </button>

        <?php echo form_close(); ?>

        <div class="footer-text">
            Belum punya akun? <a href="#">Daftar Baru</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>