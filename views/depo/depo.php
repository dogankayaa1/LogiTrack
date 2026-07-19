<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LogiTrack B2B - Inventory</title>
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
        .icon-fill {
            font-variation-settings: 'FILL' 1;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-sm min-h-screen flex antialiased">
<!-- SideNavBar (Web) -->
<nav class="hidden md:flex fixed left-0 top-0 h-full flex-col p-base w-64 bg-surface-container-low dark:bg-surface-container-lowest border-r border-outline-variant dark:border-outline z-20">
<div class="px-4 py-6 flex items-center gap-3">
<div class="w-10 h-10 rounded bg-primary text-on-primary flex items-center justify-center font-bold">L</div>
<div>
<h1 class="text-headline-lg font-headline-lg text-primary dark:text-inverse-primary">Logistics Hub</h1>
<p class="text-label-sm font-label-sm text-on-surface-variant">Terminal A-42</p>
</div>
</div>
<button class="mx-4 my-4 bg-primary text-on-primary h-11 rounded font-title-md text-title-md flex items-center justify-center gap-2 hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined">add</span>
            New Order
        </button>
<div class="flex-1 overflow-y-auto py-2">
<ul class="space-y-1 px-2 text-label-md font-label-md">
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded text-on-surface-variant dark:text-surface-variant hover:bg-surface-container-high dark:hover:bg-surface-container-lowest transition-all" href="#">
<span class="material-symbols-outlined">dashboard</span>
                        Dashboard
                    </a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded text-on-surface-variant dark:text-surface-variant hover:bg-surface-container-high dark:hover:bg-surface-container-lowest transition-all" href="#">
<span class="material-symbols-outlined">menu_book</span>
                        Catalog
                    </a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded text-on-surface-variant dark:text-surface-variant hover:bg-surface-container-high dark:hover:bg-surface-container-lowest transition-all" href="#">
<span class="material-symbols-outlined">shopping_cart</span>
                        Orders
                    </a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded text-on-primary-fixed bg-primary-fixed dark:bg-primary-container dark:text-on-primary-fixed-variant font-bold scale-[0.98] transition-transform duration-100" href="#">
<span class="material-symbols-outlined icon-fill">inventory_2</span>
                        Inventory
                    </a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded text-on-surface-variant dark:text-surface-variant hover:bg-surface-container-high dark:hover:bg-surface-container-lowest transition-all" href="#">
<span class="material-symbols-outlined">assessment</span>
                        Reports
                    </a>
</li>
</ul>
</div>
<div class="mt-auto border-t border-outline-variant pt-2 pb-4">
<ul class="space-y-1 px-2 text-label-md font-label-md">
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded text-on-surface-variant dark:text-surface-variant hover:bg-surface-container-high transition-all" href="#">
<span class="material-symbols-outlined">settings</span>
                        Settings
                    </a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded text-on-surface-variant dark:text-surface-variant hover:bg-surface-container-high transition-all" href="#">
<span class="material-symbols-outlined">contact_support</span>
                        Support
                    </a>
</li>
</ul>
</div>
</nav>
<!-- Main Content Wrapper -->
<div class="flex-1 flex flex-col md:ml-64 w-full min-h-screen relative">
<!-- TopNavBar -->
<header class="flex justify-between items-center h-16 w-full px-margin-mobile md:px-margin-desktop bg-surface dark:bg-inverse-surface border-b border-outline-variant dark:border-outline z-10 sticky top-0">
<div class="flex items-center gap-4 flex-1">
<button class="md:hidden text-on-surface-variant">
<span class="material-symbols-outlined">menu</span>
</button>
<h2 class="text-title-md font-title-md font-bold text-primary dark:text-inverse-primary md:hidden">LogiTrack B2B</h2>
<!-- Search Bar -->
<div class="hidden md:flex relative max-w-md w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface-container rounded border border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-body-sm font-body-sm text-on-surface transition-all" placeholder="Search inventory, SKUs..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="text-on-surface-variant hover:bg-surface-container-high p-2 rounded-full transition-colors hidden md:block">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="text-on-surface-variant hover:bg-surface-container-high p-2 rounded-full transition-colors hidden md:block">
<span class="material-symbols-outlined">help_outline</span>
</button>
<div class="w-8 h-8 rounded-full bg-tertiary-container overflow-hidden border border-outline-variant">
<img alt="Warehouse Manager Profile" class="w-full h-full object-cover" data-alt="A professional headshot of a logistics manager in a brightly lit, modern industrial setting. The person is wearing a high-visibility safety vest over a neat collared shirt. The background is slightly blurred showing warehouse racking to emphasize the corporate, high-end industrial environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgoMcl5L-U9tgVGPngG3pVjpT2MHfZyj-RW1opQk9KYHU8oDIX5nWDfQaW8ZPSzbe7Osd850C3WnSyHwsxuzl35wF8iOPOac5ctISSArRj6ivCBwjLGRRdMeE454fgRW3Y7y-LhPdTnTXd9XiIQ4_VJciNawtmUXicJij9NVzceoWq2BvWp_iHUbMTgfwb0JOjb_YkkpxZwjWcedZQC9fDDh88quNmPv8bmiqmNJsn6iQrLXyfj2oy1A"/>
</div>
</div>
</header>
<!-- Main Canvas -->
<main class="flex-1 p-margin-mobile md:p-margin-desktop flex flex-col gap-6 w-full max-w-container-max mx-auto">
<!-- Page Header & Actions -->
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
<div>
<h1 class="text-headline-lg-mobile md:text-headline-lg font-headline-lg-mobile md:font-headline-lg text-primary">Inventory Management</h1>
<p class="text-body-sm font-body-sm text-on-surface-variant mt-1">Manage warehouse stock, track SKUs, and process stock movements.</p>
</div>
<div class="flex items-center gap-3 w-full sm:w-auto">
<button class="flex-1 sm:flex-none h-11 px-4 rounded border border-outline-variant text-primary font-title-md text-title-md flex items-center justify-center gap-2 hover:bg-surface-container-low transition-colors bg-surface-container-lowest">
<span class="material-symbols-outlined">download</span>
                        Export
                    </button>
<button class="flex-1 sm:flex-none h-11 px-4 rounded bg-primary text-on-primary font-title-md text-title-md flex items-center justify-center gap-2 hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined">add_box</span>
                        Stock Entry
                    </button>
</div>
</div>
<!-- KPI Cards / Bento Grid top section -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="bg-surface-container-lowest border border-outline-variant rounded p-4 flex flex-col gap-2">
<div class="flex justify-between items-center text-on-surface-variant">
<span class="text-label-md font-label-md uppercase">Total SKUs</span>
<span class="material-symbols-outlined text-primary">inventory</span>
</div>
<div class="text-display-lg font-display-lg text-primary">12,450</div>
<div class="text-label-sm font-label-sm text-secondary flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">trending_up</span>
                        +142 this week
                    </div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant rounded p-4 flex flex-col gap-2">
<div class="flex justify-between items-center text-on-surface-variant">
<span class="text-label-md font-label-md uppercase">Low Stock Alerts</span>
<span class="material-symbols-outlined text-error">warning</span>
</div>
<div class="text-display-lg font-display-lg text-error">48</div>
<div class="text-label-sm font-label-sm text-on-surface-variant">Requires immediate attention</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant rounded p-4 flex flex-col gap-2">
<div class="flex justify-between items-center text-on-surface-variant">
<span class="text-label-md font-label-md uppercase">Warehouse Capacity</span>
<span class="material-symbols-outlined text-primary">warehouse</span>
</div>
<div class="text-display-lg font-display-lg text-primary">82%</div>
<div class="w-full bg-surface-container-high rounded-full h-2 mt-2">
<div class="bg-primary h-2 rounded-full" style="width: 82%"></div>
</div>
</div>
</div>
<!-- Main Data Table Card -->
<div class="bg-surface-container-lowest border border-outline-variant rounded flex flex-col overflow-hidden">
<!-- Table Toolbar -->
<div class="p-4 border-b border-surface-container-high flex flex-col sm:flex-row justify-between items-center gap-4 bg-surface/50">
<div class="flex items-center gap-2 w-full sm:w-auto">
<div class="relative flex-1 sm:w-64">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">filter_list</span>
<input class="w-full pl-9 pr-4 py-2 bg-surface-container-lowest rounded border border-outline-variant focus:border-primary focus:ring-1 focus:ring-primary outline-none text-body-sm font-body-sm text-on-surface h-9" placeholder="Filter by SKU or Name..." type="text"/>
</div>
</div>
<div class="flex items-center gap-2 text-label-md font-label-md">
<select class="h-9 px-3 border border-outline-variant rounded bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
<option>All Locations</option>
<option>Zone A</option>
<option>Zone B</option>
</select>
<select class="h-9 px-3 border border-outline-variant rounded bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
<option>All Status</option>
<option>In Stock</option>
<option>Low Stock</option>
</select>
</div>
</div>
<!-- Table Container -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse min-w-[800px]">
<thead>
<tr class="bg-surface-container-low text-on-surface-variant text-label-md font-label-md uppercase border-b border-outline-variant">
<th class="p-2 pl-4 font-medium tracking-wider">Product Name / SKU</th>
<th class="p-2 font-medium tracking-wider">Location</th>
<th class="p-2 font-medium tracking-wider text-right">Current Stock</th>
<th class="p-2 font-medium tracking-wider text-right">Reserved</th>
<th class="p-2 font-medium tracking-wider text-right">Reorder Lvl</th>
<th class="p-2 font-medium tracking-wider text-center">Status</th>
<th class="p-2 pr-4 font-medium tracking-wider text-right">Actions</th>
</tr>
</thead>
<tbody class="text-body-sm font-body-sm text-on-surface divide-y divide-surface-container-high">
<!-- Row 1: In Stock -->
<tr class="hover:bg-surface-container-low/50 transition-colors group">
<td class="p-2 pl-4 py-3">
<div class="font-title-md text-[14px] leading-tight text-primary">Industrial Grade Bearings 608ZZ</div>
<div class="text-label-sm font-label-sm text-on-surface-variant mt-1">SKU: BRG-608-ZZ-01</div>
</td>
<td class="p-2">
<div class="inline-flex items-center gap-1 border border-outline-variant rounded px-2 py-0.5 bg-surface text-label-md font-label-md">
<span class="material-symbols-outlined text-[14px] text-on-surface-variant">location_on</span>
                                        A-12-Rack-4
                                    </div>
</td>
<td class="p-2 text-right font-label-md">4,250</td>
<td class="p-2 text-right font-label-md text-on-surface-variant">150</td>
<td class="p-2 text-right font-label-md text-on-surface-variant">500</td>
<td class="p-2 text-center">
<span class="inline-flex items-center px-2 py-1 rounded bg-secondary-container text-on-secondary-container text-label-sm font-label-sm uppercase">In Stock</span>
</td>
<td class="p-2 pr-4 text-right">
<button class="text-on-surface-variant hover:text-primary transition-colors p-1">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</td>
</tr>
<!-- Row 2: Low Stock -->
<tr class="hover:bg-surface-container-low/50 transition-colors group bg-surface-container-lowest">
<td class="p-2 pl-4 py-3">
<div class="font-title-md text-[14px] leading-tight text-primary">Heavy Duty Steel Shelving Unit</div>
<div class="text-label-sm font-label-sm text-on-surface-variant mt-1">SKU: SHV-HD-ST-12</div>
</td>
<td class="p-2">
<div class="inline-flex items-center gap-1 border border-outline-variant rounded px-2 py-0.5 bg-surface text-label-md font-label-md">
<span class="material-symbols-outlined text-[14px] text-on-surface-variant">location_on</span>
                                        C-04-Floor-1
                                    </div>
</td>
<td class="p-2 text-right font-label-md font-bold text-error">12</td>
<td class="p-2 text-right font-label-md text-on-surface-variant">4</td>
<td class="p-2 text-right font-label-md text-on-surface-variant">20</td>
<td class="p-2 text-center">
<span class="inline-flex items-center px-2 py-1 rounded bg-[#fff8e1] text-[#f57f17] border border-[#fbc02d] text-label-sm font-label-sm uppercase">Low Stock</span>
</td>
<td class="p-2 pr-4 text-right">
<button class="text-on-surface-variant hover:text-primary transition-colors p-1">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</td>
</tr>
<!-- Row 3: Out of Stock -->
<tr class="hover:bg-surface-container-low/50 transition-colors group">
<td class="p-2 pl-4 py-3">
<div class="font-title-md text-[14px] leading-tight text-primary">Hydraulic Pallet Jack 2.5T</div>
<div class="text-label-sm font-label-sm text-on-surface-variant mt-1">SKU: HPJ-25T-M1</div>
</td>
<td class="p-2">
<div class="inline-flex items-center gap-1 border border-outline-variant rounded px-2 py-0.5 bg-surface text-label-md font-label-md">
<span class="material-symbols-outlined text-[14px] text-on-surface-variant">location_on</span>
                                        B-01-Zone-R
                                    </div>
</td>
<td class="p-2 text-right font-label-md font-bold text-error">0</td>
<td class="p-2 text-right font-label-md text-on-surface-variant">0</td>
<td class="p-2 text-right font-label-md text-on-surface-variant">5</td>
<td class="p-2 text-center">
<span class="inline-flex items-center px-2 py-1 rounded bg-error-container text-on-error-container text-label-sm font-label-sm uppercase">Out of Stock</span>
</td>
<td class="p-2 pr-4 text-right">
<button class="text-on-surface-variant hover:text-primary transition-colors p-1">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</td>
</tr>
<!-- Row 4: In Stock -->
<tr class="hover:bg-surface-container-low/50 transition-colors group bg-surface-container-lowest">
<td class="p-2 pl-4 py-3">
<div class="font-title-md text-[14px] leading-tight text-primary">Lithium-Ion Battery Pack 24V</div>
<div class="text-label-sm font-label-sm text-on-surface-variant mt-1">SKU: BAT-LI-24V-08</div>
</td>
<td class="p-2">
<div class="inline-flex items-center gap-1 border border-outline-variant rounded px-2 py-0.5 bg-surface text-label-md font-label-md">
<span class="material-symbols-outlined text-[14px] text-on-surface-variant">location_on</span>
                                        D-08-Sec-2
                                    </div>
</td>
<td class="p-2 text-right font-label-md">145</td>
<td class="p-2 text-right font-label-md text-on-surface-variant">20</td>
<td class="p-2 text-right font-label-md text-on-surface-variant">50</td>
<td class="p-2 text-center">
<span class="inline-flex items-center px-2 py-1 rounded bg-secondary-container text-on-secondary-container text-label-sm font-label-sm uppercase">In Stock</span>
</td>
<td class="p-2 pr-4 text-right">
<button class="text-on-surface-variant hover:text-primary transition-colors p-1">
<span class="material-symbols-outlined text-[20px]">more_vert</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination Footer -->
<div class="p-3 border-t border-surface-container-high bg-surface-container-lowest flex justify-between items-center text-label-md font-label-md text-on-surface-variant">
<div>Showing 1 to 4 of 12,450 entries</div>
<div class="flex items-center gap-1">
<button class="p-1 rounded hover:bg-surface-container-high disabled:opacity-50" disabled=""><span class="material-symbols-outlined text-[18px]">chevron_left</span></button>
<button class="w-7 h-7 rounded bg-primary text-on-primary flex items-center justify-center">1</button>
<button class="w-7 h-7 rounded hover:bg-surface-container-high flex items-center justify-center">2</button>
<button class="w-7 h-7 rounded hover:bg-surface-container-high flex items-center justify-center">3</button>
<span>...</span>
<button class="p-1 rounded hover:bg-surface-container-high"><span class="material-symbols-outlined text-[18px]">chevron_right</span></button>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="flex flex-col sm:flex-row justify-between items-center py-4 px-margin-mobile md:px-margin-desktop w-full mt-auto bg-surface-container-highest dark:bg-inverse-surface border-t border-outline-variant dark:border-outline">
<div class="text-label-sm font-label-sm text-on-surface-variant mb-2 sm:mb-0">
                © 2024 LogiTrack Systems Inc. All rights reserved.
            </div>
<ul class="flex flex-wrap items-center gap-4 text-label-sm font-label-sm">
<li><a class="text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-inverse-primary transition-colors" href="#">Knowledge Base</a></li>
<li><a class="text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-inverse-primary transition-colors" href="#">System Status</a></li>
<li><a class="text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-inverse-primary transition-colors" href="#">Direct Support</a></li>
<li><a class="text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-inverse-primary transition-colors" href="#">API Docs</a></li>
</ul>
</footer>
</div>
<!-- Mobile Bottom Navigation -->
<nav class="md:hidden fixed bottom-0 left-0 w-full bg-surface-container-highest border-t border-outline-variant z-20 pb-safe">
<ul class="flex justify-around items-center h-16">
<li class="flex-1">
<a class="flex flex-col items-center justify-center h-full text-on-surface-variant hover:text-primary transition-colors gap-1" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-label-sm font-label-sm">Dash</span>
</a>
</li>
<li class="flex-1">
<a class="flex flex-col items-center justify-center h-full text-on-surface-variant hover:text-primary transition-colors gap-1" href="#">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="text-label-sm font-label-sm">Orders</span>
</a>
</li>
<li class="flex-1">
<a class="flex flex-col items-center justify-center h-full text-primary font-bold gap-1 border-t-2 border-primary" href="#">
<span class="material-symbols-outlined icon-fill">inventory_2</span>
<span class="text-label-sm font-label-sm">Inventory</span>
</a>
</li>
<li class="flex-1">
<a class="flex flex-col items-center justify-center h-full text-on-surface-variant hover:text-primary transition-colors gap-1" href="#">
<span class="material-symbols-outlined">assessment</span>
<span class="text-label-sm font-label-sm">Reports</span>
</a>
</li>
</ul>
</nav>
</body></html>