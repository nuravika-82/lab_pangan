<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Informasi</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #007bff;
            --main-bg: #f8fbff;
            --white: #ffffff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--main-bg);
            margin: 0;
            overflow-x: hidden;
        }

        /* Top Navbar Styling */
        .top-navbar {
            background: var(--white);
            height: 70px;
            padding: 0 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
            position: sticky;
            top: 0;
            z-index: 1000;
            margin-left: 260px; /* Jarak untuk Sidebar nanti */
            transition: all 0.3s;
        }

        .search-box {
            position: relative;
            width: 300px;
        }

        .search-box input {
            background: #f3f6f9;
            border: none;
            border-radius: 12px;
            padding: 8px 15px 8px 40px;
            font-size: 14px;
            width: 100%;
        }

        .search-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aec0;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            padding: 5px 15px;
            border-radius: 15px;
            transition: background 0.2s;
        }

        .user-profile:hover {
            background: #f8f9fa;
        }

        .user-info p {
            margin: 0;
            font-size: 14px;
            font-weight: 600;
            color: #2d3748;
        }

        .user-info small {
            color: var(--primary-blue);
            font-weight: 500;
            font-size: 11px;
            text-transform: uppercase;
        }

        .avatar-img {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            object-fit: cover;
            border: 2px solid #e2e8f0;
        }

        /* Container Utama Content */
        .main-wrapper {
            margin-left: 260px; /* Harus sama dengan margin top-navbar */
            padding: 30px;
            transition: all 0.3s;
        }

        @media (max-width: 992px) {
            .top-navbar, .main-wrapper {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    <header class="top-navbar">
        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Cari data...">
        </div>

        <div class="d-flex align-items-center gap-3">
            <div class="user-profile">
                <div class="user-info text-end">
                    <p><?= $this->session->userdata('username'); ?></p>
                    <small><?= $this->session->userdata('role'); ?></small>
                </div>
                <img src="https://ui-avatars.com/api/?name=<?= $this->session->userdata('username'); ?>&background=0D6EFD&color=fff&bold=true" class="avatar-img" alt="User">
            </div>
        </div>
    </header>

    <main class="main-wrapper">