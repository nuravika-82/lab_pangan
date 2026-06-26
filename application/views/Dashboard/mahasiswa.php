<div class="container-fluid">
    
    <!-- 1. HEADER DASHBOARD MAHASISWA -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold text-dark mb-1">Portal Akademik Mahasiswa</h4>
            <p class="text-muted small mb-0">Halo, selamat datang kembali! Tetap semangat kuliahnya dan pantau terus progres akademikmu.</p>
        </div>
        <span class="badge bg-warning-subtle text-warning-dark border border-warning-subtle px-3 py-2 rounded-pill fw-semibold">
            <i class="fa-solid fa-graduation-cap me-1"></i> Role: Mahasiswa
        </span>
    </div>

    <!-- 2. CARDS STATISTIK AKADEMIK -->
    <div class="row g-3 mb-4">
        <!-- Card IPK -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-4 p-3 style-card-stat">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted small mb-1 fw-medium">IPK Terakhir</p>
                        <h3 class="fw-bold mb-0 text-dark">3.84</h3>
                    </div>
                    <div class="stat-icon bg-warning-subtle text-warning-dark">
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card SKS -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-4 p-3 style-card-stat">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted small mb-1 fw-medium">SKS Lulus</p>
                        <h3 class="fw-bold mb-0 text-dark">78 <span class="fs-6 text-muted fw-normal">SKS</span></h3>
                    </div>
                    <div class="stat-icon bg-info-subtle text-info">
                        <i class="fa-solid fa-chart-simple"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Status Registrasi / KIP-K -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-4 p-3 style-card-stat">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted small mb-1 fw-medium">Status Kuliah</p>
                        <h3 class="fw-bold mb-0 text-success" style="font-size: 20px;">Aktif </h3>
                    </div>
                    <div class="stat-icon bg-success-subtle text-success">
                        <i class="fa-solid fa-id-card-clip"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Semester -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm rounded-4 p-3 style-card-stat">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted small mb-1 fw-medium">Semester / Kelas</p>
                        <h3 class="fw-bold mb-0 text-dark">4 <span class="fs-6 text-muted fw-normal">/ MIF 4B</span></h3>
                    </div>
                    <div class="stat-icon bg-primary-subtle text-primary">
                        <i class="fa-solid fa-calendar-week"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. BAGIAN UTAMA: DAFTAR TUGAS KULIAH AKTIF -->
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4" style="background: white;">
        
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3 mb-4">
            <div class="d-flex align-items-center gap-2">
                <div class="bg-warning text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <div>
                    <h5 class="fw-bold mb-0 text-dark">Tugas & Praktikum Terkini</h5>
                    <p class="text-muted small mb-0">Periksa tenggat waktu pengumpulan agar tidak terlambat.</p>
                </div>
            </div>
        </div>
        
        <!-- Tabel Tugas Mahasiswa -->
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="py-3 px-3">Mata Kuliah</th>
                        <th class="py-3">Nama Tugas / Praktikum</th>
                        <th class="py-3">Dosen Pengampu</th>
                        <th class="py-3 text-center">Deadline</th>
                        <th class="py-3 text-center" style="width: 150px;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Tugas 1 -->
                    <tr>
                        <td class="px-3"><span class="fw-semibold text-dark">Pemrograman Web Framework</span></td>
                        <td><span class="text-secondary">Integrasi CRUD Login dengan Database CRUD</span></td>
                        <td><span class="text-muted small fw-medium">Bapak/Ibu Dosen Web</span></td>
                        <td class="text-center"><span class="text-danger fw-medium small"><i class="fa-regular fa-clock me-1"></i> Besok, 23:59</span></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning rounded-3 px-3 fw-medium d-inline-flex align-items-center gap-1 shadow-sm text-dark" style="font-size: 13px;">
                                <i class="fa-solid fa-cloud-arrow-up"></i> Upload
                            </button>
                        </td>
                    </tr>
                    <!-- Tugas 2 -->
                    <tr>
                        <td class="px-3"><span class="fw-semibold text-dark">Sistem Basis Data Lanjut</span></td>
                        <td><span class="text-secondary">Optimasi Query Terstruktur & Indexing Tabel</span></td>
                        <td><span class="text-muted small fw-medium">Bapak/Ibu Dosen Basis Data</span></td>
                        <td class="text-center"><span class="text-secondary small">7 Juni 2026</span></td>
                        <td class="text-center">
                            <span class="badge bg-success-subtle text-success rounded-pill px-3 py-2 fw-semibold"><i class="fa-solid fa-check-double me-1"></i> Selesai</span>
                        </td>
                    </tr>
                    <!-- Tugas 3 -->
                    <tr>
                        <td class="px-3"><span class="fw-semibold text-dark">Keamanan Informasi</span></td>
                        <td><span class="text-secondary">Laporan Praktikum Implementasi Klasifikasi Enkripsi</span></td>
                        <td><span class="text-muted small fw-medium">Bapak/Ibu Dosen Kripto</span></td>
                        <td class="text-center"><span class="text-secondary small">12 Juni 2026</span></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning rounded-3 px-3 fw-medium d-inline-flex align-items-center gap-1 shadow-sm text-dark" style="font-size: 13px;">
                                <i class="fa-solid fa-cloud-arrow-up"></i> Upload
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- CSS Khusus Elemen Dashboard Konten Mahasiswa -->
<style>
    .style-card-stat {
        background: #ffffff;
        border: 1px solid #f1f3f7 !important;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .style-card-stat:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.03) !important;
    }
    .stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }
    .bg-warning-subtle {
        background-color: #fff9db !important;
    }
    .text-warning-dark {
        color: #f59f00 !important;
    }
    .table th {
        font-weight: 600;
        color: #4a5568;
        font-size: 13px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }
    .table td {
        font-size: 14px;
    }
</style>