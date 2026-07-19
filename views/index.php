<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LogiTrack B2B Platform</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#000000",
                        "on-primary-container": "#7c839b",
                        "inverse-primary": "#bec6e0",
                        "outline": "#76777d",
                        "on-primary": "#ffffff",
                        "tertiary-fixed-dim": "#b9c7e0",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-fixed-variant": "#3f465c",
                        "inverse-surface": "#2d3133",
                        "surface-tint": "#565e74",
                        "surface-container-high": "#e6e8ea",
                        "tertiary-container": "#0d1c2f",
                        "tertiary": "#000000",
                        "secondary": "#006c4a",
                        "secondary-fixed-dim": "#68dba9",
                        "surface": "#f7f9fb",
                        "primary-fixed": "#dae2fd",
                        "on-surface": "#191c1e",
                        "on-secondary-container": "#00714e",
                        "surface-container": "#eceef0",
                        "on-tertiary": "#ffffff",
                        "surface-container-low": "#f2f4f6",
                        "on-secondary": "#ffffff",
                        "surface-variant": "#e0e3e5",
                        "on-secondary-fixed-variant": "#005137",
                        "secondary-fixed": "#85f8c4",
                        "on-background": "#191c1e",
                        "on-primary-fixed": "#131b2e",
                        "on-secondary-fixed": "#002114",
                        "tertiary-fixed": "#d5e3fd",
                        "on-tertiary-container": "#76859b",
                        "secondary-container": "#82f5c1",
                        "outline-variant": "#c6c6cd",
                        "on-error-container": "#93000a",
                        "background": "#f7f9fb",
                        "primary-container": "#131b2e",
                        "surface-container-highest": "#e0e3e5",
                        "on-error": "#ffffff",
                        "primary-fixed-dim": "#bec6e0",
                        "surface-dim": "#d8dadc",
                        "error": "#ba1a1a",
                        "surface-bright": "#f7f9fb",
                        "on-tertiary-fixed-variant": "#3a485c",
                        "on-surface-variant": "#45464d",
                        "error-container": "#ffdad6",
                        "inverse-on-surface": "#eff1f3",
                        "on-tertiary-fixed": "#0d1c2f"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "container-max": "1440px",
                        "gutter": "24px",
                        "base": "4px",
                        "margin-desktop": "32px",
                        "margin-mobile": "16px"
                    },
                    "fontFamily": {
                        "title-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "label-sm": ["JetBrains Mono"],
                        "body-lg": ["Inter"],
                        "label-md": ["JetBrains Mono"],
                        "headline-lg-mobile": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-sm": ["Inter"]
                    },
                    "fontSize": {
                        "title-md": ["18px", { "lineHeight": "24px", "fontWeight": "600" }],
                        "display-lg": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-sm": ["10px", { "lineHeight": "14px", "letterSpacing": "0.05em", "fontWeight": "500" }],
                        "body-lg": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "label-md": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "headline-lg": ["28px", { "lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; background-color: #f7f9fb; color: #191c1e; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .material-symbols-outlined[data-weight="fill"] { font-variation-settings: 'FILL' 1; }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col antialiased">
<!-- TopNavBar: Standard suppression logic applies; this is a public landing page, not an app destination. But wait, it's a public landing page. Usually they have a marketing nav. The prompt implies a public landing page, but the shared components has TopNavBar with search, notifications. This is a linear/marketing page, so I should omit the app nav shell or create a marketing specific one. I'll omit the app shell navs as per instructions "Automatic Suppression: You MUST exclude the navigation shell if the page intent is: Linear/Transactional: Login, Sign-up, Onboarding, Checkout, or 'Success/Confirmation' splash screens" -> a landing page is arguably a funnel. However, let's create a minimal marketing header that doesn't conflict. I will not use the app's SideNav. -->
<header class="w-full h-16 flex justify-between items-center px-margin-mobile md:px-margin-desktop bg-surface-container-lowest border-b border-outline-variant">
<div class="font-title-md text-title-md text-primary font-bold">LogiTrack B2B</div>
<nav class="hidden md:flex gap-gutter">
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Platform</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Solutions</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Resources</a>
</nav>
<button class="bg-primary text-on-primary font-body-sm text-body-sm px-6 py-2 rounded min-h-[44px] hover:bg-surface-tint transition-colors">Request Demo</button>
</header>
<main class="flex-grow flex flex-col items-center w-full max-w-container-max mx-auto">
<!-- Hero Section -->
<section class="w-full px-margin-mobile md:px-margin-desktop py-16 md:py-32 flex flex-col md:flex-row items-center gap-gutter">
<div class="flex-1 flex flex-col gap-6 items-start">
<div class="bg-surface-container border border-outline-variant rounded-full px-4 py-1 flex items-center gap-2">
<span class="material-symbols-outlined text-secondary text-[16px]">new_releases</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">LogiTrack 2.0 is now live</span>
</div>
<h1 class="font-display-lg text-display-lg text-primary max-w-2xl">
                    Streamline Your B2B Operations with Precision.
                </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                    The modern logistics hub designed for high-stakes environments. Real-time tracking, unified dealer management, and granular inventory control in one flat, reliable interface.
                </p>
<div class="flex flex-col sm:flex-row gap-4 mt-4 w-full sm:w-auto">
<button class="bg-primary text-on-primary font-title-md text-title-md px-8 py-3 rounded min-h-[44px] hover:bg-surface-tint transition-colors w-full sm:w-auto text-center">
                        Request Demo
                    </button>
<button class="border border-outline bg-surface-container-lowest text-primary font-title-md text-title-md px-8 py-3 rounded min-h-[44px] hover:bg-surface-container-high transition-colors w-full sm:w-auto text-center">
                        Explore Features
                    </button>
</div>
</div>
<div class="flex-1 w-full aspect-video md:aspect-[4/3] rounded-lg border border-outline-variant overflow-hidden bg-surface-container relative shadow-sm">
<img class="w-full h-full object-cover" data-alt="A sleek, modern logistics dashboard displayed on a high-resolution monitor in a bright, minimalist office setting. The dashboard features crisp, data-dense tables with sharp typography, subtle tonal layering in slate grays, and precise geometric lines. The lighting is clean and cool, emphasizing efficiency and operational reliability in a B2B environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1bAoDfOPL_GqoHoM8ZhtYH0dU77RPS989h1OoeYwIvLQfk8Wh65MV5k6nkvgfjWf6LGL-TbQ0R3TjDTnwYU7H_8PW4Mvxfqd2YluTML6zuJxnkIUAva7cilU3s431cO-IG1r8wyc4o2pKNsLj-52P7FY6kvA_IFGro0a2hHjeg2WBp8mMz1BPCqy_MsZYC52mMWgEXlBZ-pkuMtygTqyVuKaE-PKLXiatiyBK8qpL8DJBtykZ0cT_6g"/>
<!-- Overlay to simulate a bit of the UI vibe -->
<div class="absolute inset-0 bg-gradient-to-tr from-surface/20 to-transparent mix-blend-overlay pointer-events-none"></div>
</div>
</section>
<!-- Trust Indicators -->
<section class="w-full px-margin-mobile md:px-margin-desktop py-12 border-y border-outline-variant bg-surface-container-low flex flex-col items-center gap-8">
<h2 class="font-label-sm text-label-sm text-on-surface-variant uppercase text-center">Trusted by Industry Leaders</h2>
<div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 grayscale">
<!-- Abstract Logos simulated with Material Icons -->
<div class="flex items-center gap-2"><span class="material-symbols-outlined text-[32px]">local_shipping</span><span class="font-title-md text-title-md font-bold">TransGlobal</span></div>
<div class="flex items-center gap-2"><span class="material-symbols-outlined text-[32px]">warehouse</span><span class="font-title-md text-title-md font-bold">Apex Storage</span></div>
<div class="flex items-center gap-2"><span class="material-symbols-outlined text-[32px]">precision_manufacturing</span><span class="font-title-md text-title-md font-bold">Nexus Ind.</span></div>
<div class="flex items-center gap-2"><span class="material-symbols-outlined text-[32px]">flight_takeoff</span><span class="font-title-md text-title-md font-bold">AeroFreight</span></div>
</div>
</section>
<!-- Features Grid (Bento style) -->
<section class="w-full px-margin-mobile md:px-margin-desktop py-24 flex flex-col gap-12 max-w-6xl mx-auto">
<div class="flex flex-col items-center gap-4 text-center max-w-2xl mx-auto">
<h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary">Engineered for Operational Reliability</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">Modularize complex workflows with our function-first architecture designed specifically for warehouse managers and logistics coordinators.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Feature 1: Large -->
<div class="md:col-span-2 bg-surface-container-lowest border border-outline-variant rounded-xl p-8 flex flex-col gap-4 hover:shadow-[0_2px_4px_rgba(15,23,42,0.05)] transition-shadow">
<div class="w-12 h-12 rounded bg-surface-container flex items-center justify-center text-primary mb-2">
<span class="material-symbols-outlined">inventory_2</span>
</div>
<h3 class="font-title-md text-title-md text-primary">Granular Inventory Tracking</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-md">Maintain perfect visibility across all terminal locations. Utilize barcode scanning and real-time status chips to monitor goods from receiving to dispatch.</p>
<div class="mt-auto pt-6 w-full rounded border border-outline-variant bg-surface p-4 flex flex-col gap-2">
<div class="flex justify-between items-center pb-2 border-b border-surface-dim">
<span class="font-label-md text-label-md text-on-surface-variant uppercase">SKU</span>
<span class="font-label-md text-label-md text-on-surface-variant uppercase">Status</span>
</div>
<div class="flex justify-between items-center py-1">
<span class="font-label-md text-label-md text-primary">LTR-492-X</span>
<span class="bg-secondary-container text-on-secondary-container px-2 py-0.5 rounded font-label-sm text-label-sm">In Stock</span>
</div>
<div class="flex justify-between items-center py-1">
<span class="font-label-md text-label-md text-primary">LTR-881-Y</span>
<span class="bg-error-container text-on-error-container px-2 py-0.5 rounded font-label-sm text-label-sm">Low Stock</span>
</div>
</div>
</div>
<!-- Feature 2: Small -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-8 flex flex-col gap-4 hover:shadow-[0_2px_4px_rgba(15,23,42,0.05)] transition-shadow">
<div class="w-12 h-12 rounded bg-surface-container flex items-center justify-center text-primary mb-2">
<span class="material-symbols-outlined">groups</span>
</div>
<h3 class="font-title-md text-title-md text-primary">Unified Dealer Management</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Centralize communications, orders, and contract details for all B2B partners in one secure location.</p>
</div>
<!-- Feature 3: Small -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-8 flex flex-col gap-4 hover:shadow-[0_2px_4px_rgba(15,23,42,0.05)] transition-shadow">
<div class="w-12 h-12 rounded bg-surface-container flex items-center justify-center text-primary mb-2">
<span class="material-symbols-outlined">assessment</span>
</div>
<h3 class="font-title-md text-title-md text-primary">Real-Time Reporting</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Generate dense, actionable data tables instantly. Export metrics without performance lag, ensuring your terminal operates at peak efficiency.</p>
</div>
<!-- Feature 4: Large -->
<div class="md:col-span-2 bg-surface-container-lowest border border-outline-variant rounded-xl p-0 flex flex-col md:flex-row overflow-hidden hover:shadow-[0_2px_4px_rgba(15,23,42,0.05)] transition-shadow">
<div class="p-8 flex flex-col gap-4 justify-center md:w-1/2">
<div class="w-12 h-12 rounded bg-surface-container flex items-center justify-center text-primary mb-2">
<span class="material-symbols-outlined">security</span>
</div>
<h3 class="font-title-md text-title-md text-primary">Enterprise-Grade Security</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Built on a foundation of zero-trust architecture. Role-based access controls and immutable audit logs keep your logistical data protected against internal and external threats.</p>
</div>
<div class="md:w-1/2 bg-surface border-l border-outline-variant p-8 flex items-center justify-center">
<img class="w-full h-full object-cover rounded-lg border border-outline-variant" data-alt="A macro shot of a sleek, minimalist server rack or security token in a cool, corporate environment. The surface is brushed aluminum with sharp, precise edges. A subtle, high-contrast glow indicates active data transfer. The composition is highly structured, emphasizing stability, precision, and enterprise-grade reliability in a stark, light-mode palette." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJ3dz3I72CmpyQPQlXKR4mRG_Bvu7VWXENvP3S3Z8mcdMrAvTYSd8yR6mTjw0t0pYzJELtcJhOW-2ERDgJvXdCkWfLmI384Na05cM_iUJwRGGnlwAaeItW7C8JNu8XPS_DYra0oD_fU2-MgmOoZBubXLpqgBTxdCRBfydNAf_jX6xjliqLUROBkBwrxs6tot0MKDt8b-ULchlkGbodQaGIVRthkwQHaWyti0yPpNC_y8KyO4wr0HjwBQ"/>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="w-full px-margin-mobile md:px-margin-desktop py-24 bg-surface-container border-y border-outline-variant flex flex-col items-center justify-center text-center gap-6">
<h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary max-w-2xl">Ready to optimize your terminal?</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">Join leading logistics providers who rely on LogiTrack to manage complex B2B operations smoothly and securely.</p>
<button class="mt-4 bg-primary text-on-primary font-title-md text-title-md px-8 py-3 rounded min-h-[44px] hover:bg-surface-tint transition-colors">
                Request a Personalized Demo
            </button>
</section>
</main>
<!-- Footer Component from JSON -->
<footer class="flex justify-between items-center py-4 px-margin-desktop w-full mt-auto bg-surface-container-highest dark:bg-inverse-surface border-t border-outline-variant dark:border-outline">
<div class="font-label-sm text-label-sm text-on-surface-variant dark:text-surface-variant">© 2024 LogiTrack Systems Inc. All rights reserved.</div>
<div class="flex gap-4">
<a class="font-label-sm text-label-sm text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-inverse-primary transition-colors" href="#">Knowledge Base</a>
<a class="font-label-sm text-label-sm text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-inverse-primary transition-colors" href="#">System Status</a>
<a class="font-label-sm text-label-sm text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-inverse-primary transition-colors" href="#">Direct Support</a>
<a class="font-label-sm text-label-sm text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-inverse-primary transition-colors" href="#">API Docs</a>
</div>
</footer>
</body></html>