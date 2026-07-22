<?php
session_start();
if (empty($_SESSION["eposta"]) || !isset($_SESSION["yetki"]) || $_SESSION["yetki"] !== "admin") {
    header("Location: login.php");
    exit();
}
require_once __DIR__.'../../../functions/urun.php';
require_once __DIR__.'../../../functions/kategori.php';

?>



<!DOCTYPE html>
<html lang="tr" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Yönetimi - StokTakip Pro</title>
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

        /* Modern Navigation Links */
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

        /* Glassmorphism Cards */
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

        .table-responsive {
            border-radius: 12px;
            overflow: hidden;
        }

        .table th {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            background-color: #f8fafc;
            color: #64748b;
            border-bottom: 2px solid #e2e8f0;
            padding: 1rem;
        }

        [data-bs-theme="dark"] .table th {
            background-color: #1e293b;
            color: #94a3b8;
            border-bottom: 2px solid #334155;
        }

        .table td {
            padding: 1rem;
            vertical-align: middle;
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
   <?php include("../layout/header.php"); ?>

   

    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <header class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-outline-secondary d-lg-none" id="sidebarToggleBtn">
                    <i class="bi bi-list"></i>
                </button>
                <div>
                    <h4 class="fw-bold mb-0">Ürün Listesi & Yönetimi</h4>
                    <p class="text-muted small mb-0">Ürün ekleme, düzenleme, silme ve gelişmiş arama modülü.</p>
                </div>
            </div>
            
            <button class="btn btn-primary" style="background: var(--primary-gradient); border: none;" data-bs-toggle="modal" data-bs-target="#addProductModal">
                <i class="bi bi-plus-lg me-1"></i> Yeni Ürün Ekle
            </button>
        </header>

        <!-- Main Section -->
        <div class="card custom-card border-0 p-4">
            <!-- Filter Bar -->
            <div class="row g-3 mb-4 align-items-end">
                <div class="col-12 col-md-4">
                    <label class="form-label small fw-semibold">Kelime ile Ara</label>
                    <div class="input-group">
                        <span class="input-group-text bg-transparent text-muted"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control" placeholder="Ürün adı, barkod veya kod...">
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <label class="form-label small fw-semibold">Kategori Filtresi</label>
                    <select class="form-select">
                        <option value="">Tüm Kategoriler</option>
                        <option value="Elektronik">Elektronik</option>
                        <option value="Giyim">Giyim</option>
                        <option value="Gıda">Gıda</option>
                        <option value="Ofis">Ofis Malzemeleri</option>
                    </select>
                </div>
                <div class="col-6 col-md-3">
                    <label class="form-label small fw-semibold">Stok Durumu</label>
                    <select class="form-select">
                        <option value="">Tüm Stok Durumları</option>
                        <option value="Normal">Stokta Var</option>
                        <option value="Low">Kritik Seviye</option>
                        <option value="Out">Tükendi</option>
                    </select>
                </div>
                <div class="col-12 col-md-2">
                    <button class="btn btn-outline-secondary w-100"><i class="bi bi-funnel-fill me-1"></i> Filtrele</button>
                </div>
            </div>
            

            <!-- Products Table -->
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>KOD</th>
                            <th>ÜRÜN ADI</th>
                            <th>KATEGORİ</th>
                            <th>FİYAT</th>
                            <th class="text-center">STOK</th>
                            <th class="text-center">MIN. UYARI</th>
                            <th>DURUM</th>
                            <th class="text-end">İŞLEMLER</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urun = urunGetir(); ?>
                        <?php foreach($urun as $gelenUrun): ?>

                        <tr>
                            
                            <td><code class="fw-bold"><?php  echo $gelenUrun["urun_kodu"]; ?></code></td>
                            <td><span class="fw-semibold"><?php  echo $gelenUrun["urun_adi"]; ?></span></td>
                            <td><span class="text-muted small"><?php  echo $gelenUrun["kategori"]; ?></span></td>
                            <td>₺<?php  echo $gelenUrun["fiyat"]; ?></td>
                            <td class="text-center fw-bold"><small class="text-muted"><?php  echo $gelenUrun["baslangic_stok"]; ?></small></td>
                            <td class="text-center text-muted"><?php  echo $gelenUrun["kritik_stok"]; ?></td>
                            <td><span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-10 rounded-pill px-2.5 py-1">Güvenli</span></td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-secondary me-1" data-bs-toggle="modal" data-bs-target="#editProductModal<?php echo $gelenUrun["id"];?>"><i class="bi bi-pencil-fill"></i></button>
                                <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteProductModal<?php echo $gelenUrun["id"];?>"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                    
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <span class="text-muted small">Toplam 3 kayıttan 1-3 arası gösteriliyor</span>
                <nav>
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">Geri</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">İleri</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>

    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="border-radius: var(--card-border-radius);">
                <div class="modal-header border-bottom-0 pb-0">
                    <h5 class="modal-title fw-bold">Yeni Ürün Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="../../functions/urun.php" method="POST" >
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Ürün Kodu</label>
                            <input name="urun_kodu" type="text" class="form-control" placeholder="örn: ELK-9832" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Ürün Adı</label>
                            <input name="urun_adi" type="text" class="form-control" placeholder="örn: Kablosuz Klavye" required>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label class="form-label small fw-semibold">Kategori</label>
                                <select name="urun_kategori" class="form-select" required>
                                    <?php 
                                    $kategori_getir = kategoriGetir();
                                    foreach($kategori_getir as $kategori): 
                                    ?>
                                    <option value="<?php echo $kategori["kategori_adi"];?>"><?php echo $kategori["kategori_adi"];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label small fw-semibold">Ürün Fiyatı(₺)</label>
                                <input name="urun_fiyat" type="number" step="0.01" class="form-control" placeholder="0.00" required>
                            </div>

                        </div>
                        <div class="row g-3 mb-4">
                            <div class="col-6">
                                <label class="form-label small fw-semibold">Başlangıç Stoğu</label>
                                <input name="urun_baslangic_stok" type="number" class="form-control" placeholder="0" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label small fw-semibold">Kritik Stok Limiti</label>
                                <input name="urun_kritik_stok" type="number" class="form-control" placeholder="10" required>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Vazgeç</button>
                            <button type="submit" class="btn btn-primary" style="background: var(--primary-gradient); border:none;">Kaydet ve Ekle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Product Modal -->
    <?php foreach($urun as $gelenUrun): ?>
    <div class="modal fade" id="editProductModal<?php echo $gelenUrun["id"]; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="border-radius: var(--card-border-radius);">
                <div class="modal-header border-bottom-0 pb-0">
                    <h5 class="modal-title fw-bold">Ürün Düzenle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="../../functions/urun.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $gelenUrun["id"]; ?>">
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Ürün Kodu</label>
                            <input type="text" class="form-control" name="urun_kodu" value="<?php echo $gelenUrun["urun_kodu"]; ?>" readonly disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Ürün Adı</label>
                            <input type="text" class="form-control" name="urun_adi" value="<?php echo $gelenUrun["urun_adi"]; ?>" required>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label class="form-label small fw-semibold">Kategori</label>
                                <select name="urun_kategori" class="form-select" required>
                                    <?php foreach($kategori_getir as $kategori): ?>
                                    <option value="<?php echo $kategori["kategori_adi"];?>" <?php echo ($kategori["kategori_adi"] == $gelenUrun["kategori"]) ? 'selected' : ''; ?>><?php echo $kategori["kategori_adi"];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label small fw-semibold">Fiyat (₺)</label>
                                <input type="number" step="0.01" class="form-control" name="urun_fiyat" value="<?php echo $gelenUrun["fiyat"]; ?>" required>
                            </div>
                        </div>
                        <div class="row g-3 mb-4">
                            <div class="col-6">
                                <label class="form-label small fw-semibold">Mevcut Stok</label>
                                <input type="number" class="form-control" name="baslangic_stok" value="<?php echo $gelenUrun["baslangic_stok"]; ?>" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label small fw-semibold">Kritik Stok Limiti</label>
                                <input type="number" class="form-control" name="kritik_stok" value="<?php echo $gelenUrun["kritik_stok"]; ?>" required>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Vazgeç</button>
                            <button type="submit" class="btn btn-primary" style="background: var(--primary-gradient); border:none;">Değişiklikleri Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    <!-- Delete Product Modal -->
    <?php foreach($urun as $gelenUrun): ?>
    <div class="modal fade" id="deleteProductModal<?php echo $gelenUrun["id"]; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="border-radius: var(--card-border-radius);">
                <div class="modal-header border-bottom-0 pb-0">
                    <h5 class="modal-title fw-bold">Ürünü Sil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong><?php echo $gelenUrun["urun_adi"]; ?></strong> isimli ürünü silmek istediğinize emin misiniz? Bu işlem geri alınamaz.</p>
                    <form action="../../functions/urun.php" method="POST">
                        <input type="hidden" name="silme_id" value="<?php echo $gelenUrun["id"]; ?>">
                        <input type="hidden" name="action" value="delete">
                        <div class="d-flex gap-2 justify-content-end mt-4">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Vazgeç</button>
                            <button type="submit" class="btn btn-danger">Evet, Sil</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

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
