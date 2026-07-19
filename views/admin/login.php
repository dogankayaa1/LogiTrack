

<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Login | LogiTrack</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "primary-container": "#131b2e",
                    "surface-dim": "#d8dadc",
                    "on-secondary-fixed": "#002114",
                    "surface": "#f7f9fb",
                    "on-tertiary-container": "#76859b",
                    "on-tertiary": "#ffffff",
                    "on-error-container": "#93000a",
                    "surface-tint": "#565e74",
                    "on-primary-container": "#7c839b",
                    "surface-container": "#eceef0",
                    "outline": "#76777d",
                    "inverse-primary": "#bec6e0",
                    "tertiary": "#000000",
                    "on-secondary-container": "#00714e",
                    "on-primary-fixed": "#131b2e",
                    "on-background": "#191c1e",
                    "inverse-surface": "#2d3133",
                    "on-primary-fixed-variant": "#3f465c",
                    "primary": "#000000",
                    "on-tertiary-fixed": "#0d1c2f",
                    "secondary-fixed": "#85f8c4",
                    "on-secondary-fixed-variant": "#005137",
                    "on-secondary": "#ffffff",
                    "on-error": "#ffffff",
                    "outline-variant": "#c6c6cd",
                    "tertiary-fixed": "#d5e3fd",
                    "surface-variant": "#e0e3e5",
                    "primary-fixed": "#dae2fd",
                    "tertiary-container": "#0d1c2f",
                    "on-surface-variant": "#45464d",
                    "on-surface": "#191c1e",
                    "background": "#f7f9fb",
                    "on-primary": "#ffffff",
                    "secondary": "#006c4a",
                    "primary-fixed-dim": "#bec6e0",
                    "surface-container-high": "#e6e8ea",
                    "surface-container-highest": "#e0e3e5",
                    "inverse-on-surface": "#eff1f3",
                    "error-container": "#ffdad6",
                    "surface-container-lowest": "#ffffff",
                    "error": "#ba1a1a",
                    "secondary-container": "#82f5c1",
                    "surface-bright": "#f7f9fb",
                    "secondary-fixed-dim": "#68dba9",
                    "on-tertiary-fixed-variant": "#3a485c",
                    "tertiary-fixed-dim": "#b9c7e0",
                    "surface-container-low": "#f2f4f6"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "container-max": "1440px",
                    "base": "4px",
                    "margin-desktop": "32px",
                    "margin-mobile": "16px",
                    "gutter": "24px"
            },
            "fontFamily": {
                    "headline-lg": ["Inter"],
                    "body-sm": ["Inter"],
                    "label-sm": ["JetBrains Mono"],
                    "label-md": ["JetBrains Mono"],
                    "display-lg": ["Inter"],
                    "headline-lg-mobile": ["Inter"],
                    "title-md": ["Inter"],
                    "body-lg": ["Inter"]
            },
            "fontSize": {
                    "headline-lg": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "label-sm": ["10px", {"lineHeight": "14px", "letterSpacing": "0.05em", "fontWeight": "500"}],
                    "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500"}],
                    "display-lg": ["36px", {"lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "title-md": ["18px", {"lineHeight": "24px", "fontWeight": "600"}],
                    "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            background-image: radial-gradient(circle at 2px 2px, rgba(0,0,0,0.05) 1px, transparent 0);
            background-size: 32px 32px;
        }
    </style>
</head>
<body class="bg-surface-container-low min-h-screen flex flex-col font-body-lg text-on-surface">
<!-- Top Navigation Bar -->
<header class="bg-surface dark:bg-surface-container-low border-b border-outline-variant dark:border-outline flex justify-between items-center w-full px-margin-desktop h-16 fixed top-0 z-50">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary" data-icon="local_shipping">local_shipping</span>
<h1 class="font-headline-lg text-headline-lg font-bold text-primary dark:text-primary-fixed">LogiTrack</h1>
</div>
<div class="flex items-center gap-4">
<button class="material-symbols-outlined p-2 text-on-surface-variant hover:bg-surface-container-high transition-colors cursor-pointer" data-icon="language">language</button>
<button class="material-symbols-outlined p-2 text-on-surface-variant hover:bg-surface-container-high transition-colors cursor-pointer" data-icon="help_outline">help_outline</button>
</div>
</header>

<!-- Main Content Canvas -->
<main class="flex-grow flex items-center justify-center pt-16 pb-8 px-4 relative overflow-hidden">
<!-- Atmospheric Background Element -->
<div class="absolute -top-24 -right-24 opacity-5 pointer-events-none">
<span class="material-symbols-outlined text-[400px]" data-icon="precision_manufacturing">precision_manufacturing</span>
</div>
<!-- Login Card -->
<div class="w-full max-w-[440px] bg-surface-container-lowest border border-outline-variant rounded-lg p-10 shadow-sm relative z-10 transition-all duration-300 hover:shadow-md">
<!-- Header Section -->
<div class="mb-8">
<div class="flex items-center justify-center mb-6">
<div class="w-12 h-12 bg-primary flex items-center justify-center rounded-lg">
<span class="material-symbols-outlined text-on-primary text-3xl" data-icon="admin_panel_settings">admin_panel_settings</span>
</div>
</div>
<h2 class="font-headline-lg text-headline-lg text-center text-primary mb-2">Admin Login</h2>
<p class="font-body-sm text-body-sm text-center text-on-surface-variant">Access the logistics operational command center.</p>
</div>
<!-- Form Section -->
<form action="" class="space-y-6" method="POST">
<!-- Email Field -->
<div>
<label class="font-label-md text-label-md block mb-2 text-on-surface-variant" for="email">WORK EMAIL</label>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-on-surface-variant text-xl transition-colors group-focus-within:text-primary" data-icon="alternate_email">alternate_email</span>
</div>
<input class="w-full h-12 pl-12 pr-4 bg-surface-bright border border-outline-variant rounded-lg font-body-lg text-body-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-surface-dim" id="email" name="email" placeholder="admin@logitrack.com" required="" type="email"/>
</div>
</div>
<!-- Password Field -->
<div>
<div class="flex justify-between items-center mb-2">
<label class="font-label-md text-label-md text-on-surface-variant" for="password">PASSWORD</label>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Forgot Password?</a>
</div>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-on-surface-variant text-xl transition-colors group-focus-within:text-primary" data-icon="lock">lock</span>
</div>
<input class="w-full h-12 pl-12 pr-12 bg-surface-bright border border-outline-variant rounded-lg font-body-lg text-body-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all placeholder:text-surface-dim" id="password" name="sifre" placeholder="••••••••" required="" type="password"/>
<button class="absolute inset-y-0 right-0 pr-4 flex items-center text-on-surface-variant hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined text-xl" data-icon="visibility">visibility</span>
</button>
</div>
</div>
<!-- Remember Me -->
<div class="flex items-center">
<input class="w-4 h-4 text-primary bg-surface border-outline-variant rounded focus:ring-primary focus:ring-offset-0" id="remember" name="remember" type="checkbox"/>
<label class="ml-2 font-body-sm text-body-sm text-on-surface-variant" for="remember">Remember this device for 30 days</label>
</div>
<!-- Action Button -->
<button class="w-full h-12 bg-primary text-on-primary font-title-md text-title-md rounded-lg flex items-center justify-center gap-2 hover:bg-opacity-90 active:scale-[0.98] transition-all cursor-pointer shadow-sm" type="submit">
<span>Sign In</span>
<span class="material-symbols-outlined text-xl" data-icon="arrow_forward">arrow_forward</span>
</button>
</form>
<?php
 require_once("../../functions/admin/login.php");

 if($_SERVER["REQUEST_METHOD"] === "POST"){
    $kullanici_adi =$_POST["email"];
    $sifre =$_POST["sifre"];
    login($kullanici_adi,$sifre);
 }
 ?>
<!-- Bottom Information -->
<div class="mt-8 pt-8 border-t border-outline-variant">
<div class="flex items-center justify-center gap-3 bg-surface-container p-3 rounded-lg">
<span class="material-symbols-outlined text-secondary" data-icon="check_circle">check_circle</span>
<p class="font-label-md text-label-md text-on-secondary-container">System fully operational</p>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-surface-container-low dark:bg-surface-container-lowest border-t border-outline-variant dark:border-outline py-8">
<div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-desktop max-w-container-max mx-auto gap-4">
<div class="flex items-center gap-4 order-2 md:order-1">
<p class="font-label-md text-label-md text-on-surface-variant">© 2024 LogiTrack Operational Systems. All rights reserved.</p>
</div>
<div class="flex flex-wrap justify-center gap-x-6 gap-y-2 order-1 md:order-2">
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed transition-colors cursor-pointer" href="#">Privacy Policy</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed transition-colors cursor-pointer" href="#">Terms of Service</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed transition-colors cursor-pointer" href="#">System Status</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed transition-colors cursor-pointer" href="#">Security</a>
</div>
</div>
</footer>

</body>
</html>