<div class="form-container" style="max-width: 650px; margin: 30px auto 60px auto; padding: 0 15px;">
    
    <a href="<?= base_url('mahasiswa'); ?>" style="text-decoration: none; color: #64748b; font-size: 14px; font-weight: 700; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 25px; transition: all 0.3s ease; padding: 8px 16px; border-radius: 50px; background: #ffffff; box-shadow: 0 2px 5px rgba(0,0,0,0.02); border: 1px solid #f1f5f9;" onmouseover="this.style.color='#00b4d8'; this.style.transform='translateX(-3px)'; this.style.boxShadow='0 4px 10px rgba(0,180,216,0.08)';" onmouseout="this.style.color='#64748b'; this.style.transform='translateX(0)'; this.style.boxShadow='0 2px 5px rgba(0,0,0,0.02)';">
        <i class="fa-solid fa-arrow-left-long" style="color: #00b4d8;"></i> Kembali ke Daftar
    </a>

    <div class="card border-0 rounded-4" style="background: #ffffff; border-radius: 24px; box-shadow: 0 30px 60px -15px rgba(15, 23, 42, 0.08); border: 1px solid rgba(226, 232, 240, 0.7); overflow: hidden;">
        
        <div class="form-header" style="background: linear-gradient(135deg, #0f172a, #1e293b); padding: 30px 40px; position: relative;">
            <div style="position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, #00b4d8, #8b5cf6); opacity: 0.8;"></div>
            
            <div style="display: flex; align-items: center; gap: 15px;">
                <div style="background: rgba(0, 180, 216, 0.15); width: 45px; height: 45px; border-radius: 12px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(0, 180, 216, 0.3);">
                    <i class="fa-solid fa-user-plus" style="color: #00b4d8; font-size: 18px;"></i>
                </div>
                <div>
                    <h4 class="mb-1" style="font-size: 1.35rem; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">Tambah Mahasiswa Baru</h4>
                    <p class="mb-0" style="font-size: 13px; color: #94a3b8; font-weight: 500;">Input data akademik mahasiswa baru kelas MIF 4B</p>
                </div>
            </div>
        </div>

        <form action="<?= base_url('mahasiswa/simpan'); ?>" method="post" style="padding: 40px; display: flex; flex-direction: column; gap: 25px; background: #ffffff;">
            
            <div class="input-group-custom" style="display: flex; flex-direction: column; gap: 8px;">
                <label style="font-size: 12px; font-weight: 800; color: #4a5568; text-transform: uppercase; letter-spacing: 1px;">
                    Nomor Induk Mahasiswa (NIM) <span style="color: #ef4444;">*</span>
                </label>
                <div style="position: relative; display: flex; align-items: center;">
                    <i class="fa-solid fa-id-card" style="position: absolute; left: 18px; color: #94a3b8; font-size: 15px; z-index: 10;"></i>
                    <input type="text" name="nim" placeholder="Contoh: 202601001" required 
                           style="width: 100%; padding: 14px 16px 14px 48px; border: 1px solid #e2e8f0; border-radius: 12px; outline: none; font-size: 14px; font-family: 'JetBrains Mono', monospace; font-weight: 700; color: #1e293b; background: #f8fafc; transition: all 0.3s ease;"
                           onfocus="this.style.borderColor='#00b4d8'; this.style.background='#ffffff'; this.style.boxShadow='0 0 0 4px rgba(0,180,216,0.15)';" 
                           onblur="this.style.borderColor='#e2e8f0'; this.style.background='#f8fafc'; this.style.boxShadow='none';">
                </div>
            </div>

            <div class="input-group-custom" style="display: flex; flex-direction: column; gap: 8px;">
                <label style="font-size: 12px; font-weight: 800; color: #4a5568; text-transform: uppercase; letter-spacing: 1px;">
                    Nama Lengkap Mahasiswa <span style="color: #ef4444;">*</span>
                </label>
                <div style="position: relative; display: flex; align-items: center;">
                    <i class="fa-solid fa-user" style="position: absolute; left: 18px; color: #94a3b8; font-size: 15px; z-index: 10;"></i>
                    <input type="text" name="nama" placeholder="Masukkan nama lengkap tanpa singkatan..." required 
                           style="width: 100%; padding: 14px 16px 14px 48px; border: 1px solid #e2e8f0; border-radius: 12px; outline: none; font-size: 14px; font-weight: 600; color: #1e293b; background: #f8fafc; transition: all 0.3s ease;"
                           onfocus="this.style.borderColor='#00b4d8'; this.style.background='#ffffff'; this.style.boxShadow='0 0 0 4px rgba(0,180,216,0.15)';" 
                           onblur="this.style.borderColor='#e2e8f0'; this.style.background='#f8fafc'; this.style.boxShadow='none';">
                </div>
            </div>

            <hr style="height: 1px; background: linear-gradient(90deg, transparent, #e2e8f0, transparent); border: none; margin: 10px 0;">

            <div style="display: flex; justify-content: flex-end; gap: 14px; align-items: center;">
                <a href="<?= base_url('mahasiswa'); ?>" 
                   style="text-decoration: none; color: #64748b; background: #ffffff; border: 1px solid #e2e8f0; padding: 12px 26px; border-radius: 12px; font-size: 14px; font-weight: 700; text-align: center; transition: all 0.2s ease;"
                   onmouseover="this.style.background='#f1f5f9'; this.style.color='#334155';" 
                   onmouseout="this.style.background='#ffffff'; this.style.color='#64748b';">
                    Batal
                </a>
                
                <button type="submit" 
                        style="background: linear-gradient(135deg, #00b4d8, #0077b6); color: white; border: none; padding: 13px 28px; border-radius: 12px; cursor: pointer; font-weight: 700; font-size: 14px; display: flex; align-items: center; gap: 8px; box-shadow: 0 4px 14px rgba(0, 180, 216, 0.3); transition: all 0.3s ease;"
                        onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(0, 180, 216, 0.4)';" 
                        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 14px rgba(0, 180, 216, 0.3)';">
                    <i class="fa-solid fa-floppy-disk"></i> Simpan Data
                </button>
            </div>

        </form>
    </div>
</div>