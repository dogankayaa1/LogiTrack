<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Reports &amp; Analytics</title>
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
                      "title-md": [
                              "Inter"
                      ],
                      "display-lg": [
                              "Inter"
                      ],
                      "label-sm": [
                              "JetBrains Mono"
                      ],
                      "body-lg": [
                              "Inter"
                      ],
                      "label-md": [
                              "JetBrains Mono"
                      ],
                      "headline-lg-mobile": [
                              "Inter"
                      ],
                      "headline-lg": [
                              "Inter"
                      ],
                      "body-sm": [
                              "Inter"
                      ]
              },
              "fontSize": {
                      "title-md": [
                              "18px",
                              {
                                      "lineHeight": "24px",
                                      "fontWeight": "600"
                              }
                      ],
                      "display-lg": [
                              "36px",
                              {
                                      "lineHeight": "44px",
                                      "letterSpacing": "-0.02em",
                                      "fontWeight": "700"
                              }
                      ],
                      "label-sm": [
                              "10px",
                              {
                                      "lineHeight": "14px",
                                      "letterSpacing": "0.05em",
                                      "fontWeight": "500"
                              }
                      ],
                      "body-lg": [
                              "16px",
                              {
                                      "lineHeight": "24px",
                                      "fontWeight": "400"
                              }
                      ],
                      "label-md": [
                              "12px",
                              {
                                      "lineHeight": "16px",
                                      "letterSpacing": "0.05em",
                                      "fontWeight": "500"
                              }
                      ],
                      "headline-lg-mobile": [
                              "24px",
                              {
                                      "lineHeight": "32px",
                                      "fontWeight": "600"
                              }
                      ],
                      "headline-lg": [
                              "28px",
                              {
                                      "lineHeight": "36px",
                                      "letterSpacing": "-0.01em",
                                      "fontWeight": "600"
                              }
                      ],
                      "body-sm": [
                              "14px",
                              {
                                      "lineHeight": "20px",
                                      "fontWeight": "400"
                              }
                      ]
              }
      },
          },
        }
      </script>
<style>
        body { background-color: theme('colors.surface'); color: theme('colors.on-surface'); }
    </style>
</head>
<body class="flex h-screen overflow-hidden">
<!-- SideNavBar -->
<nav class="hidden md:flex flex-col bg-surface-container-low border-r border-outline-variant h-full w-64 p-base fixed left-0 top-0 z-20">
<div class="flex items-center gap-3 mb-8 px-4 py-2 mt-4">
<div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center text-on-primary font-bold">L</div>
<div>
<h1 class="text-title-md font-title-md text-primary">Logistics Hub</h1>
<p class="text-label-sm font-label-sm text-on-surface-variant">Terminal A-42</p>
</div>
</div>
<button class="bg-primary text-on-primary h-11 rounded-DEFAULT font-label-md text-label-md w-full mb-6 flex items-center justify-center gap-2 hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined text-[18px]">add</span> New Order
        </button>
