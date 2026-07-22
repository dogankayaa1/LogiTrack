<?php include("../../functions/kategori_guncelle.php");
 include("../../functions/kategori.php");
 include("../../functions/kategori_sil.php");

?>
<!DOCTYPE html>
<html lang="tr" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Yönetimi - StokTakip Pro</title>
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
    <?php include('../layout/header.php'); ?>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <header class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-outline-secondary d-lg-none" id="sidebarToggleBtn">
                    <i class="bi bi-list"></i>
                </button>
                <div>
                    <h4 class="fw-bold mb-0">Ürün Kategorileri</h4>
                    <p class="text-muted small mb-0">Kategori ekleme, listeleme ve stok sayıları özeti.</p>
                </div>
            </div>
        </header>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $kategori_adi = $_POST["kategori_adi"];
            $aciklama = $_POST["aciklama"];
            kategoriEkleme($kategori_adi, $aciklama);
        }

        ?>
        <div class="row g-4">
            <!-- Add Category Form Card -->
            <div class="col-12 col-lg-4">
                <div class="card custom-card border-0 p-4">
                    <h5 class="fw-bold mb-3">Yeni Kategori Oluştur</h5>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Kategori Adı</label>
                            <input name="kategori_adi" type="text" class="form-control" placeholder="örn: Mobilya" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Açıklama</label>
                            <textarea name="aciklama" class="form-control" rows="3" placeholder="Bu kategoriye ait kısa bir açıklama..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" style="background: var(--primary-gradient); border: none;">
                            <i class="bi bi-save me-1"></i> Kategoriyi Kaydet
                        </button>
                    </form>
                </div>
            </div>

            <!-- Categories List Table Card -->
            <div class="col-12 col-lg-8">
                <div class="card custom-card border-0 p-4">
                    <h5 class="fw-bold mb-3">Mevcut Kategoriler</h5>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>KATEGORİ ADI</th>
                                    <th>AÇIKLAMA</th>
                                    <th class="text-center">ÜRÜN ÇEŞİDİ</th>
                                    <th class="text-end">İŞLEMLER</th>
                                </tr>
                            </thead>
                            <?php $gelen_kategori = kategoriGetir(); ?>

                            <tbody>
                                <?php foreach ($gelen_kategori as $kategori): ?>
                                    <tr>
                                        <td><span class="fw-bold"><?php echo $kategori["kategori_adi"]; ?></span></td>
                                        <td><span class="text-muted small"><?php echo $kategori["aciklama"]; ?></span></td>
                                        <td class="text-center"><span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-2.5 py-1">42 Ürün</span></td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-secondary me-1" data-bs-toggle="modal" data-bs-target="#editCategoryModal<?php echo $kategori['id']; ?>" title="Düzenle"><i class="bi bi-pencil-fill"></i></button>
                                            <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal<?php echo $kategori['id']; ?>" title="Sil"><i class="bi bi-trash3-fill"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Edit Category Modal -->
    <?php foreach ($gelen_kategori as $kategoriler): ?>
        <div class="modal fade" id="editCategoryModal<?php echo $kategoriler['id']; ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0" style="border-radius: var(--card-border-radius);">
                    <div class="modal-header border-bottom-0 pb-0">
                        <h5 class="modal-title fw-bold">Kategori Düzenle</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">

                        <form action="../../functions/kategori_guncelle.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $kategoriler['id']; ?>">
                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Kategori Adı</label>
                                <input name="guncelleme_kategori_adi" type="text" class="form-control"  value="<?php echo $kategoriler["kategori_adi"]; ?>" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label small fw-semibold">Açıklama</label>
                                <textarea name="kategori_aciklama" class="form-control" rows="3" required><?php echo $kategoriler["aciklama"]; ?></textarea>
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

        <!-- Delete Category Modal -->
    ?>
        <div class="modal fade" id="deleteCategoryModal<?php echo $kategoriler['id']; ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0" style="border-radius: var(--card-border-radius);">
                    <div class="modal-header border-bottom-0 pb-0">
                        <h5 class="modal-title fw-bold text-danger">Kategoriyi Sil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-4"><strong><?php echo $kategoriler["kategori_adi"]; ?></strong> kategorisini silmek istediğinize emin misiniz? Bu işlem geri alınamaz.</p>
                        <form action="../../functions/kategori_sil.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $kategoriler['id']; ?>">
                            <div class="d-flex gap-2 justify-content-end">
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