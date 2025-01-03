<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <style></style>
     <header>


<div id="app" class="antialiased h-screen bg-gray-100">

  <div class="lg:flex">
    <div class="lg:hidden">
      <transition name="menu-slide">
        <div v-show="isOpen" class="w-5/6 fixed bg-white h-screen z-20">
          <div class="pt-4 pb-2 px-4 flex items-center justify-between bg-gray-200">
            <div class="text-xl font-semibold">MENU</div>
            <div @click="toggleMenu">
              <svg class="w-10 h-10 fill-current text-red-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M4.93 19.07A10 10 0 1 1 19.07 4.93 10 10 0 0 1 4.93 19.07zm1.41-1.41A8 8 0 1 0 17.66 6.34 8 8 0 0 0 6.34 17.66zM13.41 12l1.42 1.41a1 1 0 1 1-1.42 1.42L12 13.4l-1.41 1.42a1 1 0 1 1-1.42-1.42L10.6 12l-1.42-1.41a1 1 0 1 1 1.42-1.42L12 10.6l1.41-1.42a1 1 0 1 1 1.42 1.42L13.4 12z"/></svg>
            </div>
          </div>
          <div class="py-2 pb-4 flex flex-col items-center justify-center bg-gray-200 border-b border-gray-400">
            <div class="w-16 h-16 flex items-center justify-center border-4 border-green-600 rounded-full">
              <svg class="ml-2 w-12 h-12 fill-current text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 83 86"><defs/><path fill-rule="evenodd" d="M7.75 1.364L79 42.5 7.75 83.636V1.364zm4 6.928L71 42.5 11.75 76.708V8.292zM15 16a2 2 0 100-4 2 2 0 000 4zm4-1a1 1 0 100-2 1 1 0 000 2zm11 10.5a8.5 8.5 0 11-17 0 8.5 8.5 0 0117 0zm0 34a8.5 8.5 0 11-17 0 8.5 8.5 0 0117 0zM22 50a3 3 0 100-6 3 3 0 000 6zm-7 22a1 1 0 11-2 0 1 1 0 012 0zm18-9a1 1 0 100-2 1 1 0 000 2zM14 33a1 1 0 11-2 0 1 1 0 012 0zm19-11a1 1 0 11-2 0 1 1 0 012 0zM18 46a1 1 0 100-2 1 1 0 000 2zm1 23.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM13.5 54a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM15 36.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM31.5 59a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM25 36.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM13.5 20a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM39 25.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM14.5 69a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM22 38.5a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0zM15 50a2 2 0 100-4 2 2 0 000 4zm23 9a2 2 0 11-4 0 2 2 0 014 0zm-5-31a2 2 0 100-4 2 2 0 000 4zM16 43a2 2 0 11-4 0 2 2 0 014 0zm38-.5C54 50.508 47.508 57 39.5 57S25 50.508 25 42.5 31.492 28 39.5 28 54 34.492 54 42.5zm1.75-6.495L67 42.5l-11.25 6.495v-12.99z" clip-rule="evenodd"/></svg>
            </div>
            <div class="text-xl">Denis's Shop</div>
          </div>
          <div class="flex flex-col items-start">
            <div class="pl-4 py-4 w-full flex items-center border-b border-gray-400">
              <svg class="w-6 h-6 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z"/></svg>
              <span class="ml-4 font-medium">Dashboard</span>
            </div>
            <div class="pl-4 py-4 w-full flex items-center border-b border-gray-400">
              <svg class="w-6 h-6 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M5.41 16H18a2 2 0 0 0 2-2 1 1 0 0 1 2 0 4 4 0 0 1-4 4H5.41l2.3 2.3a1 1 0 0 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 1 1 1.42 1.4L5.4 16zM6 8a2 2 0 0 0-2 2 1 1 0 0 1-2 0 4 4 0 0 1 4-4h12.59l-2.3-2.3a1 1 0 1 1 1.42-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.42-1.4L18.6 8H6z"/></svg>
              <span class="ml-4 font-medium">Transactions</span>
            </div>
            <div class="pl-4 py-4 w-full flex items-center border-b border-gray-400">
              <svg class="w-6 h-6 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
              <span class="ml-4 font-medium">Sales</span>
            </div>
            <div class="pl-4 py-4 w-full flex items-center border-b border-gray-400">
              <svg class="w-6 h-6 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M20 6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h7.41l2 2H20zM4 6v12h16V8h-7.41l-2-2H4z"/></svg>
              <span class="ml-4 font-medium">Products</span>
            </div>
            <div class="pl-4 py-4 w-full flex items-center border-b border-gray-400">
              <svg class="w-6 h-6 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2zm1-5a1 1 0 0 1 0-2 5 5 0 0 1 5 5v2a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3zm-2-4a1 1 0 0 1 0-2 3 3 0 0 0 0-6 1 1 0 0 1 0-2 5 5 0 0 1 0 10z"/></svg>
              <span class="ml-4 font-medium">Members</span>
            </div>
            <div class="pl-4 py-4 w-full flex items-center border-b border-gray-400">
              <svg class="w-6 h-6 fill-current text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
              <span class="ml-4 font-medium">Settings</span>
            </div>
          </div>
          <div class="w-5/6 fixed bottom-0">
            <div class="py-3 w-full flex items-center justify-center border-t border-blue-600">
              <span class="text-blue-600 font-medium">Account</span>
            </div>
            <div class="py-3 w-full flex items-center justify-center border-t border-red-700">
              <span class="text-red-700 font-medium">Log out</span>
            </div>
          </div>
        </div>
      </transition>
    </div>

    <transition name="mask">
      <div v-show="isOpen" class="fixed inset-0 h-screen w-screen bg-black opacity-75 lg:hidden" @click="toggleMenu"></div>
    </transition>

    <div class="lg:flex lg:w-full">
      <div class="h-12 flex items-center justify-evenly bg-green-600 shadow-md lg:hidden">
        <div @click="toggleMenu" class="h-full flex items-center justify-center border-r border-green-700">
          <svg class="mx-2 w-8 h-8 fill-current text-green-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/></svg>
        </div>
        <div class="py-2 w-full">
          <h3 class="ml-8 tracking-wider text-gray-100">DASHBOARD</h3>
        </div>
      </div>

      <div class="hidden lg:flex lg:flex-col transition-menu w-20" :class="{ 'w-2/6': isOpen}">

        <nav v-show="!isOpen" class="h-screen bg-green-900 transition-menu">
          <div class="flex flex-col items-center px-2">
            <div class="pt-4 pb-2 px-4 flex items-center" @click="toggleMenu">
              <svg class="w-8 h-8 fill-current text-green-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/></svg>
            </div>
            <div class="py-4 mt-8 w-full flex flex-col items-center justify-center">
            <a href="/admin"><svg class="w-8 h-8 fill-current text-green-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z"/></svg>
              <span class="text-xs text-gray-400">Dashboard</span></a>
            </div>
            <div class="py-4 w-full flex flex-col items-center justify-center">
            <a href="/newproduct"> <svg class="w-8 h-8 fill-current text-green-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M20 6a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h7.41l2 2H20zM4 6v12h16V8h-7.41l-2-2H4z"/></svg>
              <span class="text-xs text-gray-400">Products</span></a>
            </div>
            <div class="py-4 w-full flex flex-col items-center justify-center">
              <svg class="w-8 h-8 fill-current text-green-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M20 22H4a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h4V8c0-1.1.9-2 2-2h4V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2zM14 8h-4v12h4V8zm-6 4H4v8h4v-8zm8-8v16h4V4h-4z"/></svg>
              <span class="text-xs text-gray-400">Sales</span>
            </div>
          
            <div class="py-4 w-full flex flex-col items-center justify-center">
              <svg class="w-8 h-8 fill-current text-green-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2zm1-5a1 1 0 0 1 0-2 5 5 0 0 1 5 5v2a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3zm-2-4a1 1 0 0 1 0-2 3 3 0 0 0 0-6 1 1 0 0 1 0-2 5 5 0 0 1 0 10z"/></svg>
              <span class="text-xs text-gray-400">Memebers</span>
            </div>
            <div class="py-4 w-full flex flex-col items-center justify-center">
              <svg class="w-8 h-8 fill-current text-green-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
              <span class="text-xs text-gray-400">Settings</span>
            </div>
          </div>
        </nav>

       

      </div>

      <div class="w-full">
        <div class="mx-6 my-3 h-10 flex items-center justify-evenly border border-green-300 rounded-lg">
          <div class="h-full w-full flex items-center justify-center">
            <svg class="mx-2 w-8 h-8 fill-current text-green-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/></svg>
            <input class="pb-1 h-full w-full rounded-lg bg-transparent focus:outline-none" type="text" placeholder="Search">
          </div>
        </div>

        <div>

          <div class="mx-2 my-2 pb-1 flex flex-col bg-green-600 rounded-lg text-sm lg:mx-6">
            <div class="ml-4 mt-2 flex items-center text-gray-100">
              <h4 class="">Today</h4>
              <span class="ml-2 text-gray-400">October, 26</span>
            </div>
            <div class="mx-4 my-2 flex items-center justify-between">
              <div class="flex flex-col">
                <div class="-mb-2 text-white text-2xl tracking-wide font-semibold">$6,471</div>
                <div class="text-xs text-gray-400">gross revenue</div>
              </div>
              <div class="flex">
                <div class="mx-4 w-20 flex flex-col border-l-2 border-green-500">
                  <div class="-mb-2 ml-2 text-white text-2xl tracking-wide font-semibold">149</div>
                  <div class="ml-2 text-xs text-gray-400">units sold</div>
                </div>
                <div class="w-20 flex flex-col border-l-2 border-green-500">
                  <div class="-mb-2 ml-2 text-white text-2xl tracking-wide font-semibold">125</div>
                  <div class="ml-2 text-xs text-gray-400">orders</div>
                </div>
              </div>
            </div>
          </div>

          <div class="mx-8 my-4 flex items-center justify-around text-sm">
            <button class="px-2 py-1 text-gray-600" type="button">24 hours</button>
            <button class="px-2 py-1 text-gray-600" type="button">1 week</button>
            <button class="px-2 py-1 bg-green-500 text-white rounded-lg" type="button">1 month</button>
            <button class="px-2 py-1 text-gray-600" type="button">1 year</button>
            <button class="px-2 py-1 text-gray-600" type="button">All time</button>
          </div>



          <div class="lg:mx-6">
            <div class="md:flex md:justify-around">
              <div class="mx-2 my-4 pb-1 flex flex-col justify-between bg-white shadow-lg border border-green-200 text-sm lg:w-full">
                <div class="ml-4 mt-2 flex items-center justify-between text-lg text-gray-800 font-medium">
                  <div>
                    Last month revenue
                  </div>
                  <div class="mr-4 text-sm text-gray-600">
                    Sept 26 - Oct 26
                  </div>
                </div>
                <img class="mx-4 my-4 object-center" src="https://i.imgur.com/hQ7I41P.png">
              </div>

              <div class="mt-6 items-center justify-center md:hidden">
                <div class="flex items-center">
                  <hr class="w-full bg-gray-400 h-px">
                  <h5 class="m-auto px-4 w-32 text-center bg-gray-100 tracking-wider font-medium text-gray-600">
                    STATISTICS
                  </h5>
                  <hr class="w-full bg-gray-400 h-px">
                </div>
              </div>

              <div class="mx-2 mt-4 mb-4 pb-1 flex flex-col bg-white shadow-lg border border-green-200 text-sm lg:w-full">
                <div class="ml-4 mt-2 mb-2 flex items-center justify-between text-lg text-gray-800 font-medium">
                  <div>
                    Traffic
                    <hr>
                  </div>
                  <div class="mr-4 text-sm text-gray-600">
                    Today <span class="text-xs font-semibold text-gray-800">&or;</span>
                  </div>
                </div>
                <div class="my-2 flex items-center justify-around">
                  <div class="mx-4 flex flex-col items-center">
                    <div>
                      <svg class="w-20 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 19"><defs/><path fill-rule="evenodd" d="M49.234 4.457l7.887-1.972-.242-.97-8.113 2.028L42.316 9H31.41l-11.957 4.484-8.505-1.501L.814 16.036l.372.928 9.867-3.947 8.495 1.5L31.59 10h11.092l6.551-5.543z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="flex flex-col items-center">
                      <span class="text-green-700 text-xl font-medium">2,496</span>
                      <span class="-mt-1 text-gray-600 text-xs">unique visits</span>
                    </div>
                  </div>
                  <div class="mx-4 flex flex-col items-center">
                    <div>
                      <svg class="w-20 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 19"><defs/><g clip-path="url(#clip0)"><path fill-rule="evenodd" d="M56.864-.157l-8.193 8.705-7.048-1.51-9.027 7.021L20.57 10.05l-8.39 5.43-10.61 1.515-.14-.99 10.39-1.484 8.61-5.571 11.974 3.991 8.973-6.979 6.952 1.49 7.807-8.295.728.686z" clip-rule="evenodd"/></g><defs><clipPath id="clip0"><path d="M0 0h58v19H0z"/></clipPath></defs></svg>
                    </div>
                    <div class="flex flex-col items-center">
                      <span class="text-green-700 text-xl font-medium">8,761</span>
                      <span class="-mt-1 text-gray-600 text-xs">visits</span>
                    </div>
                  </div>
                  <div class="mx-4 flex flex-col items-center">
                    <div>
                      <svg class="w-20 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 19"><defs/><path fill-rule="evenodd" d="M49.234 4.457l7.887-1.972-.242-.97-8.113 2.028L42.316 9H31.41l-11.957 4.484-8.505-1.501L.814 16.036l.372.928 9.867-3.947 8.495 1.5L31.59 10h11.092l6.551-5.543z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="flex flex-col">
                      <span class="text-green-700 text-xl font-medium">18,222</span>
                      <span class="-mt-1 text-gray-600 text-xs">page views</span>
                    </div>
                  </div>
                </div>
                <div class="ml-4 mt-2 mb-2 flex items-center justify-between text-lg text-gray-800 font-medium">
                  <div>
                    Traffic sources
                    <hr>
                  </div>
                </div>
                <div class="mx-6 my-2">
                  <div>
                    <span class="text-gray-800 font-semibold text-lg text-green-800">Direct</span>
                    <div class="h-5 flex items-center border border-gray-500 rounded-lg">
                      <div class="w-2/3 h-full rounded-lg bg-green-500"></div>
                      <span class="ml-1 text-xs font-semibold text-green-800">66%</span>
                    </div>
                  </div>
                  <div class="my-2">
                    <span class="text-gray-800 font-semibold text-lg text-green-800">Social media</span>
                    <div class="h-5 flex items-center border border-gray-500 rounded-lg">
                      <div class="w-1/6 h-full rounded-lg bg-green-500"></div>
                      <span class="ml-1 text-xs font-semibold text-green-800">10%</span>
                    </div>
                  </div>
                  <div class="my-2">
                    <span class="text-gray-800 font-semibold text-lg text-green-800">Search engines</span>
                    <div class="h-5 flex items-center border border-gray-500 rounded-lg">
                      <div class="w-2/6 h-full rounded-lg bg-green-500"></div>
                      <span class="ml-1 text-xs font-semibold text-green-800">20%</span>
                    </div>
                  </div>
                  <div>
                    <span class="text-gray-800 font-semibold text-lg text-green-800">Other</span>
                    <div class="h-5 flex items-center border border-gray-500 rounded-lg">
                      <div class="w-6 h-full rounded-lg bg-green-500"></div>
                      <span class="ml-1 text-xs font-semibold text-green-800">3%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

</div>


            </header>
            </dody>
            </html>