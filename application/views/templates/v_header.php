<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ================= PREMIUM GLOBAL SETUP ================= */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background: #fdfdfd; 
            background-image: radial-gradient(#e2e8f0 0.5px, transparent 0.5px);
            background-size: 20px 20px;
            color: #0f172a;
            min-height: 100vh;
        }

        /* --- STRUKTUR LAYOUT SPLIT (SIDEBAR + KONTEN UTAMA) --- */
        .wrapper-layout {
            display: grid;
            grid-template-columns: 280px 1fr; /* Kiri 280px untuk menu, sisanya untuk konten */
            min-height: 100vh;
        }

        /* ================= SIDEBAR MENU STYLING ================= */
        .sidebar-container {
            background: #ffffff;
            border-right: 1px solid #e2e8f0;
            padding: 40px 24px;
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Membuat logout nempel di bawah */
            position: sticky;
            top: 0;
            height: 100vh;
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 50px;
            padding-left: 10px;
        }
        .sidebar-brand img {
            width: 45px;
            height: auto;
        }
        .brand-text h2 {
            font-size: 1.1rem;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.1;
        }
        .brand-text span {
            font-size: 0.75rem;
            color: #0ea5e9;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .sidebar-menu {
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex-grow: 1;
        }

        .menu-item {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 14px 20px;
            color: #64748b;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 600;
            border-radius: 14px;
            transition: all 0.3s ease;
        }

        .menu-item i {
            font-size: 1.1rem;
            width: 24px;
        }

        /* Status Menu Aktif/Hover */
        .menu-item:hover {
            background: #f8fafc;
            color: #0ea5e9;
        }

        .menu-item.active {
            background: #e0f2fe;
            color: #0284c7;
        }

        .menu-item.text-danger:hover {
            background: #fef2f2;
            color: #dc2626;
        }

        /* ================= AREA KONTEN UTAMA (KANAN) ================= */
        .main-content {
            padding: 40px;
            overflow-y: auto;
        }

        /* ================= THE LUXURY HEADER - ULTRA ESTETIK ================= */
        .header-premium {
            position: relative;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            border-radius: 35px;
            padding: 35px 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 
                0 10px 20px rgba(0, 0, 0, 0.02),
                0 30px 60px -12px rgba(15, 23, 42, 0.12),
                0 18px 36px -18px rgba(0, 180, 216, 0.3),
                inset 0 0 0 1px rgba(255, 255, 255, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.6) !important;
            margin-bottom: 50px;
            overflow: hidden;
            transition: all 0.5s ease;
        }

        .header-premium::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; height: 3px;
            background: linear-gradient(90deg, #0ea5e9, #8b5cf6, #38bdf8);
            opacity: 0.8;
        }

        .header-premium::after {
            content: '';
            position: absolute;
            top: -20%; right: -5%; width: 250px; height: 250px;
            background: radial-gradient(circle, rgba(14, 165, 233, 0.1) 0%, transparent 70%);
            filter: blur(40px);
            z-index: 0;
        }

        .header-premium:hover {
            transform: translateY(-5px);
            box-shadow: 0 40px 80px -15px rgba(15, 23, 42, 0.15), 0 20px 40px -20px rgba(139, 92, 246, 0.3);
        }

        .title-group h1 {
            font-size: 1.85rem;
            font-weight: 800;
            letter-spacing: -1px;
            color: #0f172a;
            line-height: 1.2;
        }

        .marquee-container {
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .poltesa-badge {
            background: #f1f5f9;
            padding: 4px 15px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 800;
            letter-spacing: 2px;
            border: 1px solid #e2e8f0;
        }
        .text-neon-blue { color: #0ea5e9; text-shadow: 0 0 15px rgba(14, 165, 233, 0.3); }
        .text-neon-purple { color: #8b5cf6; animation: softPulse 2s infinite; }

        @keyframes softPulse {
            0%, 100% { opacity: 1; filter: brightness(1); }
            50% { opacity: 0.7; filter: brightness(1.2); }
        }

        .system-meta {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 10px;
            z-index: 2;
        }
        .live-status {
            background: #0f172a;
            color: #fff;
            padding: 10px 20px;
            border-radius: 15px;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            gap: 12px;
            box-shadow: 0 10px 20px rgba(15, 23, 42, 0.1);
        }
        .pulse-core {
            width: 8px; height: 8px; background: #22c55e; border-radius: 50%; position: relative;
        }
        .pulse-core::after {
            content: ''; position: absolute; inset: 0; background: inherit; border-radius: 50%; animation: ripple 2s infinite;
        }

        @keyframes ripple {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(3.5); opacity: 0; }
        }

        .icon-wrapper i { animation: gemSparkle 3s infinite ease-in-out; }
        @keyframes gemSparkle {
            0%, 100% { filter: drop-shadow(0 0 5px rgba(255,255,255,0.3)); transform: scale(1); }
            50% { filter: drop-shadow(0 0 15px rgba(14, 165, 233, 0.8)); transform: scale(1.1); }
        }

        /* ================= ANIMASI TEKS BERJALAN JALAN ================= */
        .running-text-container {
            overflow: hidden;
            white-space: nowrap;
            margin-top: 15px;
            padding: 5px 0;
            width: 100%;
        }

        .running-text {
            display: inline-block;
            font-size: 0.75rem;
            font-weight: 700;
            color: #94a3b8;
            letter-spacing: 2px;
            /* Menjalankan animasi slideRightToLeft secara berulang terus-menerus (infinite) */
            animation: slideRightToLeft 15s linear infinite;
        }

        @keyframes slideRightToLeft {
            0% {
                transform: translateX(100%); /* Mulai dari luar kotak sebelah kanan */
            }
            100% {
                transform: translateX(-100%); /* Berjalan sampai menghilang di sebelah kiri */
            }
        }
    </style>
</head>
<body>

    <div class="wrapper-layout">

        <div class="sidebar-container">
            <div>
                <div class="sidebar-brand">
                    <i class="fa-solid fa-graduation-cap" style="font-size: 32px; color: #0ea5e9;"></i>
                    <div class="brand-text">
                        <h2>POLTESA</h2>
                        <span>SISTEM AKADEMIK</span>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <a href="<?= base_url('mahasiswa'); ?>" class="menu-item <?= ($this->uri->segment(2) == '' || $this->uri->segment(2) == 'index') ? 'active' : ''; ?>">
                        <i class="fa-solid fa-house"></i> Home
                    </a>

                    <a href="<?= base_url('mahasiswa/profile'); ?>" class="menu-item <?= ($this->uri->segment(2) == 'profile') ? 'active' : ''; ?>">
                        <i class="fa-solid fa-user-gear"></i> Profile
                    </a>

                    <a href="<?= base_url('mahasiswa/prodi'); ?>" class="menu-item <?= ($this->uri->segment(2) == 'prodi') ? 'active' : ''; ?>">
                        <i class="fa-solid fa-database"></i> Master Data
                    </a>

                    <a href="<?= base_url('mahasiswa/laporan'); ?>" class="menu-item <?= ($this->uri->segment(2) == 'laporan') ? 'active' : ''; ?>">
                        <i class="fa-solid fa-file-lines"></i> Laporan
                    </a>
                </div>
            </div>

            <div class="sidebar-footer">
                <a href="<?= base_url('auth/logout'); ?>" class="menu-item text-danger">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
            </div>
        </div>

        <div class="main-content">

            <div class="header-premium">
                <div class="brand-container" style="display: flex; align-items: center; gap: 20px;">
                    <div class="icon-wrapper" style="font-size: 2rem; color: #0ea5e9;">
                        <i class="fa-solid fa-gem"></i>
                    </div>
                    <div class="title-group">
                        <h1>Portal Akademik <span style="color: #0ea5e9;">MIF 4B</span></h1>
                        <div class="marquee-container">
                            <div class="poltesa-badge">
                                <span class="text-neon-blue">POL</span><span class="text-neon-purple">TESA</span>
                            </div>
                            <span style="font-size: 0.8rem; color: #94a3b8; font-weight: 600;">
                                <i class="fa-solid fa-fingerprint"></i> Smart Asset Management v2.0
                            </span>
                        </div>
                    </div>
                </div>

                <div class="system-meta">
                    <div class="live-status">
                        <div class="pulse-core"></div>
                        SYSTEM ENCRYPTED & LIVE
                    </div>
                    <p style="font-size: 0.7rem; color: #cbd5e1; font-weight: 700; letter-spacing: 1px;">
                        STABLE CONNECTION: 12ms
                    </p>
                </div>
            </div>