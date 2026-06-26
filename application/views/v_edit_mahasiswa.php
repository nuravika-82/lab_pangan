<div class="form-container" style="max-width: 650px; margin: 30px auto 60px auto; padding: 0 15px;">
    <div class="card border-0 rounded-4" style="background: #ffffff; border-radius: 24px; box-shadow: 0 30px 60px -15px rgba(15, 23, 42, 0.08); border: 1px solid rgba(226, 232, 240, 0.7); overflow: hidden;">
        
        <div class="form-header" style="background: linear-gradient(135deg, #0f172a, #1e293b); padding: 30px 40px;">
            <h4 style="font-size: 1.35rem; font-weight: 800; color: #ffffff; margin: 0;">Perbarui Data Mahasiswa</h4>
            <p style="font-size: 13px; color: #94a3b8; margin: 5px 0 0 0;">Lakukan perubahan data mahasiswa secara berkala</p>
        </div>

        <form action="<?= base_url('index.php/mahasiswa/update'); ?>" method="post" style="padding: 40px; display: flex; flex-direction: column; gap: 25px;">
            
            <input type="hidden" name="nim_lama" value="<?= $mhs['nim']; ?>">

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="font-size: 12px; font-weight: 800; color: #64748b; text-transform: uppercase;">Nomor Induk Mahasiswa (NIM)</label>
                <input type="text" value="<?= $mhs['nim']; ?>" disabled style="width: 100%; padding: 14px; border: 1px solid #e2e8f0; border-radius: 12px; background: #f1f5f9; color: #94a3b8; font-weight: 700;">
            </div>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label style="font-size: 12px; font-weight: 800; color: #4a5568; text-transform: uppercase;">Nama Lengkap Mahasiswa *</label>
                <input type="text" name="nama" value="<?= $mhs['nama']; ?>" required style="width: 100%; padding: 14px; border: 1px solid #e2e8f0; border-radius: 12px; background: #ffffff; font-weight: 600; color: #1e293b;">
            </div>

            <div style="display: flex; justify-content: flex-end; gap: 14px; align-items: center; margin-top: 10px;">
                <a href="<?= base_url('index.php/mahasiswa'); ?>" style="text-decoration: none; color: #64748b; background: #ffffff; border: 1px solid #e2e8f0; padding: 12px 26px; border-radius: 12px; font-weight: 700; font-size: 14px;">Batal</a>
                <button type="submit" style="background: linear-gradient(135deg, #00b4d8, #0077b6); color: white; border: none; padding: 13px 28px; border-radius: 12px; font-weight: 700; font-size: 14px; cursor: pointer; box-shadow: 0 4px 14px rgba(0, 180, 216, 0.3);">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>