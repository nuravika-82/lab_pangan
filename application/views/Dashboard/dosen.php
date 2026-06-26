<div class="container-fluid">
    
    <!-- 1. HEADER DASHBOARD DOSEN -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold text-dark mb-1">Panel Utama Dosen</h4>
            <p class="text-muted small mb-0">Selamat datang kembali, Bapak/Ibu Dosen. Silakan kelola aktivitas akademik Anda.</p>
        </div>
        <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-semibold">
            <i class="fa-solid fa-chalkboard-user me-1"></i> Role: Dosen
        </span>
    </div>

    <!-- 2. CARDS STATISTIK KINERJA DOSEN -->
    <div class="row g-3 mb-4">
        <!-- Card Mata Kuliah -->
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="card border-0 shadow-sm rounded-4 p-3 style-card-stat">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted small mb-1 fw-medium">Mata Kuliah Diampu</p>
                        <h3 class="fw-bold mb-0 text-dark">3 <span class="fs-6 text-muted fw-normal">Kelas</span></h3>
                    </div>
                    <div class="stat-icon bg-primary-subtle text-primary">
                        <i class="fa-solid fa-book-bookmark"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Mahasiswa Bimbingan -->
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="card border-0 shadow-sm rounded-4 p-3 style-card-stat">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted small mb-1 fw-medium">Mahasiswa Bimbingan</p>
                        <h3 class="fw-bold mb-0 text-dark">12 <span class="fs-6 text-muted fw-normal">Orang</span></h3>
                    </div>
                    <div class="stat-icon bg-success-subtle text-success">
                        <i class="fa-solid fa-user-graduate"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Status Absensi Mengajar -->
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="card border-0 shadow-sm rounded-4 p-3 style-card-stat">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted small mb-1 fw-medium">Jadwal Hari Ini</p>
                        <h3 class="fw-bold mb-0 text-info" style="font-size: 20px;">1 Kelas Aktif</h3>
                    </div>
                    <div class="stat-icon bg-info-subtle text-info">
                        <i class="fa-solid fa-calendar-day"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. BAGIAN UTAMA: JADWAL & KELOLA NILAI MATA KULIAH -->
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4" style="background: white;">
        
        <div class="d-flex align-items-center gap-2 mb-4">
            <div class="bg-success text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                <i class="fa-solid fa-table-list"></i>
            </div>
            <h5 class="fw-bold mb-0 text-dark">Daftar Kelas & Input Nilai Akhir</h5>
        </div>
        
        <!-- Tabel Kelas Dosen -->
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="py-3 px-3">Kode MK</th>
                        <th class="py-3">Nama Mata Kuliah</th>
                        <th class="py-3">Kelas</th>
                        <th class="py-3 text-center">Jumlah Mhs</th>
                        <th class="py-3 text-center" style="width: 180px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh Data Kelas 1 -->
                    <tr>
                        <td class="px-3 text-secondary fw-semibold">MIF-204</td>
                        <td><strong class="text-dark">Pemrograman Web Berbasis Framework</strong></td>
                        <td><span class="badge bg-light text-dark border rounded px-2.5 py-1.5">MIF 4B</span></td>
                        <td class="text-center fw-medium text-secondary">24 Mahasiswa</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-success rounded-3 px-3 fw-medium d-inline-flex align-items-center gap-1 shadow-sm">
                                <i class="fa-solid fa-pen-to-square" style="font-size: 12px;"></i> Kelola Nilai
                            </button>
                        </td>
                    </tr>
                    <!-- Contoh Data Kelas 2 -->
                    <tr>
                        <td class="px-3 text-secondary fw-semibold">MIF-208</td>
                        <td><strong class="text-dark">Sistem Basis Data Lanjut</strong></td>
                        <td><span class="badge bg-light text-dark border rounded px-2.5 py-1.5">MIF 4A</span></td>
                        <td class="text-center fw-medium text-secondary">26 Mahasiswa</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-success rounded-3 px-3 fw-medium d-inline-flex align-items-center gap-1 shadow-sm">
                                <i class="fa-solid fa-pen-to-square" style="font-size: 12px;"></i> Kelola Nilai
                            </button>
                        </td>
                    </tr>
                    <!-- Contoh Data Kelas 3 -->
                    <tr>
                        <td class="px-3 text-secondary fw-semibold">MIF-302</td>
                        <td><strong class="text-dark">Kriptografi Klasik & Keamanan Informasi</strong></td>
                        <td><span class="badge bg-light text-dark border rounded px-2.5 py-1.5">MIF 6A</span></td>
                        <td class="text-center fw-medium text-secondary">20 Mahasiswa</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-success rounded-3 px-3 fw-medium d-inline-flex align-items-center gap-1 shadow-sm">
                                <i class="fa-solid fa-pen-to-square" style="font-size: 12px;"></i> Kelola Nilai
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- CSS Khusus Elemen Dashboard Konten Dosen -->
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