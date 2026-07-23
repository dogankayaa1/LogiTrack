<?php require_once __DIR__. '../../../functions/musteri.php'; ?>
<!DOCTYPE html>
<html lang="tr" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Müşteriler - StokTakip Pro</title>
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

            <?php include("../layout/header.php") ?>
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
                    <h4 class="fw-bold mb-0">Müşteri / Bayi Yönetimi</h4>
                    <p class="text-muted small mb-0">Sevkiyat ve satış yaptığınız müşterilerin listesi.</p>
                </div>
            </div>
            
            <button class="btn btn-primary" style="background: var(--primary-gradient); border: none;" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
                <i class="bi bi-plus-lg me-1"></i> Yeni Müşteri Ekle
            </button>
        </header>

        <!-- Main Card -->
        <div class="card custom-card border-0 p-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
                <div class="input-group" style="max-width: 350px;">
                    <span class="input-group-text bg-transparent text-muted"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Müşteri adı, unvanı veya tel ara...">
                </div>
            </div>

            <!-- Customers Table -->
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>MÜŞTERİ / BAYİ ADI</th>
                            <th>YETKİLİ</th>
                            <th>TELEFON</th>
                            <th>E-POSTA</th>
                            <th class="text-end">TOPLAM ALIM</th>
                            <th class="text-end">İŞLEMLER</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $musteri = musteriGetir();
                        foreach($musteri as $gelenmusteri):
                        ?>
                        <tr>
                            <td><span class="fw-bold"><?php echo $gelenmusteri["musteri_adi"] ; ?></span></td>
                            <td><?php echo $gelenmusteri["yetkili_adi"] ; ?></td>
                            <td><?php echo $gelenmusteri["telefon"] ; ?></td>
                            <td class="text-muted"><?php echo $gelenmusteri["eposta"] ; ?> </td>
                            <td class="text-end fw-semibold">₺ -</td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-secondary me-1" data-bs-toggle="modal" data-bs-target="#editCustomerModal<?php echo $gelenmusteri["id"] ; ?>"><i class="bi bi-pencil-fill"></i></button>
                                <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteCustomerModal<?php echo $gelenmusteri["id"]; ?>"><i class="bi bi-trash3-fill"></i></button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Add Customer Modal -->
    <div class="modal fade" id="addCustomerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="border-radius: var(--card-border-radius);">
                <div class="modal-header border-bottom-0 pb-0">
                    <h5 class="modal-title fw-bold">Yeni Müşteri Ekle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="../../functions/musteri.php" method="POST"> 
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Müşteri / Bayi Unvanı</label>
                            <input name="musteri_adi" type="text" class="form-control" placeholder="örn: Özgür Ticaret Ltd." required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Yetkili Adı Soyadı</label>
                            <input name="yetkili_adi" type="text" class="form-control" placeholder="örn: Özgür Demir" required>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label class="form-label small fw-semibold">Telefon</label>
                                <input name="telefon" type="tel" class="form-control" placeholder="örn: +90 5..." required>
                            </div>
                            <div class="col-6">
                                <label class="form-label small fw-semibold">E-posta</label>
                                <input name="eposta" type="email" class="form-control" placeholder="örn: musteri@ticaret.com">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small fw-semibold">Adres</label>
                            <textarea name="adres" class="form-control" rows="2" placeholder="Fatura / Teslimat adresi..."></textarea>
                        </div>
                        <div class="d-flex gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Vazgeç</button>
                            <button type="submit" class="btn btn-primary" style="background: var(--primary-gradient); border:none;">Müşteriyi Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit & Delete Customer Modals Loop -->
    <?php foreach($musteri as $gelenmusteri): ?>
    <!-- Edit Customer Modal -->
    <div class="modal fade" id="editCustomerModal<?php echo $gelenmusteri["id"] ; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="border-radius: var(--card-border-radius);">
                <div class="modal-header border-bottom-0 pb-0">
                    <h5 class="modal-title fw-bold">Müşteri / Bayi Düzenle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Müşteri / Bayi Unvanı</label>
                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($gelenmusteri["musteri_adi"]) ; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Yetkili Adı Soyadı</label>
                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($gelenmusteri["yetkili_adi"]) ; ?>" required>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label class="form-label small fw-semibold">Telefon</label>
                                <input type="tel" class="form-control" value="<?php echo htmlspecialchars($gelenmusteri["telefon"]) ; ?>" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label small fw-semibold">E-posta</label>
                                <input type="email" class="form-control" value="<?php echo htmlspecialchars($gelenmusteri["eposta"]) ; ?>">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small fw-semibold">Adres</label>
                            <textarea class="form-control" rows="2" required><?php echo htmlspecialchars($gelenmusteri["adres"]) ; ?></textarea>
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

    <!-- Delete Customer Modal -->
    <div class="modal fade" id="deleteCustomerModal<?php echo $gelenmusteri["id"] ; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0" style="border-radius: var(--card-border-radius);">
                <div class="modal-header border-bottom-0 pb-0 justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body text-center pt-0 px-4 pb-4">
                    <div class="mx-auto mb-4 d-flex align-items-center justify-content-center bg-danger bg-opacity-10 text-danger rounded-circle" style="width: 80px; height: 80px; font-size: 2.5rem;">
                        <i class="bi bi-exclamation-triangle-fill"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Müşteriyi Silmek İstediğinize Emin Misiniz?</h5>
                    <p class="text-muted small mb-4">Bu işlem geri alınamaz. "<span class="fw-semibold"><?php echo htmlspecialchars($gelenmusteri["musteri_adi"]); ?></span>" müşterisi ve bu müşteriye ait tüm sipariş/bakiye geçmişi sistemden kalıcı olarak silinecektir.</p>
                    <form action="../../functions/musteri.php" method="POST">
                        <input type="hidden" name="silme_musteri_id" value="<?php echo $gelenmusteri["id"]; ?>">
                        <div class="d-flex gap-3 justify-content-center">
                            <button type="button" class="btn btn-light px-4 py-2" data-bs-dismiss="modal" style="border-radius: 10px;">İptal</button>
                            <button type="submit" class="btn btn-danger px-4 py-2" style="border-radius: 10px;">Evet, Sil</button>
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

        // Delete Customer Modal Data Handler
        const deleteCustomerModal = document.getElementById('deleteCustomerModal');
        if (deleteCustomerModal) {
            deleteCustomerModal.addEventListener('show.bs.modal', (event) => {
                const button = event.relatedTarget;
                const customerName = button.getAttribute('data-customer-name');
                const nameSpan = deleteCustomerModal.querySelector('#deleteCustomerName');
                if (nameSpan) nameSpan.textContent = customerName;
            });
        }
    </script>
</body>
</html>
