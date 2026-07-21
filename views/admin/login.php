<?php include("../../functions/login.php") ?>
<!DOCTYPE html>
<html lang="tr" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap - StokTakip Pro</title>
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
            --card-border-radius: 20px;
        }

        body {
            font-family: var(--font-family);
            background: radial-gradient(circle at top right, #e0e7ff 0%, #f8fafc 60%);
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            transition: background 0.3s, color 0.3s;
        }

        [data-bs-theme="dark"] body {
            background: radial-gradient(circle at top right, #1e1b4b 0%, #0f172a 60%);
            color: #f1f5f9;
        }

        /* Glassmorphism Login Card */
        .login-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: var(--card-border-radius);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            width: 100%;
            max-width: 440px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        [data-bs-theme="dark"] .login-card {
            background: rgba(30, 41, 59, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
        }

        .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
            background: var(--primary-gradient);
            color: white;
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.3);
        }

        .form-control {
            border-radius: 10px;
            padding: 0.75rem 1rem;
            border: 1px solid #cbd5e1;
            background-color: rgba(255, 255, 255, 0.9);
        }

        [data-bs-theme="dark"] .form-control {
            border-color: #475569;
            background-color: rgba(15, 23, 42, 0.6);
            color: #f1f5f9;
        }

        .form-control:focus {
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.15);
            border-color: #6366f1;
        }

        .btn-login {
            background: var(--primary-gradient);
            border: none;
            border-radius: 10px;
            padding: 0.75rem;
            font-weight: 600;
            color: white;
            transition: all 0.2s;
        }

        .btn-login:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.3);
        }

        /* Float Dark/Light Switch */
        .theme-toggle-btn {
            position: fixed;
            top: 1.5rem;
            right: 1.5rem;
            background: white;
            border: 1px solid rgba(0, 0, 0, 0.05);
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            color: #64748b;
            transition: all 0.2s;
        }

        [data-bs-theme="dark"] .theme-toggle-btn {
            background: #1e293b;
            border-color: rgba(255, 255, 255, 0.05);
            color: #e2e8f0;
        }
    </style>
</head>
<body>

    <!-- Floating Theme Switcher -->
    <button class="theme-toggle-btn" id="themeToggle" aria-label="Karanlık Mod Değiştirici">
        <i class="bi bi-moon-stars-fill"></i>
    </button>

    <!-- Login Container -->
    <div class="login-card p-4 p-md-5">
        <div class="text-center mb-4">
            <div class="d-flex justify-content-center mb-3">
                <div class="icon-box">
                    <i class="bi bi-box-seam-fill"></i>
                </div>
            </div>
            <h4 class="fw-bold mb-1">StokTakip Pro</h4>
            <p class="text-muted small">Lütfen yönetici hesabı bilgilerinizi giriniz.</p>
        </div>

        <?php if($_SERVER["REQUEST_METHOD"] === "POST"){
               $email =  $_POST["email"];
               $sifre = $_POST["sifre"];
               login($email,$sifre);
               
        } 
        ?>

        <form action="" method="POST" class="needs-validation" novalidate>
            <!-- Email Input -->
            <div class="mb-3">
                <label for="email" class="form-label small fw-semibold">E-posta Adresi</label>
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-end-0 text-muted"><i class="bi bi-envelope"></i></span>
                    <input name="email" type="email" class="form-control border-start-0" id="email" placeholder="isim@sirket.com" required>
                    <div class="invalid-feedback">Geçerli bir e-posta adresi yazınız.</div>
                </div>
            </div>

            <!-- Password Input -->
            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <label for="password" class="form-label small fw-semibold mb-0">Şifre</label>
                    <a href="#" class="small text-decoration-none text-primary fw-medium">Şifremi Unuttum</a>
                </div>
                <div class="input-group">
                    <span class="input-group-text bg-transparent border-end-0 text-muted"><i class="bi bi-shield-lock"></i></span>
                    <input name="sifre" type="password" class="form-control border-start-0 border-end-0" id="password" placeholder="••••••••" required>
                    <button class="btn btn-outline-secondary border-start-0 text-muted" type="button" id="togglePassword">
                        <i class="bi bi-eye"></i>
                    </button>
                    <div class="invalid-feedback">Lütfen şifrenizi giriniz.</div>
                </div>
            </div>

            <!-- Remember Me -->
            <div class="mb-4 d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label small" for="rememberMe">Beni Hatırla</label>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-login w-100 mb-3">Sistemde Oturum Aç</button>
        </form>

        <div class="text-center">
            <span class="text-muted small">Hesabınız yok mu?</span>
            <a href="#" class="small text-decoration-none fw-semibold ms-1">İletişime Geçin</a>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Form Validation Logic (Bootstrap Standard)
        (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()

        // Toggle Password Visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            togglePassword.querySelector('i').className = type === 'password' ? 'bi bi-eye' : 'bi bi-eye-slash';
        });

        // Theme switcher
        document.getElementById('themeToggle').addEventListener('click', () => {
            const html = document.documentElement;
            const newTheme = html.getAttribute('data-bs-theme') === 'light' ? 'dark' : 'light';
            html.setAttribute('data-bs-theme', newTheme);
            const icon = document.getElementById('themeToggle').querySelector('i');
            icon.className = newTheme === 'dark' ? 'bi bi-sun-fill' : 'bi bi-moon-stars-fill';
        });
    </script>
</body>
</html>