<div class="flex-1 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-all group" href="#">
<span class="material-symbols-outlined text-[20px] group-hover:text-primary">dashboard</span>
<span class="font-label-md text-label-md group-hover:text-primary">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-all group" href="#">
<span class="material-symbols-outlined text-[20px] group-hover:text-primary">menu_book</span>
<span class="font-label-md text-label-md group-hover:text-primary">Catalog</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-all group" href="#">
<span class="material-symbols-outlined text-[20px] group-hover:text-primary">shopping_cart</span>
<span class="font-label-md text-label-md group-hover:text-primary">Orders</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-all group" href="#">
<span class="material-symbols-outlined text-[20px] group-hover:text-primary">inventory_2</span>
<span class="font-label-md text-label-md group-hover:text-primary">Inventory</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary-fixed bg-primary-fixed font-bold scale-[0.98] transition-transform duration-100" href="#">
<span class="material-symbols-outlined text-[20px]">assessment</span>
<span class="font-label-md text-label-md">Reports</span>
</a>
</div>
<div class="mt-auto space-y-1 pt-4 border-t border-outline-variant">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-all group" href="#">
<span class="material-symbols-outlined text-[20px] group-hover:text-primary">settings</span>
<span class="font-label-md text-label-md group-hover:text-primary">Settings</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container-high transition-all group" href="#">
<span class="material-symbols-outlined text-[20px] group-hover:text-primary">contact_support</span>
<span class="font-label-md text-label-md group-hover:text-primary">Support</span>
</a>
</div>
</nav>
<!-- Main Content Area -->
<div class="flex-1 flex flex-col md:ml-64 relative min-h-screen">
<!-- TopNavBar (Mobile Only for Shell) -->
<header class="flex md:hidden justify-between items-center h-16 w-full px-margin-mobile bg-surface border-b border-outline-variant z-10 sticky top-0">
<div class="text-title-md font-title-md font-bold text-primary">LogiTrack B2B</div>
<div class="flex items-center gap-4">
<button class="text-primary"><span class="material-symbols-outlined">notifications</span></button>
<button class="text-primary"><span class="material-symbols-outlined">menu</span></button>
</div>
</header>
<!-- Canvas -->
<main class="flex-1 overflow-y-auto p-margin-mobile md:p-margin-desktop space-y-gutter pb-24">
<!-- Page Header & Filters -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
<div>
<h2 class="text-headline-lg-mobile md:text-headline-lg font-headline-lg-mobile md:font-headline-lg text-primary mb-2">Reports &amp; Analytics</h2>
<p class="text-body-sm font-body-sm text-on-surface-variant">Real-time performance metrics and historical data.</p>
</div>
<div class="flex items-center gap-3 bg-surface-container-lowest border border-outline-variant rounded-lg p-1 shadow-sm">
<button class="px-4 py-2 text-label-md font-label-md text-on-surface-variant hover:bg-surface-container-low rounded-DEFAULT transition-colors">7D</button>
<button class="px-4 py-2 text-label-md font-label-md text-on-primary bg-primary rounded-DEFAULT transition-colors">30D</button>
<button class="px-4 py-2 text-label-md font-label-md text-on-surface-variant hover:bg-surface-container-low rounded-DEFAULT transition-colors">QTD</button>
<button class="px-4 py-2 text-label-md font-label-md text-on-surface-variant hover:bg-surface-container-low rounded-DEFAULT transition-colors">YTD</button>
<div class="w-px h-4 bg-outline-variant mx-1"></div>
<button class="px-3 py-2 flex items-center gap-2 text-label-md font-label-md text-primary hover:bg-surface-container-low rounded-DEFAULT transition-colors">
<span class="material-symbols-outlined text-[16px]">calendar_month</span> Custom
                    </button>
</div>
</div>
<!-- KPI Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-6 relative overflow-hidden group hover:-translate-y-1 transition-transform duration-200">
<div class="flex justify-between items-start mb-4">
<h3 class="text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Total Revenue</h3>
<span class="material-symbols-outlined text-outline">payments</span>
</div>
<div class="flex items-end gap-3">
<div class="text-display-lg font-display-lg text-primary">$1.24M</div>
<div class="flex items-center text-secondary font-label-sm text-label-sm mb-2 bg-secondary-fixed/30 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[12px] mr-1">trending_up</span> +12.5%
                        </div>
</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-6 relative overflow-hidden group hover:-translate-y-1 transition-transform duration-200">
<div class="flex justify-between items-start mb-4">
<h3 class="text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Average Order Value</h3>
<span class="material-symbols-outlined text-outline">receipt_long</span>
</div>
<div class="flex items-end gap-3">
<div class="text-display-lg font-display-lg text-primary">$4,850</div>
<div class="flex items-center text-secondary font-label-sm text-label-sm mb-2 bg-secondary-fixed/30 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[12px] mr-1">trending_up</span> +3.2%
                        </div>
</div>
</div>
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-6 relative overflow-hidden group hover:-translate-y-1 transition-transform duration-200">
<div class="flex justify-between items-start mb-4">
<h3 class="text-label-md font-label-md text-on-surface-variant uppercase tracking-wider">Active Dealers</h3>
<span class="material-symbols-outlined text-outline">storefront</span>
</div>
<div class="flex items-end gap-3">
<div class="text-display-lg font-display-lg text-primary">342</div>
<div class="flex items-center text-error font-label-sm text-label-sm mb-2 bg-error-container/50 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[12px] mr-1">trending_down</span> -2
                        </div>
