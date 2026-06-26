<div class="container-fluid">
    
    <!-- 1. HEADER DASHBOARD -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold text-dark mb-1">Dashboard Utama</h4>
            <p class="text-muted small mb-0">Selamat datang kembali di panel kendali akademik.</p>
        </div>
        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-semibold">
            <i class="fa-solid fa-user-shield me-1"></i> Role: Admin
        </span>
    </div>

    <!-- NOTIFIKASI SUKSES / GAGAL -->
    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show rounded-3 small mb-4" role="alert">
            <i class="fa-solid fa-circle-check me-2"></i> <?= $this->session->flashdata('success'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <!-- 2. CARDS STATISTIK -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="card border-0 shadow-sm rounded-4 p-3 style-card-stat">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted small mb-1 fw-medium">Total Pengguna</p>
                        <h3 class="fw-bold mb-0 text-dark"><?= count($users); ?></h3>
                    </div>
                    <div class="stat-icon bg-primary-subtle text-primary">
                        <i class="fa-solid fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="card border-0 shadow-sm rounded-4 p-3 style-card-stat">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted small mb-1 fw-medium">Aktif Login</p>
                        <h3 class="fw-bold mb-0 text-success">Online</h3>
                    </div>
                    <div class="stat-icon bg-success-subtle text-success">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="card border-0 shadow-sm rounded-4 p-3 style-card-stat">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted small mb-1 fw-medium">Koneksi DB</p>
                        <h3 class="fw-bold mb-0 text-info" style="font-size: 20px;">Connected</h3>
                    </div>
                    <div class="stat-icon bg-info-subtle text-info">
                        <i class="fa-solid fa-server"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. BAGIAN UTAMA: MANAJEMEN PENGGUNA -->
    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4" style="background: white;">
        
        <!-- Header Tabel, Pencarian & Tombol Tambah -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-stretch align-items-md-center gap-3 mb-4">
            <div class="d-flex align-items-center gap-2">
                <div class="bg-primary text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                    <i class="fa-solid fa-user-gear"></i>
                </div>
                <h5 class="fw-bold mb-0 text-dark">Data Manajemen Pengguna</h5>
            </div>
            
            <div class="d-flex flex-column flex-sm-row gap-2 flex-grow-1 flex-md-grow-0 justify-content-end">
                <!-- FORM PENCARIAN -->
                <form action="<?= base_url('dashboard/index') ?>" method="get" class="position-relative m-0">
                    <input type="text" name="keyword" class="form-control form-control-sm rounded-3 px-3 py-2 pe-5" placeholder="Cari username..." value="<?= $this->input->get('keyword') ?>" style="width: 100%; min-width: 220px;">
                    <button type="submit" class="btn btn-sm btn-link position-absolute end-0 top-50 transform-middle-y text-secondary text-decoration-none pe-3">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>

                <!-- Tombol Trigger Modal Tambah -->
                <button class="btn btn-primary btn-sm rounded-3 px-3 py-2 fw-medium d-flex align-items-center gap-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#modalTambah">
                    <i class="fa-solid fa-plus"></i> Tambah Pengguna
                </button>
            </div>
        </div>
        
        <!-- Tabel Data -->
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="py-3 px-3" style="width: 80px;">ID</th>
                        <th class="py-3">Username</th>
                        <th class="py-3">Role / Jabatan</th>
                        <th class="py-3 text-center" style="width: 150px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($users)): ?>
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">Data tidak ditemukan.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach($users as $u): ?>
                        <tr>
                            <td class="px-3 text-secondary fw-medium">#<?= $u->id ?></td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; font-size: 12px;">
                                        <i class="fa-solid fa-user text-secondary"></i>
                                    </div>
                                    <strong class="text-dark"><?= $u->username ?></strong>
                                </div>
                            </td>
                            <td>
                                <?php 
                                    $badge_class = 'bg-primary-subtle text-primary';
                                    if(strtolower($u->role) == 'dosen') { $badge_class = 'bg-success-subtle text-success'; }
                                    elseif(strtolower($u->role) == 'mahasiswa') { $badge_class = 'bg-warning-subtle text-warning'; }
                                ?>
                                <span class="badge <?= $badge_class ?> rounded-pill px-3 py-1.5 text-uppercase" style="font-size: 11px; font-weight: 600;">
                                    <?= $u->role ?>
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <!-- Tombol Edit Trigger Modal -->
                                    <button class="btn btn-sm btn-light text-primary border rounded-3 btn-action" title="Edit" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $u->id ?>">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <!-- Tombol Hapus Langsung ke URL -->
                                    <a href="<?= base_url('dashboard/hapus/'.$u->id) ?>" class="btn btn-sm btn-light text-danger border rounded-3 btn-action" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <!-- MODAL EDIT DATA PER USER -->
                        <div class="modal fade" id="modalEdit<?= $u->id ?>"  tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
                                <div class="modal-content border-0 shadow rounded-4">
                                    <div class="modal-header border-0 px-4 pt-4 pb-0">
                                        <h5 class="fw-bold text-dark"><i class="fa-solid fa-user-pen me-2 text-warning"></i>Edit Pengguna</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="<?= base_url('dashboard/edit') ?>" method="post">
                                        <input type="hidden" name="id" value="<?= $u->id ?>">
                                        <div class="modal-body p-4">
                                            <div class="mb-3">
                                                <label class="form-label small fw-medium text-secondary">Username</label>
                                                <input type="text" name="username" class="form-control rounded-3" value="<?= $u->username ?>" required autocomplete="off">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label small fw-medium text-secondary">Password Baru <span class="text-muted small">(Kosongkan jika tidak diubah)</span></label>
                                                <input type="password" name="password" class="form-control rounded-3" placeholder="Masukkan password baru">
                                            </div>
                                            <div class="mb-0">
                                                <label class="form-label small fw-medium text-secondary">Role / Jabatan</label>
                                                <select name="role" class="form-select rounded-3" required>
                                                    <option value="admin" <?= ($u->role == 'admin') ? 'selected' : '' ?>>ADMIN</option>
                                                    <option value="dosen" <?= ($u->role == 'dosen') ? 'selected' : '' ?>>DOSEN</option>
                                                    <option value="mahasiswa" <?= ($u->role == 'mahasiswa') ? 'selected' : '' ?>>MAHASISWA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-0 p-4 pt-0">
                                            <button type="button" class="btn btn-light rounded-3 px-3 btn-sm" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-warning rounded-3 px-4 text-white btn-sm fw-medium">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- MODAL TAMBAH DATA -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
        <div class="modal-content border-0 shadow rounded-4">
            <div class="modal-header border-0 px-4 pt-4 pb-0">
                <h5 class="fw-bold text-dark"><i class="fa-solid fa-user-plus me-2 text-primary"></i>Tambah Pengguna Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('dashboard/tambah') ?>" method="post">
                <div class="modal-body p-4">
                    <div class="mb-3">
                        <label class="form-label small fw-medium text-secondary">Username</label>
                        <input type="text" name="username" class="form-control rounded-3" placeholder="Masukkan username" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-medium text-secondary">Password</label>
                        <input type="password" name="password" class="form-control rounded-3" placeholder="Masukkan password" required>
                    </div>
                    <div class="mb-0">
                        <label class="form-label small fw-medium text-secondary">Role / Jabatan</label>
                        <select name="role" class="form-select rounded-3" required>
                            <option value="" disabled selected>-- Pilih Role --</option>
                            <option value="admin">ADMIN</option>
                            <option value="dosen">DOSEN</option>
                            <option value="mahasiswa">MAHASISWA</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer border-0 p-4 pt-0">
                    <button type="button" class="btn btn-light rounded-3 px-3 btn-sm" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary rounded-3 px-4 btn-sm fw-medium">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .style-card-stat { background: #ffffff; border: 1px solid #f1f3f7 !important; transition: transform 0.2s, box-shadow 0.2s; }
    .style-card-stat:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(0,0,0,0.03) !important; }
    .stat-icon { width: 48px; height: 48px; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 20px; }
    .btn-action { width: 32px; height: 32px; padding: 0; display: inline-flex; align-items: center; justify-content: center; transition: all 0.2s; }
    .btn-action:hover { background: #f8fafc !important; transform: scale(1.05); }
    .table th { font-weight: 600; color: #4a5568; font-size: 13px; letter-spacing: 0.5px; text-transform: uppercase; }
    .table td { font-size: 14px; }
    .transform-middle-y { transform: translateY(-50%); }
</style>