<?php require_once('../../functions/urun.php') ?>
<!DOCTYPE html>
<html lang="tr" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barkod Basımı - StokTakip Pro</title>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5.3.3 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        :root {
            --font-family: 'Inter', sans-serif;
            --primary-gradient: linear-gradient(135deg, #4f46e5 0%, #3b82f6 100%);
            --sidebar-width: 260px;
            --card-border-radius: 16px;
        }

        body {
            font-family: var(--font-family);
            background-color: #f8fafc;
            color: #1e293b;
            min-height: 100vh;
            overflow-x: hidden;
            transition: background-color 0.3s, color 0.3s;
        }

        [data-bs-theme="dark"] body {
            background-color: #0f172a;
            color: #f1f5f9;
        }

        /* Sidebar Styling */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            background-color: #ffffff;
            border-right: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        [data-bs-theme="dark"] .sidebar {
            background-color: #1e293b;
            border-right: 1px solid rgba(255, 255, 255, 0.05);
        }

        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
            min-height: 100vh;
            transition: all 0.3s ease;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.active {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
                padding: 1.5rem 1rem;
            }
        }

        /* Navigation links */
        .nav-link-custom {
            display: flex;
            align-items: center;
            padding: 0.8rem 1.2rem;
            margin: 0.2rem 1rem;
            border-radius: 12px;
            color: #64748b;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        [data-bs-theme="dark"] .nav-link-custom {
            color: #94a3b8;
        }

        .nav-link-custom:hover {
            background-color: #f1f5f9;
            color: #4f46e5;
        }

        [data-bs-theme="dark"] .nav-link-custom:hover {
            background-color: #334155;
            color: #818cf8;
        }

        .nav-link-custom.active {
            background: var(--primary-gradient);
            color: #ffffff;
            box-shadow: 0 4px 14px rgba(79, 70, 229, 0.25);
        }

        .sidebar-heading {
            font-size: 0.68rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #94a3b8;
            padding: 1.25rem 1.5rem 0.5rem;
        }

        [data-bs-theme="dark"] .sidebar-heading {
            color: #64748b;
        }

        .custom-card {
            background: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: var(--card-border-radius);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
        }

        [data-bs-theme="dark"] .custom-card {
            background: #1e293b;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .icon-box {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }

        /* Barkod label mockup css */
        .barcode-card {
            border: 2px dashed #cbd5e1;
            border-radius: 8px;
            padding: 1rem;
            text-align: center;
            background-color: #ffffff;
            color: #000000;
            max-width: 250px;
            margin: auto;
        }

        [data-bs-theme="dark"] .barcode-card {
            background-color: #ffffff; /* Keep labels white for print feel */
            color: #000000;
        }

        .barcode-img {
            width: 100%;
            height: auto;
            max-height: 80px;
            object-fit: contain;
        }

        .theme-toggle-btn {
            background: none;
            border: none;
            color: #64748b;
            font-size: 1.25rem;
            cursor: pointer;
            transition: color 0.2s;
        }

        .theme-toggle-btn:hover {
            color: #4f46e5;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar d-flex flex-column justify-content-between py-4" style="overflow-y: auto;">
        <div>
            <div class="px-4 mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <div class="bg-primary text-white icon-box" style="background: var(--primary-gradient) !important;">
                        <i class="bi bi-box-seam-fill"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0">StokTakip</h6>
                        <small class="text-muted">Pro Sürüm v1.0</small>
                    </div>
                </div>
                <button class="btn d-lg-none" id="sidebarCloseBtn">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

       <?php include("../layout/header.php"); ?>
        </div>

        <div class="px-4">
            <hr class="text-muted">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <div class="bg-secondary rounded-circle" style="width: 36px; height: 36px; display:flex; align-items:center; justify-content:center; color:white;">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div>
                        <p class="mb-0 fw-semibold small">Geliştirici PHP</p>
                        <small class="text-muted text-xs">Yönetici</small>
                    </div>
                </div>
                <button class="theme-toggle-btn" id="themeToggle" aria-label="Karanlık Mod Değiştirici">
                    <i class="bi bi-moon-stars-fill"></i>
                </button>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <header class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-outline-secondary d-lg-none" id="sidebarToggleBtn">
                    <i class="bi bi-list"></i>
                </button>
                <div>
                    <h4 class="fw-bold mb-0">Barkod & Etiket Basımı</h4>
                    <p class="text-muted small mb-0">Ürünlerinize ait barkod etiketlerini düzenleyin ve yazdırın.</p>
                </div>
            </div>
        </header>

        <div class="row g-4">
            <!-- Settings Card -->
            <div class="col-12 col-lg-5">
                <div class="card custom-card border-0 p-4">
                    <h5 class="fw-bold mb-3">Etiket Seçenekleri</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Ürün Seçin</label>
                            <select class="form-select" required>
                                <option value="">Bir ürün seçin...</option>
                                <?php 
                                $gelen_urun = urunGetir();
                                foreach($gelen_urun as $urun):
                                ?>
                                <option value="1"><?php echo $urun["urun_adi"];?>(<?php echo $urun["urun_kodu"]; ?>)</option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label class="form-label small fw-semibold">Barkod Türü</label>
                                <select class="form-select">
                                    <option value="code128">Code 128 (Önerilen)</option>
                                    <option value="ean13">EAN-13</option>
                                    <option value="qrcode">QR Kod</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label small fw-semibold">Basılacak Adet</label>
                                <input type="number" class="form-control" value="10" min="1" required>
                            </div>
                        </div>

                        <div class="mb-3 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="showPrice" checked>
                            <label class="form-check-label small fw-semibold" for="showPrice">Fiyat Bilgisini Göster</label>
                        </div>
                        <div class="mb-4 form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="showName" checked>
                            <label class="form-check-label small fw-semibold" for="showName">Ürün Adını Göster</label>
                        </div>

                        <button type="button" onclick="window.print()" class="btn btn-primary w-100" style="background: var(--primary-gradient); border:none;">
                            <i class="bi bi-printer me-1"></i> Şimdi Yazdır (Print)
                        </button>
                    </form>
                </div>
            </div>

            <!-- Preview Card -->
            <div class="col-12 col-lg-7">
                <div class="card custom-card border-0 p-4 text-center">
                    <h5 class="fw-bold mb-4 text-start">Etiket Önizleme</h5>
                    
                    <div class="barcode-card py-4 shadow-sm mb-4">
                        <div class="small fw-semibold mb-1">STOKTAKİP PRO</div>
                        <div class="fw-bold small mb-2 text-truncate px-2">Oyuncu Kulaklığı RGB</div>
                        
                        <!-- Simulated Barcode Line -->
                        <div class="d-flex justify-content-center align-items-center bg-dark bg-opacity-10 py-3 mb-2 rounded mx-3">
                            <i class="bi bi-barcode" style="font-size: 3rem;"></i>
                        </div>
                        <div class="small font-monospace mb-2 text-muted">ELK-001-9821</div>
                        
                        <div class="fw-bold text-primary" style="font-size: 1.2rem;">₺1,250.00</div>
                    </div>
                    
                    <small class="text-muted"><i class="bi bi-info-circle me-1"></i> Yazdırma işlemi tarayıcınızın yazdırma sihirbazını başlatır. Etiket boyutlarını yazdırma ekranından seçebilirsiniz.</small>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Theme switcher
        document.getElementById('themeToggle').addEventListener('click', () => {
            const html = document.documentElement;
            const newTheme = html.getAttribute('data-bs-theme') === 'light' ? 'dark' : 'light';
            html.setAttribute('data-bs-theme', newTheme);
            const icon = document.getElementById('themeToggle').querySelector('i');
            icon.className = newTheme === 'dark' ? 'bi bi-sun-fill' : 'bi bi-moon-stars-fill';
        });

        // Sidebar responsive toggle
        const sidebar = document.querySelector('.sidebar');
        document.getElementById('sidebarToggleBtn').addEventListener('click', () => {
            sidebar.classList.add('active');
        });
        document.getElementById('sidebarCloseBtn').addEventListener('click', () => {
            sidebar.classList.remove('active');
        });
    </script>
</body>
</html>
