<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Dealer Dashboard</title>
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
                        "title-md": ["18px", {"lineHeight": "24px", "fontWeight": "600"}],
                        "display-lg": ["36px", {"lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-sm": ["10px", {"lineHeight": "14px", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "headline-lg": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex flex-col md:flex-row font-body-lg text-body-lg">
<!-- TopNavBar (Mobile Only) -->
<header class="md:hidden flex justify-between items-center h-16 w-full px-margin-mobile bg-surface border-b border-outline-variant z-50 sticky top-0">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-2xl">local_shipping</span>
<span class="text-title-md font-title-md text-primary font-bold">LogiTrack B2B</span>
</div>
<div class="flex gap-4">
<button class="text-on-surface-variant hover:bg-surface-container-high p-2 rounded-lg transition-colors">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="text-on-surface-variant hover:bg-surface-container-high p-2 rounded-lg transition-colors">
<span class="material-symbols-outlined">help_outline</span>
</button>
<button class="text-on-surface-variant hover:bg-surface-container-high p-2 rounded-lg transition-colors">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</header>
<!-- SideNavBar (Desktop) -->
<aside class="hidden md:flex flex-col bg-surface-container-low border-r border-outline-variant h-screen w-64 fixed left-0 top-0 p-base z-40">
<div class="p-4 mb-6 border-b border-outline-variant pb-6 flex items-center gap-3">
<div class="w-10 h-10 bg-primary text-on-primary rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined fill">local_shipping</span>
</div>
<div>
<h1 class="text-title-md font-title-md text-primary">Logistics Hub</h1>
<p class="text-label-sm font-label-sm text-on-surface-variant">Terminal A-42</p>
</div>
</div>
<nav class="flex-1 space-y-1 px-2">
<a class="flex items-center gap-3 px-3 py-3 rounded-lg text-on-primary-fixed bg-primary-fixed font-bold scale-[0.98] transition-transform duration-100" href="#">
<span class="material-symbols-outlined fill">dashboard</span>
<span class="text-label-md font-label-md">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-all" href="#">
<span class="material-symbols-outlined">menu_book</span>
<span class="text-label-md font-label-md">Catalog</span>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-all" href="#">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="text-label-md font-label-md">Orders</span>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-all" href="#">
<span class="material-symbols-outlined">inventory_2</span>
<span class="text-label-md font-label-md">Inventory</span>
</a>
<a class="flex items-center gap-3 px-3 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-all" href="#">
<span class="material-symbols-outlined">assessment</span>
<span class="text-label-md font-label-md">Reports</span>
</a>
</nav>
<div class="px-4 py-4">
<button class="w-full bg-primary text-on-primary py-3 rounded-DEFAULT font-bold text-body-sm hover:opacity-90 transition-opacity flex items-center justify-center gap-2">
<span class="material-symbols-outlined">add</span>
                New Order
            </button>
</div>
<div class="mt-auto border-t border-outline-variant pt-4 px-2 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-all" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="text-label-md font-label-md">Settings</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-all" href="#">
<span class="material-symbols-outlined">contact_support</span>
<span class="text-label-md font-label-md">Support</span>
</a>
</div>
</aside>
<!-- Main Content Canvas -->
<main class="flex-1 md:ml-64 p-margin-mobile md:p-margin-desktop bg-surface min-h-screen">
<!-- Header / Welcome -->
<div class="mb-8 flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
<div>
<h2 class="text-headline-lg-mobile md:text-headline-lg font-headline-lg-mobile md:font-headline-lg text-primary">Dealer Dashboard</h2>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1">Overview of your operations and recent activity.</p>
</div>
<!-- Desktop Top Actions (replaces TopNavBar actions) -->
<div class="hidden md:flex items-center gap-4">
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 transform -translate-y-1/2 text-outline">search</span>
<input class="pl-10 pr-4 py-2 border border-outline-variant bg-surface-container-lowest rounded-DEFAULT text-body-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none w-64 transition-all" placeholder="Search orders, items..." type="text"/>
</div>
<button class="relative text-on-surface-variant hover:bg-surface-container-high p-2 rounded-lg transition-colors">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-1 right-1 w-2 h-2 bg-error rounded-full"></span>
</button>
<div class="w-10 h-10 rounded-full bg-surface-container-highest border border-outline-variant overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Close up professional headshot of a female logistics warehouse manager wearing a high visibility vest, brightly lit, corporate setting, modern clear focus" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsb8G113xaT8yb878jfy-Dv3aKIo2ppgP6qOKVB5vqWXcMqAr5WQSC5gt1W84boqhf_f024ATiuxP-hHnTFzrng1N52qWnafCqcL4ACtPyhDYTwBJlRzfoxczPKWVJmwGmSRX1H6PyiZfcfyERoAyDmEN1nG2cu6cYj8NBeI9AcFnigdGWh2ZsWGRstBB_u7_NUk9Dh1eBVwNV99jDtF7uCSN63YfEWFGVsiTYEi0EjZUFpTJmfsu5Xg"/>
</div>
</div>
</div>
<!-- KPI Summary Cards (Bento Grid Style) -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter mb-8">
<!-- Current Balance -->
<div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-lg hover:shadow-[0_2px_4px_rgba(15,23,42,0.05)] transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 bg-surface-container-low rounded-DEFAULT flex items-center justify-center text-primary">
<span class="material-symbols-outlined">account_balance_wallet</span>
</div>
<span class="text-label-md font-label-md text-secondary bg-secondary-fixed-dim px-2 py-1 rounded-DEFAULT">+12.5%</span>
</div>
<h3 class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider mb-1">Current Balance</h3>
<p class="text-display-lg font-display-lg text-primary">$45,280.00</p>
</div>
<!-- Pending Orders -->
<div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-lg hover:shadow-[0_2px_4px_rgba(15,23,42,0.05)] transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 bg-surface-container-low rounded-DEFAULT flex items-center justify-center text-primary">
<span class="material-symbols-outlined">pending_actions</span>
</div>
<span class="text-label-md font-label-md text-on-surface-variant bg-surface-variant px-2 py-1 rounded-DEFAULT">3 Urgent</span>
</div>
<h3 class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider mb-1">Pending Orders</h3>
<p class="text-display-lg font-display-lg text-primary">14</p>
</div>
<!-- Total Shipments -->
<div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-lg hover:shadow-[0_2px_4px_rgba(15,23,42,0.05)] transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 bg-surface-container-low rounded-DEFAULT flex items-center justify-center text-primary">
<span class="material-symbols-outlined">local_shipping</span>
</div>
<span class="text-label-md font-label-md text-secondary bg-secondary-fixed-dim px-2 py-1 rounded-DEFAULT">+8.2%</span>
</div>
<h3 class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider mb-1">Total Shipments (MTD)</h3>
<p class="text-display-lg font-display-lg text-primary">128</p>
</div>
<!-- Recent Notifications / Alerts -->
<div class="bg-tertiary-container border border-outline-variant p-6 rounded-lg relative overflow-hidden group hover:shadow-[0_2px_4px_rgba(15,23,42,0.05)] transition-shadow">
<div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9IiNmZmYiLz48L3N2Zz4=')]"></div>
<div class="relative z-10">
<div class="flex justify-between items-start mb-4">
<div class="w-12 h-12 bg-on-tertiary-container rounded-DEFAULT flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined">warning</span>
</div>
</div>
<h3 class="text-label-sm font-label-sm text-on-tertiary-container uppercase tracking-wider mb-1">System Alerts</h3>
<p class="text-title-md font-title-md text-on-primary mb-2">2 Items Low Stock</p>
<a class="text-label-md font-label-md text-tertiary-fixed-dim flex items-center gap-1 group-hover:underline" href="#">
                        Review Inventory <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
</a>
</div>
</div>
</div>
<!-- Main Content Area: Last 5 Orders Table & Quick Actions -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
<!-- Orders Table Section -->
<div class="lg:col-span-2 bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden flex flex-col">
<div class="p-6 border-b border-outline-variant flex justify-between items-center bg-surface-bright">
<h3 class="text-title-md font-title-md text-primary">Last 5 Orders</h3>
<button class="text-label-md font-label-md text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1 border border-outline-variant px-3 py-1.5 rounded-DEFAULT">
                        View All <span class="material-symbols-outlined text-[14px]">open_in_new</span>
</button>
</div>
<div class="overflow-x-auto flex-1">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant">
<th class="py-3 px-6 text-label-md font-label-md text-on-surface-variant uppercase">Order ID</th>
<th class="py-3 px-6 text-label-md font-label-md text-on-surface-variant uppercase">Date</th>
<th class="py-3 px-6 text-label-md font-label-md text-on-surface-variant uppercase">Destination</th>
<th class="py-3 px-6 text-label-md font-label-md text-on-surface-variant uppercase">Status</th>
<th class="py-3 px-6 text-label-md font-label-md text-on-surface-variant uppercase text-right">Amount</th>
</tr>
</thead>
<tbody class="text-body-sm font-body-sm">
<tr class="border-b border-outline-variant hover:bg-surface-container-high transition-colors">
<td class="py-3 px-6 font-label-md">#ORD-9082</td>
<td class="py-3 px-6 text-on-surface-variant">Oct 24, 2024</td>
<td class="py-3 px-6">Terminal C, Chicago</td>
<td class="py-3 px-6">
<span class="inline-flex items-center px-2 py-1 rounded-DEFAULT text-label-sm font-label-sm bg-surface-variant text-on-surface-variant">Processing</span>
</td>
<td class="py-3 px-6 text-right font-label-md">$1,240.00</td>
</tr>
<tr class="border-b border-outline-variant hover:bg-surface-container-high transition-colors bg-surface-bright">
<td class="py-3 px-6 font-label-md">#ORD-9081</td>
<td class="py-3 px-6 text-on-surface-variant">Oct 23, 2024</td>
<td class="py-3 px-6">Warehouse 1, Detroit</td>
<td class="py-3 px-6">
<span class="inline-flex items-center px-2 py-1 rounded-DEFAULT text-label-sm font-label-sm bg-secondary-fixed-dim text-on-secondary-fixed-variant">Shipped</span>
</td>
<td class="py-3 px-6 text-right font-label-md">$850.50</td>
</tr>
<tr class="border-b border-outline-variant hover:bg-surface-container-high transition-colors">
<td class="py-3 px-6 font-label-md">#ORD-9080</td>
<td class="py-3 px-6 text-on-surface-variant">Oct 21, 2024</td>
<td class="py-3 px-6">Retail Hub, Atlanta</td>
<td class="py-3 px-6">
<span class="inline-flex items-center px-2 py-1 rounded-DEFAULT text-label-sm font-label-sm bg-error-container text-on-error-container">Delayed</span>
</td>
<td class="py-3 px-6 text-right font-label-md">$3,100.25</td>
</tr>
<tr class="border-b border-outline-variant hover:bg-surface-container-high transition-colors bg-surface-bright">
<td class="py-3 px-6 font-label-md">#ORD-9079</td>
<td class="py-3 px-6 text-on-surface-variant">Oct 20, 2024</td>
<td class="py-3 px-6">Terminal A, New York</td>
<td class="py-3 px-6">
<span class="inline-flex items-center px-2 py-1 rounded-DEFAULT text-label-sm font-label-sm bg-surface-variant text-on-surface-variant">Delivered</span>
</td>
<td class="py-3 px-6 text-right font-label-md">$420.00</td>
</tr>
<tr class="hover:bg-surface-container-high transition-colors">
<td class="py-3 px-6 font-label-md">#ORD-9078</td>
<td class="py-3 px-6 text-on-surface-variant">Oct 18, 2024</td>
<td class="py-3 px-6">Logistics Center, Dallas</td>
<td class="py-3 px-6">
<span class="inline-flex items-center px-2 py-1 rounded-DEFAULT text-label-sm font-label-sm bg-surface-variant text-on-surface-variant">Delivered</span>
</td>
<td class="py-3 px-6 text-right font-label-md">$2,150.00</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Quick Actions / Mini Technical Card -->
<div class="flex flex-col gap-6">
<!-- Barcode / Scanner Card -->
<div class="bg-surface-container-lowest border border-outline-variant p-6 rounded-lg text-center flex flex-col items-center justify-center">
<span class="material-symbols-outlined text-4xl text-on-surface-variant mb-4">qr_code_scanner</span>
<h4 class="text-title-md font-title-md text-primary mb-2">Quick Scan Entry</h4>
<p class="text-body-sm font-body-sm text-on-surface-variant mb-6">Scan a barcode to instantly receive inventory or update order status.</p>
<button class="w-full bg-primary text-on-primary py-3 rounded-DEFAULT font-label-md uppercase tracking-wider hover:bg-surface-tint transition-colors">
                        Activate Scanner
                    </button>
<div class="mt-4 pt-4 border-t border-outline-variant w-full">
<p class="text-label-sm font-label-sm text-on-surface-variant">MANUAL ENTRY ID</p>
<p class="text-label-md font-label-md text-primary mt-1">TERM-A42-OP</p>
</div>
</div>
<!-- Logistics Map Placeholder -->
<div class="bg-surface-container-lowest border border-outline-variant p-1 rounded-lg flex-1 min-h-[200px] relative overflow-hidden group">
<img class="w-full h-full object-cover rounded-DEFAULT opacity-80 group-hover:opacity-100 transition-opacity" data-alt="A clean, minimalist styled map visualization showing logistics routes across the United States. The map uses a light mode aesthetic with white and light gray landmasses, very subtle topography, and distinct dark charcoal lines indicating shipping routes. Bright green dots signify active terminal nodes. Professional corporate data visualization style." data-location="United States" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCstl22k43yeKlFIn-mTeO__m0OkWZv8TXgWerXPF974XEAv3ZcyFNkgNts0IVYdRLhQkDoZ8sCNUYklxmNvW7WCG0Tij4_n_Cjfl0rZ_gwTaa1s_ulWpXUQrlwYpdpJLesBSI5iiY3xaF2RLTXbkwn8C3zeDwtsnN84ZKHLDSuQYGiE2vDBosezPxpvd-xNIO9vfgGUAG4y0TxwAraShAFYB9tHk2WuQ2Y07zhMcrUfGzNkW-w3f3dww"/>
<div class="absolute bottom-4 left-4 bg-surface-container-lowest/90 backdrop-blur-sm px-3 py-2 border border-outline-variant rounded-DEFAULT shadow-sm">
<p class="text-label-sm font-label-sm text-primary flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-secondary"></span> Active Routes: 12</p>
</div>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="md:ml-64 flex justify-between items-center py-4 px-margin-desktop w-full mt-auto bg-surface-container-highest border-t border-outline-variant z-10 relative">
<p class="text-label-sm font-label-sm text-on-surface-variant">© 2024 LogiTrack Systems Inc. All rights reserved.</p>
<div class="flex gap-4">
<a class="text-label-sm font-label-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Knowledge Base</a>
<a class="text-label-sm font-label-sm text-on-surface-variant hover:text-primary transition-colors" href="#">System Status</a>
<a class="text-label-sm font-label-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Direct Support</a>
<a class="text-label-sm font-label-sm text-on-surface-variant hover:text-primary transition-colors" href="#">API Docs</a>
</div>
</footer>
</body></html>