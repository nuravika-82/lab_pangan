<style>
    /* --- Sidebar Container --- */
    .sidebar {
        width: 260px;
        height: 100vh;
        background: #ffffff;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1001;
        padding: 25px 15px;
        box-shadow: 10px 0 30px rgba(0, 0, 0, 0.02);
        display: flex;
        flex-direction: column;
        transition: all 0.3s;
    }

    /* Logo Section di Sidebar */
    .sidebar-brand {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 0 15px 40px;
    }

    .brand-logo-box {
        width: 35px;
        height: 35px;
        background: linear-gradient(135deg, #00c6ff, #0072ff);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 18px;
        box-shadow: 0 5px 12px rgba(0, 114, 255, 0.2);
    }

    .brand-name {
        font-weight: 700;
        font-size: 18px;
        color: #1a202c;
        letter-spacing: -0.5px;
    }

    /* Menu Links */
    .nav-menu {
        list-style: none;
        padding: 0;
        margin: 0;
        flex-grow: 1;
    }

    .nav-item-custom {
        margin-bottom: 8px;
    }

    .nav-link-custom {
        display: flex;
        align-items: center;
        padding: 12px 18px;
        color: #718096;
        text-decoration: none;
        border-radius: 14px;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .nav-link-custom i {
        width: 25px;
        font-size: 18px;
        margin-right: 12px;
        transition: transform 0.3s ease;
    }

    /* Efek Hover & Active */
    .nav-link-custom:hover {
        background: #f4f7fe;
        color: var(--primary-blue);
    }

    .nav-link-custom:hover i {
        transform: translateX(3px);
    }

    .nav-link-custom.active {
        background: linear-gradient(135deg, rgba(0, 123, 255, 0.1), rgba(0, 123, 255, 0.05));
        color: var(--primary-blue);
        font-weight: 600;
    }

    /* Bagian Logout di Bawah */
    .logout-section {
        border-top: 1px solid #f1f3f7;
        padding-top: 20px;
    }

    .btn-logout-sidebar {
        color: #e53e3e !important;
    }

    .btn-logout-sidebar:hover {
        background: #fff5f5 !important;
    }

    /* Sembunyikan sidebar di mobile */
    @media (max-width: 992px) {
        .sidebar {
            transform: translateX(-100%);
        }
    }
	    /* Styling untuk Logo Gambar */
	.brand-logo-img {
	    width: 45px;
	    height: 45px;
	    display: flex;
	    align-items: center;
	    justify-content: center;
	    transition: transform 0.3s ease;
	}

	.brand-logo-img img {
	    width: 100%;
	    height: auto;
	    object-fit: contain;
	}

	.brand-text {
	    display: flex;
	    flex-direction: column;
	}

	.brand-name {
	    font-weight: 700;
	    font-size: 16px;
	    color: #1a202c;
	    line-height: 1.2;
	}

	.brand-subtitle {
	    font-size: 11px;
	    color: #0072ff;
	    font-weight: 600;
	    text-transform: uppercase;
	    letter-spacing: 0.5px;
	}

	/* Efek saat logo di-hover */
	.sidebar-brand:hover .brand-logo-img {
	    transform: rotate(-5deg) scale(1.1);
	}
</style>

<aside class="sidebar">
    <div class="sidebar-brand">
        <div class="brand-logo-img">
            <img src="<?= base_url('assets/img/logo_poltesa.png') ?>" alt="Logo Poltesa">
        </div>
        <div class="brand-text">
            <span class="brand-name">POLTESA</span>
            <small class="brand-subtitle">Sistem Akademik</small>
        </div>
    </div>

    <ul class="nav-menu">
        <li class="nav-item-custom">
            <a href="<?= base_url('dashboard') ?>" class="nav-link-custom active">
                <i class="fa-solid fa-house"></i> Home
            </a>
        </li>
        <li class="nav-item-custom">
            <a href="#" class="nav-link-custom">
                <i class="fa-solid fa-user-gear"></i> Profile
            </a>
        </li>
        <li class="nav-item-custom">
            <a href="#" class="nav-link-custom">
                <i class="fa-solid fa-database"></i> Master Data
            </a>
        </li>
        <li class="nav-item-custom">
            <a href="#" class="nav-link-custom">
                <i class="fa-solid fa-file-lines"></i> Laporan
            </a>
        </li>
    </ul>

    <div class="logout-section">
        <a href="<?= base_url('auth/logout') ?>" class="nav-link-custom btn-logout-sidebar">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
    </div>
</aside>