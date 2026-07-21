
  
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