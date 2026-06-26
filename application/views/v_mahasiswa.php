<div class="table-container" style="padding: 20px; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">

    <div class="action-wrapper" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 15px;">
        
        <form action="<?= base_url('mahasiswa/cari'); ?>" method="post" style="display: flex; gap: 8px; align-items: center; margin: 0;">
            <input type="text" name="keyword" placeholder="Cari berdasarkan NIM atau Nama..." style="padding: 8px 16px; border: 1px solid #e2e8f0; border-radius: 8px; outline: none; width: 260px; font-size: 14px;">
            <button type="submit" style="background: #00b4d8; color: white; border: none; padding: 8px 16px; border-radius: 8px; cursor: pointer; font-weight: 500; font-size: 14px; display: flex; align-items: center; gap: 5px;">
                <i class="fa-solid fa-magnifying-glass"></i> Cari
            </button>
            <a href="<?= base_url('mahasiswa'); ?>" style="color: #718096; text-decoration: none; font-size: 14px; padding: 8px 12px; border: 1px solid #e2e8f0; border-radius: 8px; background: #f8fafc;">
                Reset
            </a>
        </form>

        <a href="<?= base_url('mahasiswa/tambah'); ?>" style="text-decoration: none;">
            <button style="background: linear-gradient(135deg, #00b4d8, #0077b6); color: white; border: none; padding: 9px 18px; border-radius: 8px; cursor: pointer; font-weight: 600; font-size: 14px; display: flex; align-items: center; gap: 8px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);">
                <i class="fa-solid fa-plus"></i> Tambah Mahasiswa
            </button>
        </a>
    </div>

    <div class="table-title" style="margin-bottom: 15px; font-size: 18px; font-weight: bold; color: #2d3748; display: flex; align-items: center; gap: 8px;">
        <i class="fa-solid fa-users" style="color: #00b4d8;"></i> 
        <?= $title; ?>
    </div>

    <table class="modern-table" style="width: 100%; border-collapse: collapse; font-family: sans-serif;">
        <thead>
            <tr style="background-color: #f8fafc; border-bottom: 2px solid #e2e8f0;">
                <th style="text-align: center; width: 60px; padding: 12px; color: #4a5568;">No</th>
                <th style="width: 150px; text-align: left; padding: 12px; color: #4a5568;">NIM</th>
                <th style="text-align: left; padding: 12px; color: #4a5568;">Nama Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($mahasiswa)) : ?>
                <?php 
                $no = 1;
                foreach ($mahasiswa as $mhs) : 
                ?>
                <tr style="border-bottom: 1px solid #edf2f7;">
                    <td style="text-align: center; padding: 12px; color: #4a5568;"><?= $no++; ?></td>
                    <td style="padding: 12px;"><strong style="color: #00b4d8;"><?= $mhs['nim']; ?></strong></td>
                    <td style="padding: 12px; color: #2d3748;"><?= $mhs['nama']; ?></td>
                </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="3" style="text-align: center; color: #a0aec0; padding: 30px; font-style: italic;">
                        <i class="fa-solid fa-folder-open" style="display: block; font-size: 24px; margin-bottom: 8px;"></i>
                        Data tidak ditemukan.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table> 
</div>