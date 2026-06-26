<div class="table-container" style="padding: 20px; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); margin-top: 20px; border: 1px solid #edf2f7;">
    
    <div class="table-title" style="margin-bottom: 15px; font-size: 18px; font-weight: bold; color: #2d3748; display: flex; align-items: center; gap: 8px;">
        <i class="fa-solid fa-graduation-cap" style="color: #00b4d8;"></i> 
        Daftar Program Studi POLTESA
    </div>

    <table class="modern-table" style="width: 100%; border-collapse: collapse; font-family: sans-serif;">
        <thead>
            <tr style="background-color: #f8fafc; border-bottom: 2px solid #e2e8f0;">
                <th style="text-align: center; width: 60px; padding: 12px; color: #4a5568;">No</th>
                <th style="width: 150px; text-align: left; padding: 12px; color: #4a5568;">ID Prodi</th>
                <th style="text-align: left; padding: 12px; color: #4a5568;">Nama Program Studi</th>
                <th style="text-align: left; padding: 12px; color: #4a5568;">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($prodi as $prd) :
            ?>
                <tr style="border-bottom: 1px solid #edf2f7;">
                    <td style="text-align: center; font-weight: 700; color: #00b4d8; padding: 12px;"><?= $no++; ?></td>
                    
                    <td style="padding: 12px;">
                        <span class="prodi-badge" style="background: #e0f2fe; color: #0369a1; padding: 4px 8px; border-radius: 6px; font-size: 12px; font-weight: 600; font-family: monospace;">
                            <?= $prd['id_prodi']; ?>
                        </span>
                    </td>
                    
                    <td style="padding: 12px;">
                        <strong style="color: #2d3748;"><?= $prd['nama_prodi']; ?></strong>
                    </td>
                    
                    <td style="color: #718096; font-size: 0.85rem; line-height: 1.4; padding: 12px;">
                        <?= !empty($prd['keterangan']) ? $prd['keterangan'] : '-'; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table> 
</div>