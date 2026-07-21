<?php require_once("../../functions/ayarlar.php"); ?>


<!DOCTYPE html>
<html lang="tr" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Ayarları - StokTakip Pro</title>
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

            <nav class="nav flex-column">
                <div class="sidebar-heading">Paneller</div>
                <a href="../admin/yonetim-paneli.php" class="nav-link-custom">
                    <i class="bi bi-grid-1x2-fill me-3"></i> Genel Bakış
                </a>
                
                <div class="sidebar-heading">Stok Yönetimi</div>
                <a href="urunler.html" class="nav-link-custom">
                    <i class="bi bi-plus-circle-fill me-3"></i> Ürün Listesi & Ekle
                </a>
                <a href="kategoriler.html" class="nav-link-custom">
                    <i class="bi bi-tags-fill me-3"></i> Kategoriler
                </a>
                <a href="hareketler.html" class="nav-link-custom">
                    <i class="bi bi-arrow-left-right me-3"></i> Depo Hareketleri
                </a>
                <a href="barkod.html" class="nav-link-custom">
                    <i class="bi bi-upc-scan me-3"></i> Barkod Basımı
                </a>

                <div class="sidebar-heading">Cari & Finans</div>
                <a href="tedarikciler.html" class="nav-link-custom">
                    <i class="bi bi-truck me-3"></i> Tedarikçiler
                </a>
                <a href="musteriler.html" class="nav-link-custom">
                    <i class="bi bi-people-fill me-3"></i> Müşteriler
                </a>
                <a href="kasa.html" class="nav-link-custom">
                    <i class="bi bi-wallet2 me-3"></i> Kasa & Siparişler
                </a>

                <div class="sidebar-heading">Raporlar & Ayarlar</div>
                <a href="raporlar.html" class="nav-link-custom">
                    <i class="bi bi-graph-up-arrow me-3"></i> Raporlar
                </a>
                <a href="yetkiler.html" class="nav-link-custom">
                    <i class="bi bi-shield-lock-fill me-3"></i> Roller & Yetkiler
                </a>
                <a href="loglar.html" class="nav-link-custom">
                    <i class="bi bi-clock-history me-3"></i> İşlem Logları
                </a>
                <a href="ayarlar.html" class="nav-link-custom active">
                    <i class="bi bi-gear-fill me-3"></i> Ayarlar
                </a>
            </nav>
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
                    <h4 class="fw-bold mb-0">Sistem & Profil Ayarları</h4>
                    <p class="text-muted small mb-0">Genel mağaza/firma bilgileri ve yedekleme ayarları.</p>
                </div>
            </div>
        </header>

        <div class="row g-4">
            <!-- General Settings -->
            <div class="col-12 col-lg-6">
                <div class="card custom-card border-0 p-4">
                    <h5 class="fw-bold mb-3"><i class="bi bi-shop me-2 text-primary"></i> Mağaza / Firma Bilgileri</h5>
                    <?php 
                    if($_SERVER["REQUEST_METHOD"] === "POST"){
                        $firma_adi = $_POST["firma_adi"];
                        $para_birimi = $_POST["para_birimi"];
                        $kdv_orani = $_POST["kdv_orani"];

                        ayarGuncelle($firma_adi,$para_birimi,$kdv_orani);

                    }
                    
                    $para = ayarGetir();
                    $gelen_para = $para["para_birimi"];
                    $gelen_kdv =$para["kdv_orani"];
                    $gelen_firma_adi = $para["firma_adi"];
                    
                    ?>
                    
                    <form method="POST" action="" >
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Firma Adı</label>
                            <input name="firma_adi" type="text" class="form-control" value="<?php echo $gelen_firma_adi; ?>">
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label class="form-label small fw-semibold">Varsayılan Para Birimi</label>
                                <select name="para_birimi" class="form-select">
                                    <option value="TRY" <?php echo ($gelen_para == 'TRY') ? 'selected' : '';?>>Türk Lirası (₺)</option>
                                    <option value="USD" <?php echo ($gelen_para == 'USD') ? 'selected' : '';?>>Amerikan Doları ($)</option>
                                    <option value="EUR" <?php echo ($gelen_para == 'EUR') ? 'selected' : '';?>>Euro (€)</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label small fw-semibold">Kdv Oranı %</label>
                                <select name="kdv_orani" class="form-select">
                                    <option value="20" <?php echo ($gelen_kdv == '20') ? 'selected' : ''; ?> >20</option>
                                    <option value="10" <?php  echo ($gelen_kdv == '10') ? 'selected' : ''; ?>>10</option>
                                    <option value="1" <?php echo ($gelen_kdv == '1') ? 'selecded' : ''; ?> >1</option>
                                </select>
                            </div>
                          
                        </div>
                        <button type="submit" class="btn btn-primary" style="background: var(--primary-gradient); border:none;">Ayarları Kaydet</button>
                    </form>
                </div>
            </div>

            <!-- Database & System Backups -->
            <div class="col-12 col-lg-6">
                <div class="card custom-card border-0 p-4 mb-4">
                    <h5 class="fw-bold mb-3"><i class="bi bi-database-fill-gear me-2 text-warning"></i> Veritabanı & Yedekleme</h5>
                    <p class="text-muted small">Sisteme ait ürün ve hareket veritabanını dışa aktarın veya yedekten yükleyin.</p>
                    
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-secondary"><i class="bi bi-download me-1"></i> SQL Yedeği Al</button>
                        <button class="btn btn-outline-warning text-dark"><i class="bi bi-upload me-1"></i> Yedeği Geri Yükle</button>
                    </div>
                </div>

                <div class="card custom-card border-0 p-4">
                    <h5 class="fw-bold mb-3"><i class="bi bi-shield-fill-check me-2 text-success"></i> Sistem Durumu</h5>
                    <div class="small mb-1">PHP Versiyonu: <code class="fw-bold">8.2.1</code></div>
                    <div class="small mb-1">Veritabanı Sürücüsü: <code class="fw-bold">PDO MySQL</code></div>
                    <div class="small">Sunucu Durumu: <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-2.5 py-0.5">Çevrimiçi</span></div>
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
