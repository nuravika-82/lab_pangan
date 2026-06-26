/**
 * Core JavaScript Asset - Sistem Informasi Lab Pangan
 * Menangani Integrasi DataTables, SweetAlert2, dan Chart.js
 */
$(document).ready(function() {

    // =========================================================================
    // 1. INITIALIZATION DATATABLES INTERAKTIF INDONESIA
    // =========================================================================
    if ($.fn.DataTable) {
        $('.table-log-pangan').DataTable({
            responsive: true,
            pageLength: 10,
            ordering: true,
            language: {
                search: "Cari Alat / Transaksi:",
                lengthMenu: "Tampilkan _MENU_ entri data",
                zeroRecords: "Maaf, data tidak ditemukan dalam inventaris",
                info: "Menampilkan halaman _PAGE_ dari _PAGES_",
                infoEmpty: "Tidak ada data yang tersedia",
                paginate: {
                    next: "Berikutnya",
                    previous: "Sebelumnya"
                }
            }
        });
    }

    // =========================================================================
    // 2. MODAL INTERAKSI NOTIFIKASI SWEETALERT2
    // =========================================================================
    window.showPanganAlert = function(tipe, pesan) {
        if (tipe === 'success') {
            Swal.fire({
                title: 'Berhasil!',
                text: pesan,
                icon: 'success',
                confirmButtonColor: '#4DB6AC'
            });
        } else if (tipe === 'error') {
            Swal.fire({
                title: 'Transaksi Ditolak',
                text: pesan,
                icon: 'error',
                confirmButtonColor: '#E57373'
            });
        }
    };

    // =========================================================================
    // 3. STATISTIK GRAFIK INFOGRAFIS CHART.JS (Untuk Dashboard Admin & Kalab)
    // =========================================================================
    var ctxChart = document.getElementById('chartSirkulasiPangan');
    if (ctxChart) {
        new Chart(ctxChart, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                    label: 'Intensitas Peminjaman Alat',
                    data: [12, 19, 3, 5, 2, 24],
                    backgroundColor: '#4DB6AC',
                    borderColor: '#399E95',
                    borderWidth: 1,
                    borderRadius: 6
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
});