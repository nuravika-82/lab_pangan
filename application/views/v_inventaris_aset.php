<div class="data-container">
    <div class="data-card">
        
        <div class="table-header-group">
            <div>
                <h2 style="display: flex; align-items: center; gap: 15px;">
                    <i class="fa-solid fa-folder-tree" style="color: #0ea5e9;"></i>
                    Laporan Inventaris Sarpras
                </h2>
                <p style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px; font-weight: 600;">
                    Manajemen Aset Instansi Terpusat — POLTESA
                </p>
            </div>
            <div style="text-align: right;">
                <span style="background: #f0f9ff; color: #0ea5e9; padding: 8px 16px; border-radius: 12px; font-size: 0.8rem; font-weight: 800; border: 1px solid rgba(14, 165, 233, 0.2);">
                    TOTAL ASET: <?= count($aset); ?> UNITS
                </span>
            </div>
        </div>

        <table class="luxury-table">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="15%">ID Register</th>
                    <th width="25%">Nama Sarana</th>
                    <th width="15%">Kategori</th>
                    <th width="15%">Lokasi</th>
                    <th width="15%">Kondisi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($aset as $a) : ?>
                <tr>
                    <td style="color: #0ea5e9; font-weight: 800;"><?= $no++; ?></td>
                    <td><span class="badge-code"><?= $a['kode_barang']; ?></span></td>
                    <td>
                        <div style="font-weight: 700; color: #1e293b;"><?= $a['nama_barang']; ?></div>
                        <div style="font-size: 0.7rem; color: #94a3b8;">Penanggung Jawab: <?= $a['penanggung_jawab']; ?></div>
                    </td>
                    <td><i class="fa-solid fa-tag" style="font-size: 0.7rem; color: #38bdf8;"></i> <?= $a['nama_kategori']; ?></td>
                    <td><i class="fa-solid fa-location-dot" style="font-size: 0.7rem; color: #f43f5e;"></i> <?= $a['nama_lokasi']; ?></td>
                    <td align="center">
                        <?php if($a['kondisi'] == 'Baik'): ?>
                            <span class="status-badge status-baik"><i class="fa-solid fa-circle-check"></i> Baik</span>
                        <?php elseif($a['kondisi'] == 'Rusak Ringan'): ?>
                            <span class="status-badge status-ringan"><i class="fa-solid fa-triangle-exclamation"></i> Rusak</span>
                        <?php else: ?>
                            <span class="status-badge status-berat"><i class="fa-solid fa-circle-xmark"></i> Fatal</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>