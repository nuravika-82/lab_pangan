</main> <footer class="admin-footer">
        <div class="container-fluid">
            <div class="footer-content">
                <div class="footer-left">
                    <span class="version-tag">v1.0.2</span>
                    <span class="separator">|</span>
                    <p class="copyright">
                        &copy; 2026 <strong>Politeknik Negeri Sambas</strong>. All rights reserved.
                    </p>
                </div>
                <div class="footer-right">
                    <p class="author-text">Dikembangkan oleh <span class="text-dark fw-medium">Nur Avika</span></p>
                </div>
            </div>
        </div>
    </footer>

    <style>
        .admin-footer {
            background: #ffffff;
            padding: 15px 30px;
            margin-left: 260px; /* Sesuai lebar sidebar */
            border-top: 1px solid #edf2f7;
            transition: all 0.3s ease;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-left, .footer-right {
            display: flex;
            align-items: center;
        }

        .version-tag {
            background: #f1f5f9;
            color: #64748b;
            font-size: 11px;
            font-weight: 600;
            padding: 2px 8px;
            border-radius: 6px;
            text-transform: uppercase;
        }

        .separator {
            color: #e2e8f0;
            margin: 0 15px;
            font-size: 14px;
        }

        .copyright {
            margin: 0;
            font-size: 13px;
            color: #718096;
        }

        .author-text {
            margin: 0;
            font-size: 13px;
            color: #a0aec0;
        }

        /* Responsif: Sidebar hilang di layar kecil */
        @media (max-width: 992px) {
            .admin-footer {
                margin-left: 0;
                padding: 20px;
            }
            .footer-content {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
            .separator {
                display: none;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>