</div>
</div>
</div>
<!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
<!-- Bar Chart Placeholder -->
<div class="lg:col-span-2 bg-surface-container-lowest border border-outline-variant rounded-xl p-6 flex flex-col h-[400px]">
<div class="flex justify-between items-center mb-6">
<h3 class="text-title-md font-title-md text-primary">Monthly Sales Volume</h3>
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_vert</span>
</button>
</div>
<div class="flex-1 relative flex items-end justify-between px-4 pb-8 border-b border-l border-outline-variant/30">
<!-- Y-axis labels -->
<div class="absolute left-0 top-0 h-full flex flex-col justify-between text-label-sm font-label-sm text-outline -ml-8 py-2">
<span>$300k</span><span>$200k</span><span>$100k</span><span>0</span>
</div>
<!-- Bars -->
<div class="w-12 bg-surface-variant rounded-t-sm h-[40%] group relative cursor-pointer"><div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-label-sm font-label-sm text-outline">Jan</span></div>
<div class="w-12 bg-primary rounded-t-sm h-[60%] group relative cursor-pointer"><div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity"></div><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-label-sm font-label-sm text-outline">Feb</span></div>
<div class="w-12 bg-surface-variant rounded-t-sm h-[45%] group relative cursor-pointer"><div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-label-sm font-label-sm text-outline">Mar</span></div>
<div class="w-12 bg-surface-variant rounded-t-sm h-[70%] group relative cursor-pointer"><div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-label-sm font-label-sm text-outline">Apr</span></div>
<div class="w-12 bg-surface-variant rounded-t-sm h-[85%] group relative cursor-pointer"><div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-label-sm font-label-sm text-outline">May</span></div>
<div class="w-12 bg-surface-variant rounded-t-sm h-[55%] group relative cursor-pointer"><div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div><span class="absolute -bottom-6 left-1/2 -translate-x-1/2 text-label-sm font-label-sm text-outline">Jun</span></div>
</div>
</div>
<!-- Pie Chart/List Placeholder -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-6 flex flex-col h-[400px]">
<div class="flex justify-between items-center mb-6">
<h3 class="text-title-md font-title-md text-primary">Top Categories</h3>
<button class="text-on-surface-variant hover:text-primary transition-colors">
<span class="material-symbols-outlined">more_vert</span>
</button>
</div>
<!-- Abstract representation of a donut chart data -->
<div class="flex-1 flex flex-col justify-center gap-4">
<div class="relative w-48 h-48 mx-auto rounded-full border-[16px] border-surface-variant flex items-center justify-center">
<!-- Faux chart segments using CSS -->
<div class="absolute inset-0 rounded-full border-[16px] border-primary border-t-transparent border-l-transparent rotate-45"></div>
<div class="absolute inset-0 rounded-full border-[16px] border-secondary-container border-b-transparent border-r-transparent -rotate-12"></div>
<div class="text-center">
<div class="text-title-md font-title-md text-primary">8.4k</div>
<div class="text-label-sm font-label-sm text-outline">Total Units</div>
</div>
</div>
<div class="mt-4 space-y-3">
<div class="flex justify-between items-center text-body-sm font-body-sm">
<div class="flex items-center gap-2"><div class="w-3 h-3 rounded-sm bg-primary"></div><span>Heavy Machinery</span></div>
<span class="font-bold">45%</span>
</div>
<div class="flex justify-between items-center text-body-sm font-body-sm">
<div class="flex items-center gap-2"><div class="w-3 h-3 rounded-sm bg-secondary-container"></div><span>Parts &amp; Spares</span></div>
<span class="font-bold">30%</span>
</div>
<div class="flex justify-between items-center text-body-sm font-body-sm">
<div class="flex items-center gap-2"><div class="w-3 h-3 rounded-sm bg-surface-variant"></div><span>Consumables</span></div>
<span class="font-bold">25%</span>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>