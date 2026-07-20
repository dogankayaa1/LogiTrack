<?php ob_start(); 
session_start();
if(empty($_SESSION["eposta"]) && empty($_SESSION["yetki"]) !== "admin" ){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="tr" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StokTakip Pro - Mini Stok Takip & Ürün Yönetimi</title>
    <meta name="description" content="Modern, hızlı ve dinamik stok takip ve ürün yönetimi sistemi arayüzü.">
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/style.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- fallback for bootstrap styling if required, or we can use standard CDN -->
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
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        [data-bs-theme="dark"] .custom-card {
            background: #1e293b;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.2), 0 2px 4px -2px rgba(0, 0, 0, 0.2);
        }

        .custom-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -4px rgba(0, 0, 0, 0.08);
        }

        .icon-box {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
        }

        /* Smooth badges & table */
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

        /* Theme toggle switch button */
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

        /* Quick animations */
        .fade-in {
            animation: fadeIn 0.4s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar d-flex flex-column justify-content-between py-4" style="overflow-y: auto;">
        <div>
            <div class="px-4 mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <div class="bg-primary text-white icon-box" style="background: var(--primary-gradient) !important; width: 40px; height: 40px; border-radius: 10px;">
                        <i class="bi bi-box-seam-fill" style="font-size: 1.1rem;"></i>
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
                <a href="index.html" class="nav-link-custom active">
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
                <a href="../ayarlar/ayarlar.php" class="nav-link-custom">
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
                        <p class="mb-0 fw-semibold small"><?php echo $_SESSION["yetki"]; ?></p>
                        <small class="text-muted text-xs"><?php if($_SESSION["yetki"] === "admin"){
                            echo "Yönetici" ;
                        } ?></small>
                    </div>
                </div>
                <button class="theme-toggle-btn" id="themeToggle" aria-label="Karanlık Mod Değiştirici">
                    <i class="bi bi-moon-stars-fill"></i>
                </button>
            </div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="main-content">
        
        <!-- Header -->
        <header class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-outline-secondary d-lg-none" id="sidebarToggleBtn">
                    <i class="bi bi-list"></i>
                </button>
                <div>
                    <h4 class="fw-bold mb-0">Genel Bakış</h4>
                    <p class="text-muted small mb-0" id="currentDateStr"></p>
                </div>
            </div>
            
            <div class="d-flex align-items-center gap-2">
                <div class="input-group d-none d-md-flex" style="width: 250px;">
                    <span class="input-group-text bg-transparent border-end-0 text-muted"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control border-start-0" id="globalSearchInput" placeholder="Hızlı ürün ara...">
                </div>
                <button class="btn btn-primary" style="background: var(--primary-gradient); border: none;" data-bs-toggle="modal" data-bs-target="#addProductModal">
                    <i class="bi bi-plus-lg me-1"></i> Yeni Ürün
                </button>
            </div>
        </header>

        <!-- KPI Cards Row -->
        <section class="row g-4 mb-4 fade-in">
            <!-- Card 1 -->
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card custom-card border-0 p-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted small fw-semibold">Toplam Ürün Çeşidi</span>
                            <h3 class="fw-bold mt-1 mb-0" id="totalProductsCount">124</h3>
                        </div>
                        <div class="icon-box text-primary bg-primary bg-opacity-10">
                            <i class="bi bi-box"></i>
                        </div>
                    </div>
                    <div class="mt-3 small">
                        <span class="text-success fw-semibold"><i class="bi bi-arrow-up-short"></i> +12%</span>
                        <span class="text-muted ms-1">geçen aya göre</span>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card custom-card border-0 p-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted small fw-semibold">Toplam Stok Adeti</span>
                            <h3 class="fw-bold mt-1 mb-0" id="totalStockQty">4,850</h3>
                        </div>
                        <div class="icon-box text-success bg-success bg-opacity-10">
                            <i class="bi bi-layers-half"></i>
                        </div>
                    </div>
                    <div class="mt-3 small">
                        <span class="text-success fw-semibold"><i class="bi bi-check-circle-fill"></i> Güvenli</span>
                        <span class="text-muted ms-1">Stok seviyesi</span>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card custom-card border-0 p-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted small fw-semibold">Kritik Stok Uyarıları</span>
                            <h3 class="fw-bold mt-1 mb-0 text-danger" id="lowStockCount">8</h3>
                        </div>
                        <div class="icon-box text-danger bg-danger bg-opacity-10">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                        </div>
                    </div>
                    <div class="mt-3 small">
                        <span class="text-danger fw-semibold">Acil Eylem Gerekli</span>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-12 col-md-6 col-xl-3">
                <div class="card custom-card border-0 p-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-muted small fw-semibold">Toplam Stok Değeri</span>
                            <h3 class="fw-bold mt-1 mb-0" id="totalStockValue">₺245,800</h3>
                        </div>
                        <div class="icon-box text-warning bg-warning bg-opacity-10">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                    </div>
                    <div class="mt-3 small">
                        <span class="text-muted">Maliyet Üzerinden Hesaplanan</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Product Section -->
        <div class="row g-4 mb-4">
            <!-- Product List Card -->
            <div class="col-12 col-xl-8">
                <div class="card custom-card border-0 p-4 h-100">
                    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
                        <div>
                            <h5 class="fw-bold mb-1">Ürün Yönetimi</h5>
                            <p class="text-muted small mb-0">Stok durumunu takip edin, güncelleyin ve yönetin.</p>
                        </div>
                        <div class="d-flex gap-2">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-download me-1"></i> Dışa Aktar
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="border-radius: 10px;">
                                    <li><a class="dropdown-item py-2 small" href="#" onclick="showToast('Excel formatında dışa aktarma simüle edildi.')"><i class="bi bi-file-earmark-excel text-success me-2"></i> Excel (XLSX)</a></li>
                                    <li><a class="dropdown-item py-2 small" href="#" onclick="showToast('PDF raporu oluşturma simüle edildi.')"><i class="bi bi-file-earmark-pdf text-danger me-2"></i> PDF Raporu</a></li>
                                    <li><a class="dropdown-item py-2 small" href="#" onclick="window.print()"><i class="bi bi-printer text-primary me-2"></i> Yazdır</a></li>
                                </ul>
                            </div>
                            <select class="form-select form-select-sm" style="width: 150px;" id="categoryFilter">
                                <option value="All">Tüm Kategoriler</option>
                            </select>
                            <select class="form-select form-select-sm" style="width: 130px;" id="statusFilter">
                                <option value="All">Stok Durumu</option>
                                <option value="Normal">Normal</option>
                                <option value="Kritik">Kritik Stok</option>
                                <option value="Yok">Tükendi</option>
                            </select>
                        </div>
                    </div>

                    <!-- Products Table -->
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0" id="productsTable">
                            <thead>
                                <tr>
                                    <th>KOD</th>
                                    <th>ÜRÜN ADI</th>
                                    <th>KATEGORİ</th>
                                    <th>FİYAT</th>
                                    <th class="text-center">STOK</th>
                                    <th>DURUM</th>
                                    <th class="text-end">İŞLEMLER</th>
                                </tr>
                            </thead>
                            <tbody id="productTableBody">
                                <!-- JS items will load here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Side Widgets -->
            <div class="col-12 col-xl-4">
                <div class="d-flex flex-column gap-4 h-100">
                    <!-- Quick Add Category / Quick Action -->
                    <div class="card custom-card border-0 p-4">
                        <h5 class="fw-bold mb-3">Hızlı Stok Ekle/Çıkar</h5>
                        <form id="quickStockForm">
                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Ürün Seçin</label>
                                <select class="form-select" id="quickProductSelect" required>
                                    <option value="" disabled selected>Ürün seçiniz...</option>
                                    <!-- Dynamic Options -->
                                </select>
                            </div>
                            <div class="row g-2 mb-3">
                                <div class="col-6">
                                    <label class="form-label small fw-semibold">İşlem Türü</label>
                                    <select class="form-select" id="quickActionType">
                                        <option value="add">Stok Ekle (+)</option>
                                        <option value="remove">Stok Düş (-)</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-semibold">Miktar</label>
                                    <input type="number" class="form-control" id="quickActionQty" min="1" placeholder="Adet" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" style="background: var(--primary-gradient); border:none;">
                                <i class="bi bi-save me-1"></i> Stok Güncelle
                            </button>
                        </form>
                    </div>

                    <!-- Chart Widget -->
                    <div class="card custom-card border-0 p-4 flex-grow-1">
                        <h5 class="fw-bold mb-3">Kategori Dağılımı</h5>
                        <div style="position: relative; height: 200px; width: 100%;">
                            <canvas id="categoryChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="border-radius: var(--card-border-radius);">
                <div class="modal-header border-bottom-0 pb-0">
                    <h5 class="modal-title fw-bold" id="addProductModalLabel">Yeni Ürün Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <form id="addProductForm">
                        <div class="mb-3">
                            <label for="prodCode" class="form-label small fw-semibold">Ürün Kodu</label>
                            <input type="text" class="form-control" id="prodCode" placeholder="örn: ELK-9832" required>
                        </div>
                        <div class="mb-3">
                            <label for="prodName" class="form-label small fw-semibold">Ürün Adı</label>
                            <input type="text" class="form-control" id="prodName" placeholder="örn: Kablosuz Klavye" required>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label for="prodCategory" class="form-label small fw-semibold">Kategori</label>
                                <select class="form-select" id="prodCategory" required>
                                    <!-- Dynamic Options -->
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="prodPrice" class="form-label small fw-semibold">Fiyat (₺)</label>
                                <input type="number" step="0.01" class="form-control" id="prodPrice" placeholder="0.00" required>
                            </div>
                        </div>
                        <div class="row g-3 mb-4">
                            <div class="col-6">
                                <label for="prodStock" class="form-label small fw-semibold">Başlangıç Stok Adeti</label>
                                <input type="number" class="form-control" id="prodStock" placeholder="0" required>
                            </div>
                            <div class="col-6">
                                <label for="prodMinStock" class="form-label small fw-semibold">Minimum Stok Uyarı Sınırı</label>
                                <input type="number" class="form-control" id="prodMinStock" placeholder="10" required>
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

    <!-- Manage Categories Modal -->
    <div class="modal fade" id="manageCategoriesModal" tabindex="-1" aria-labelledby="manageCategoriesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="border-radius: var(--card-border-radius);">
                <div class="modal-header border-bottom-0 pb-0">
                    <h5 class="modal-title fw-bold" id="manageCategoriesModalLabel">Kategori Yönetimi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <!-- Add Category Form -->
                    <form id="addCategoryForm" class="mb-4">
                        <label class="form-label small fw-semibold">Yeni Kategori Ekle</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="newCategoryName" placeholder="Kategori adı girin..." required>
                            <button type="submit" class="btn btn-primary" style="background: var(--primary-gradient); border:none;">Ekle</button>
                        </div>
                    </form>

                    <!-- Category List -->
                    <label class="form-label small fw-semibold">Mevcut Kategoriler</label>
                    <ul class="list-group" id="categoriesListGroup" style="max-height: 200px; overflow-y: auto;">
                        <!-- JS items will load here -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js for data visualization -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Main Logic / Demonstration JS -->
    <script>
        // Default Mock Data
        let products = [
            { id: 1, code: 'ELK-001', name: 'Oyuncu Kulaklığı RGB', category: 'Elektronik', price: 1250.00, stock: 45, minStock: 10 },
            { id: 2, code: 'ELK-002', name: 'Mekanik Klavye Blue Switch', category: 'Elektronik', price: 1890.00, stock: 8, minStock: 15 }, // low stock
            { id: 3, code: 'GYM-201', name: 'Pamuklu Erkek T-Shirt', category: 'Giyim', price: 350.00, stock: 120, minStock: 20 },
            { id: 4, code: 'GDA-105', name: 'Filtre Kahve 250gr', category: 'Gıda', price: 185.00, stock: 0, minStock: 5 }, // out of stock
            { id: 5, code: 'OFS-302', name: 'Ergonomik Masa Lambası', category: 'Ofis Malzemeleri', price: 650.00, stock: 18, minStock: 5 },
            { id: 6, code: 'ELK-003', name: 'Bluetooth Mouse Kablosuz', category: 'Elektronik', price: 420.00, stock: 55, minStock: 12 }
        ];

        let categories = ["Elektronik", "Giyim", "Gıda", "Ofis Malzemeleri"];

        // Chart instance holder
        let categoryChart = null;

        // Initialize UI Features
        document.addEventListener('DOMContentLoaded', () => {
            populateCategories();
            renderProducts();
            initChart();
            updateKPIs();
            populateQuickSelect();
            
            // Format current date
            const dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('currentDateStr').innerText = new Date().toLocaleDateString('tr-TR', dateOptions);

            // Theme toggle listener
            const themeToggleBtn = document.getElementById('themeToggle');
            themeToggleBtn.addEventListener('click', toggleTheme);

            // Responsive Sidebar toggles
            const sidebar = document.querySelector('.sidebar');
            document.getElementById('sidebarToggleBtn').addEventListener('click', () => {
                sidebar.classList.add('active');
            });
            document.getElementById('sidebarCloseBtn').addEventListener('click', () => {
                sidebar.classList.remove('active');
            });

            // Filters & Search handlers
            document.getElementById('categoryFilter').addEventListener('change', filterProducts);
            document.getElementById('statusFilter').addEventListener('change', filterProducts);
            document.getElementById('globalSearchInput').addEventListener('input', filterProducts);

            // Add Product form handler
            document.getElementById('addProductForm').addEventListener('submit', (e) => {
                e.preventDefault();
                const code = document.getElementById('prodCode').value;
                const name = document.getElementById('prodName').value;
                const category = document.getElementById('prodCategory').value;
                const price = parseFloat(document.getElementById('prodPrice').value);
                const stock = parseInt(document.getElementById('prodStock').value);
                const minStock = parseInt(document.getElementById('prodMinStock').value);

                const newProduct = {
                    id: products.length + 1,
                    code,
                    name,
                    category,
                    price,
                    stock,
                    minStock
                };

                products.push(newProduct);
                bootstrap.Modal.getInstance(document.getElementById('addProductModal')).hide();
                document.getElementById('addProductForm').reset();
                
                // Refresh UI
                renderProducts();
                updateKPIs();
                populateQuickSelect();
                updateChartData();
                showToast("Yeni ürün başarıyla eklendi.");
            });

            // Quick Stock Update form handler
            document.getElementById('quickStockForm').addEventListener('submit', (e) => {
                e.preventDefault();
                const prodId = parseInt(document.getElementById('quickProductSelect').value);
                const action = document.getElementById('quickActionType').value;
                const qty = parseInt(document.getElementById('quickActionQty').value);

                const product = products.find(p => p.id === prodId);
                if (product) {
                    if (action === 'add') {
                        product.stock += qty;
                    } else {
                        if (product.stock >= qty) {
                            product.stock -= qty;
                        } else {
                            alert("Hata: Çıkartılacak stok miktarı mevcut stoktan fazla olamaz!");
                            return;
                        }
                    }
                    document.getElementById('quickStockForm').reset();
                    renderProducts();
                    updateKPIs();
                    updateChartData();
                    showToast("Stok miktarı başarıyla güncellendi.");
                }
            });

            // Add Category form handler
            document.getElementById('addCategoryForm').addEventListener('submit', (e) => {
                e.preventDefault();
                const catName = document.getElementById('newCategoryName').value.trim();
                if (catName) {
                    if (categories.includes(catName)) {
                        alert("Bu kategori zaten mevcut!");
                        return;
                    }
                    categories.push(catName);
                    document.getElementById('addCategoryForm').reset();
                    populateCategories();
                    updateChartData();
                    showToast("Yeni kategori başarıyla eklendi.");
                }
            });
        });

        // Populate Categories throughout the page
        function populateCategories() {
            // 1. Filter dropdown (id: categoryFilter)
            const filterSelect = document.getElementById('categoryFilter');
            const currentFilterVal = filterSelect.value || "All";
            filterSelect.innerHTML = '<option value="All">Tüm Kategoriler</option>';
            categories.forEach(cat => {
                filterSelect.innerHTML += `<option value="${cat}">${cat}</option>`;
            });
            if (categories.includes(currentFilterVal)) {
                filterSelect.value = currentFilterVal;
            } else {
                filterSelect.value = "All";
            }

            // 2. Add product form dropdown (id: prodCategory)
            const formSelect = document.getElementById('prodCategory');
            formSelect.innerHTML = '';
            categories.forEach(cat => {
                formSelect.innerHTML += `<option value="${cat}">${cat}</option>`;
            });

            // 3. Category Manager List Group (id: categoriesListGroup)
            const listGroup = document.getElementById('categoriesListGroup');
            listGroup.innerHTML = '';
            categories.forEach((cat, index) => {
                listGroup.innerHTML += `
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-light border-opacity-10 py-2.5">
                        <span>${cat}</span>
                        <button class="btn btn-sm btn-outline-danger border-0 p-1" onclick="deleteCategory(${index})" title="Kategoriyi Sil">
                            <i class="bi bi-trash3-fill"></i>
                        </button>
                    </li>
                `;
            });
        }

        // Delete Category logic
        window.deleteCategory = function(index) {
            const catName = categories[index];
            const hasProducts = products.some(p => p.category === catName);
            if (hasProducts) {
                alert(`Hata: "${catName}" kategorisine ait ürünler bulunmaktadır. Önce bu ürünlerin kategorisini değiştirmeli veya ürünleri silmelisiniz!`);
                return;
            }
            if (confirm(`"${catName}" kategorisini silmek istediğinize emin misiniz?`)) {
                categories.splice(index, 1);
                populateCategories();
                updateChartData();
                showToast("Kategori silindi.");
            }
        };

        // Theme switcher logic
        function toggleTheme() {
            const htmlElement = document.documentElement;
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'light' ? 'dark' : 'light';
            
            htmlElement.setAttribute('data-bs-theme', newTheme);
            const icon = document.getElementById('themeToggle').querySelector('i');
            
            if (newTheme === 'dark') {
                icon.className = 'bi bi-sun-fill';
                icon.style.color = '#e2e8f0';
            } else {
                icon.className = 'bi bi-moon-stars-fill';
                icon.style.color = '';
            }

            // re-render chart to adapt colors if needed (simplified here)
            initChart();
        }

        // Render products into the table body
        function renderProducts(filteredProducts = products) {
            const tbody = document.getElementById('productTableBody');
            tbody.innerHTML = '';

            if (filteredProducts.length === 0) {
                tbody.innerHTML = `<tr><td colspan="7" class="text-center text-muted py-4">Kayıtlı ürün bulunamadı.</td></tr>`;
                return;
            }

            filteredProducts.forEach(prod => {
                let statusBadge = '';
                if (prod.stock === 0) {
                    statusBadge = '<span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-10 rounded-pill px-2.5 py-1">Tükendi</span>';
                } else if (prod.stock <= prod.minStock) {
                    statusBadge = '<span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-10 rounded-pill px-2.5 py-1">Kritik Stok</span>';
                } else {
                    statusBadge = '<span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-10 rounded-pill px-2.5 py-1">Güvenli</span>';
                }

                tbody.innerHTML += `
                    <tr class="fade-in">
                        <td><code class="fw-bold">${prod.code}</code></td>
                        <td>
                            <div class="fw-semibold">${prod.name}</div>
                        </td>
                        <td><span class="text-muted small">${prod.category}</span></td>
                        <td>₺${prod.price.toLocaleString('tr-TR', { minimumFractionDigits: 2 })}</td>
                        <td class="text-center">
                            <span class="fw-bold ${prod.stock <= prod.minStock ? 'text-danger' : ''}">${prod.stock}</span>
                            <span class="text-muted small"> adet</span>
                        </td>
                        <td>${statusBadge}</td>
                        <td class="text-end">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-secondary" onclick="quickStockChange(${prod.id}, 1)" title="Hızlı +1 Ekle">
                                    <i class="bi bi-plus-lg"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-secondary" onclick="quickStockChange(${prod.id}, -1)" title="Hızlı -1 Düş" ${prod.stock === 0 ? 'disabled' : ''}>
                                    <i class="bi bi-dash-lg"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger ms-2" onclick="deleteProduct(${prod.id})" title="Sil">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                `;
            });
        }

        // Inline quick addition/subtraction
        window.quickStockChange = function(id, delta) {
            const product = products.find(p => p.id === id);
            if (product) {
                if (delta < 0 && product.stock === 0) return;
                product.stock += delta;
                renderProducts();
                updateKPIs();
                updateChartData();
            }
        };

        // Inline delete product
        window.deleteProduct = function(id) {
            if (confirm("Bu ürünü silmek istediğinize emin misiniz?")) {
                products = products.filter(p => p.id !== id);
                renderProducts();
                updateKPIs();
                populateQuickSelect();
                updateChartData();
                showToast("Ürün sistemden kaldırıldı.");
            }
        };

        // Populate dropdown menu for quick stock operations
        function populateQuickSelect() {
            const select = document.getElementById('quickProductSelect');
            select.innerHTML = '<option value="" disabled selected>Ürün seçiniz...</option>';
            products.forEach(p => {
                select.innerHTML += `<option value="${p.id}">${p.name} (${p.code})</option>`;
            });
        }

        // Recalculate KPIs based on mock products list
        function updateKPIs() {
            document.getElementById('totalProductsCount').innerText = products.length;
            
            const totalQty = products.reduce((acc, curr) => acc + curr.stock, 0);
            document.getElementById('totalStockQty').innerText = totalQty.toLocaleString('tr-TR');

            const lowStockCount = products.filter(p => p.stock <= p.minStock).length;
            document.getElementById('lowStockCount').innerText = lowStockCount;

            const totalVal = products.reduce((acc, curr) => acc + (curr.price * curr.stock), 0);
            document.getElementById('totalStockValue').innerText = '₺' + totalVal.toLocaleString('tr-TR', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
        }

        // Filter and Search Logic
        function filterProducts() {
            const categoryValue = document.getElementById('categoryFilter').value;
            const statusValue = document.getElementById('statusFilter').value;
            const searchQuery = document.getElementById('globalSearchInput').value.toLowerCase();

            const filtered = products.filter(p => {
                const matchesCategory = categoryValue === 'All' || p.category === categoryValue;
                
                let matchesStatus = true;
                if (statusValue === 'Kritik') {
                    matchesStatus = p.stock > 0 && p.stock <= p.minStock;
                } else if (statusValue === 'Yok') {
                    matchesStatus = p.stock === 0;
                } else if (statusValue === 'Normal') {
                    matchesStatus = p.stock > p.minStock;
                }

                const matchesSearch = p.name.toLowerCase().includes(searchQuery) || p.code.toLowerCase().includes(searchQuery);

                return matchesCategory && matchesStatus && matchesSearch;
            });

            renderProducts(filtered);
        }



        // Data visualization logic (Chart.js)
        function initChart() {
            const ctx = document.getElementById('categoryChart').getContext('2d');
            
            // Group category data
            const catMap = {};
            products.forEach(p => {
                catMap[p.category] = (catMap[p.category] || 0) + p.stock;
            });

            const labels = Object.keys(catMap);
            const data = Object.values(catMap);

            if (categoryChart) {
                categoryChart.destroy();
            }

            const isDark = document.documentElement.getAttribute('data-bs-theme') === 'dark';
            const textColor = isDark ? '#f1f5f9' : '#1e293b';

            categoryChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: labels,
                    datasets: [{
                        data: data,
                        backgroundColor: [
                            'rgba(79, 70, 229, 0.85)',
                            'rgba(59, 130, 246, 0.85)',
                            'rgba(16, 185, 129, 0.85)',
                            'rgba(245, 158, 11, 0.85)'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                color: textColor,
                                font: {
                                    family: 'Inter',
                                    size: 11
                                },
                                padding: 15
                            }
                        }
                    },
                    cutout: '70%'
                }
            });
        }

        function updateChartData() {
            if (!categoryChart) return;
            const catMap = {};
            products.forEach(p => {
                catMap[p.category] = (catMap[p.category] || 0) + p.stock;
            });
            categoryChart.data.labels = Object.keys(catMap);
            categoryChart.data.datasets[0].data = Object.values(catMap);
            categoryChart.update();
        }

        // Beautiful Bootstrap Toast Trigger
        function showToast(message, type = 'success') {
            const toastEl = document.getElementById('actionToast');
            const toastIcon = document.getElementById('toastIcon');
            const toastMsg = document.getElementById('toastMsg');
            
            toastMsg.innerText = message;
            if (type === 'success') {
                toastIcon.className = 'bi bi-check-circle-fill text-success';
                toastEl.style.borderLeft = '4px solid #10b981';
            } else if (type === 'error') {
                toastIcon.className = 'bi bi-exclamation-circle-fill text-danger';
                toastEl.style.borderLeft = '4px solid #ef4444';
            } else {
                toastIcon.className = 'bi bi-info-circle-fill text-info';
                toastEl.style.borderLeft = '4px solid #3b82f6';
            }
            
            const bootstrapToast = new bootstrap.Toast(toastEl);
            bootstrapToast.show();
        }
    </script>

    <!-- Toast Notification Container -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1060;">
        <div id="actionToast" class="toast align-items-center border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true" style="border-radius: 12px; background: var(--bs-body-bg); color: var(--bs-body-color);">
            <div class="d-flex">
                <div class="toast-body d-flex align-items-center gap-2">
                    <i class="bi bi-check-circle-fill text-success" id="toastIcon" style="font-size: 1.25rem;"></i>
                    <span id="toastMsg" class="fw-medium small">İşlem başarıyla tamamlandı.</span>
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Kapat"></button>
            </div>
        </div>
    </div>
</body>
</html>
