<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/base.css">
        <link rel="stylesheet" href="../fonts/fontawesome-free-6.1.1-web/css/all.min.css">
        <title>Shopee Mock-Up</title>


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div> -->
        <div class="app">
            <header class="header">
                <div class="grid">
                    <nav class="header__navbar">
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
                                Vào cửa hàng trên ứng dụng Lmao-Shop

                                <!-- Header QR code -->
                                <div class="header__qr">
                                    <img src="/img/qr_code.png" alt="QR code" class="header__qr-img">
                                    <div class="header__qr-apps">
                                        <a href="" class="header__qr-link">
                                            <img src="/img/google_play.png" alt="Google Play" class="header__qr-download-img">
                                        </a>
                                        <a href="" class="header__qr-link">
                                            <img src="/img/app_store.png" alt="App Store" class="header__qr-download-img">
                                        </a>
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="header__navbar-item">
                                <span class="header__navbar-tittle--no-pointer">
                                    Kết nối
                                </span>
                                <a href="" class="header__navbar-icon-link">
                                    <i class="header__navbar-icon fa-brands fa-facebook"></i>
                                </a>
                                <a href="" class="header__navbar-icon-link">
                                    <i class="header__navbar-icon fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
    
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item header__navbar-item--has-notify">
                                <a href="" class="header__navbar-item-link">
                                    <i class="header__navbar-icon fa-solid fa-bell"></i>
                                    Thông Báo
                                </a>
                                <div class="header__notify">
                                    <header class="header__notify-header">
                                        <h3>Thông báo mới nhận</h3>
                                    </header>
                                        <ul class="header__notify-list">
                                            <!-- noti 1 -->
                                            <li class="header__notify-item header__notify-item--viewed">
                                                <a href="" class="header__notify-link">
                                                    <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="[Quà tặng không bán] Bộ 5 bước cải thiện nếp nhăn ngăn lão hóa OHUI Age Recovery Miniature Kit" class="header__notify-img">
                                                    <div class="header__notify-info">
                                                        <span class="header__notify-name">[Quà tặng không bán] Bộ 5 bước cải thiện nếp nhăn ngăn lão hóa OHUI Age Recovery Miniature Kit</span>
                                                        <span class="header__notify-descriotion">Bộ OHUI Age Recovery Miniature Kit</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- noti 2 -->
                                            <li class="header__notify-item header__notify-item--viewed ">
                                                <a href="" class="header__notify-link">
                                                    <img src="https://cf.shopee.vn/file/765ab591b99665ea97e920df45e1b796" alt="" class="header__notify-img">
                                                    <div class="header__notify-info">
                                                        <span class="header__notify-name">[HB Gift] Bộ chống lão hóa 3 món OHUI Prime Advancer và Sữa rửa mặt dưỡng ẩm OHUI Miracle Moisture Cleansing Foam</span>
                                                        <span class="header__notify-descriotion">Bộ chống lão hóa 3 món OHUI</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- noti 3 -->
                                            <li class="header__notify-item header__notify-item--viewed">
                                                <a href="" class="header__notify-link">
                                                    <img src="https://cf.shopee.vn/file/71b64a8cccb2b19c0a66fe0289f30f9b_tn" alt="" class="header__notify-img">
                                                    <div class="header__notify-info">
                                                        <span class="header__notify-name">Kem dưỡng trắng OHUI Extreme White Cream 50ml</span>
                                                        <span class="header__notify-descriotion">QUÀ TẶNG ĐƠN TỪ 2.400K - NHẬP OHUIT310P ĐỂ -10%</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- noti 4 -->
                                            <li class="header__notify-item header__notify-item--viewed">
                                                <a href="" class="header__notify-link">
                                                    <img src="https://cf.shopee.vn/file/91dbcc86bb9eb21a7e9bbd3f110bc58f" alt="" class="header__notify-img">
                                                    <div class="header__notify-info">
                                                        <span class="header__notify-name">Kem nền dạng thỏi siêu che phủ kiểm soát nhờn OHUI Ultimate Cover Stick Foudation SPF50+/PA +++ 15g</span>
                                                        <span class="header__notify-descriotion">QUÀ TẶNG ĐƠN TỪ 2.400K - NHẬP OHUIT310P ĐỂ -10%</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    <footer class="header__notify-footer">
                                        <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                    </footer>
                                </div>
                            </li>
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-item-link">
                                    <i class="header__navbar-icon fa-regular fa-circle-question"></i>
                                    Trợ Giúp
                                </a>
                            </li>
                            <!-- <li class="header__navbar-item header__navbar-item-strong header__navbar-item--separate">Đăng Kí</li>
                            <li class="header__navbar-item header__navbar-item-strong">Đăng Nhập</li> -->
                            <li class="header__navbar-item header__navbar-user">
                                <img src="https://bannenbiet.com/wp-content/uploads/2020/07/ngon-ngu-meo.jpg?v=1643127345" alt="user" class="header__navbar-user-img">
                                <span class="header__navbar-user-name">Dumb Cat</span>

                                    <ul class="header__navbar-user-menu">
                                        <li class="header__navbar-user-item">
                                            <a href="">Tài khoản của tôi</a>
                                        </li>
                                        <li class="header__navbar-user-item">
                                            <a href="">Địa chỉ của tôi</a>
                                        </li>
                                        <li class="header__navbar-user-item">
                                            <a href="">Đơn mua</a>
                                        </li>
                                        <li class="header__navbar-user-item header__navbar-user-item-separate">
                                            <a href="">Đăng xuất</a>
                                        </li>
                                    </ul>
                                
                            </li>
                        </ul>
                    </nav>

                    <div class="header-with-search">
                        <div class="header__logo">
                            <a href="/" class="header__logo-link">
                                <svg class="header__logo-img" viewBox="0 0 192 65">
                                    <g fill-rule="evenodd">
                                        <path fill="#fff"
                                            d="M35.6717403 44.953764c-.3333497 2.7510509-2.0003116 4.9543414-4.5823845 6.0575984-1.4379707.6145919-3.36871.9463856-4.896954.8421628-2.3840266-.0911143-4.6237865-.6708937-6.6883352-1.7307424-.7375522-.3788551-1.8370513-1.1352759-2.6813095-1.8437757-.213839-.1790053-.239235-.2937577-.0977428-.4944671.0764015-.1151823.2172535-.3229831.5286218-.7791994.45158-.6616533.5079208-.7446018.5587128-.8221779.14448-.2217688.3792333-.2411091.6107855-.0588804.0243289.0189105.0243289.0189105.0426824.0333083.0379873.0294402.0379873.0294402.1276204.0990653.0907002.0706996.14448.1123887.166248.1287205 2.2265285 1.7438508 4.8196989 2.7495466 7.4376251 2.8501162 3.6423042-.0496401 6.2615109-1.6873341 6.7308041-4.2020035.5160305-2.7675977-1.6565047-5.1582742-5.9070334-6.4908212-1.329344-.4166762-4.6895175-1.7616869-5.3090528-2.1250697-2.9094471-1.7071043-4.2697358-3.9430584-4.0763845-6.7048539.296216-3.8283059 3.8501677-6.6835796 8.340785-6.702705 2.0082079-.004083 4.0121475.4132378 5.937338 1.2244562.6816382.2873109 1.8987274.9496089 2.3189359 1.2633517.2420093.1777159.2898136.384872.1510957.60836-.0774686.12958-.2055158.3350171-.4754821.7632974l-.0029878.0047276c-.3553311.5640922-.3664286.5817134-.447952.7136572-.140852.2144625-.3064598.2344475-.5604202.0732783-2.0600669-1.3839063-4.3437898-2.0801572-6.8554368-2.130442-3.126914.061889-5.4706057 1.9228561-5.6246892 4.4579402-.0409751 2.2896772 1.676352 3.9613243 5.3858811 5.2358503 7.529819 2.4196871 10.4113092 5.25648 9.869029 9.7292478M26.3725216 5.42669372c4.9022893 0 8.8982174 4.65220288 9.0851664 10.47578358H17.2875686c.186949-5.8235807 4.1828771-10.47578358 9.084953-10.47578358m25.370857 11.57065968c0-.6047069-.4870064-1.0948761-1.0875481-1.0948761h-11.77736c-.28896-7.68927544-5.7774923-13.82058185-12.5059489-13.82058185-6.7282432 0-12.2167755 6.13130641-12.5057355 13.82058185l-11.79421958.0002149c-.59136492.0107446-1.06748731.4968309-1.06748731 1.0946612 0 .0285807.00106706.0569465.00320118.0848825H.99995732l1.6812605 37.0613963c.00021341.1031483.00405483.2071562.01173767.3118087.00170729.0236381.003628.0470614.00554871.0704847l.00362801.0782207.00405483.004083c.25545428 2.5789222 2.12707837 4.6560709 4.67201764 4.7519129l.00576212.0055872h37.4122078c.0177132.0002149.0354264.0004298.0531396.0004298.0177132 0 .0354264-.0002149.0531396-.0004298h.0796027l.0017073-.0015043c2.589329-.0706995 4.6867431-2.1768587 4.9082648-4.787585l.0012805-.0012893.0017073-.0350275c.0021341-.0275062.0040548-.0547975.0057621-.0823037.0040548-.065757.0068292-.1312992.0078963-.1964115l1.8344904-37.207738h-.0012805c.001067-.0186956.0014939-.0376062.0014939-.0565167M176.465457 41.1518926c.720839-2.3512494 2.900423-3.9186779 5.443734-3.9186779 2.427686 0 4.739107 1.6486899 5.537598 3.9141989l.054826.1556978h-11.082664l.046506-.1512188zm13.50267 3.4063683c.014933.0006399.014933.0006399.036906.0008531.021973-.0002132.021973-.0002132.044372-.0008531.53055-.0243144.950595-.4766911.950595-1.0271786 0-.0266606-.000853-.0496953-.00256-.0865936.000427-.0068251.000427-.020262.000427-.0635588 0-5.1926268-4.070748-9.4007319-9.09145-9.4007319-5.020488 0-9.091235 4.2081051-9.091235 9.4007319 0 .3871116.022399.7731567.067838 1.1568557l.00256.0204753.01408.1013102c.250022 1.8683731 1.047233 3.5831812 2.306302 4.9708108-.00064-.0006399.00064.0006399.007253.0078915 1.396026 1.536289 3.291455 2.5833031 5.393601 2.9748936l.02752.0053321v-.0027727l.13653.0228215c.070186.0119439.144211.0236746.243409.039031 2.766879.332724 5.221231-.0661182 7.299484-1.1127057.511777-.2578611.971928-.5423827 1.37064-.8429007.128211-.0968312.243622-.1904632.34346-.2781231.051412-.0452164.092372-.083181.114131-.1051493.468898-.4830897.498124-.6543572.215249-1.0954297-.31146-.4956734-.586228-.9179769-.821744-1.2675504-.082345-.1224254-.154023-.2267215-.214396-.3133151-.033279-.0475624-.033279-.0475624-.054399-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.00256-.0038391c-.256208-.3188605-.431565-.3480805-.715933-.0970445-.030292.0268739-.131624.1051493-.14997.1245582-1.999321 1.775381-4.729508 2.3465571-7.455854 1.7760208-.507724-.1362888-.982595-.3094759-1.419919-.5184948-1.708127-.8565509-2.918343-2.3826022-3.267563-4.1490253l-.02752-.1394881h13.754612zM154.831964 41.1518926c.720831-2.3512494 2.900389-3.9186779 5.44367-3.9186779 2.427657 0 4.739052 1.6486899 5.537747 3.9141989l.054612.1556978h-11.082534l.046505-.1512188zm13.502512 3.4063683c.015146.0006399.015146.0006399.037118.0008531.02176-.0002132.02176-.0002132.044159-.0008531.530543-.0243144.950584-.4766911.950584-1.0271786 0-.0266606-.000854-.0496953-.00256-.0865936.000426-.0068251.000426-.020262.000426-.0635588 0-5.1926268-4.070699-9.4007319-9.091342-9.4007319-5.020217 0-9.091343 4.2081051-9.091343 9.4007319 0 .3871116.022826.7731567.068051 1.1568557l.00256.0204753.01408.1013102c.250019 1.8683731 1.04722 3.5831812 2.306274 4.9708108-.00064-.0006399.00064.0006399.007254.0078915 1.396009 1.536289 3.291417 2.5833031 5.393538 2.9748936l.027519.0053321v-.0027727l.136529.0228215c.070184.0119439.144209.0236746.243619.039031 2.766847.332724 5.22117-.0661182 7.299185-1.1127057.511771-.2578611.971917-.5423827 1.370624-.8429007.128209-.0968312.243619-.1904632.343456-.2781231.051412-.0452164.09237-.083181.11413-.1051493.468892-.4830897.498118-.6543572.215246-1.0954297-.311457-.4956734-.586221-.9179769-.821734-1.2675504-.082344-.1224254-.154022-.2267215-.21418-.3133151-.033492-.0475624-.033492-.0475624-.054612-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.002346-.0038391c-.256419-.3188605-.431774-.3480805-.716138-.0970445-.030292.0268739-.131623.1051493-.149969.1245582-1.999084 1.775381-4.729452 2.3465571-7.455767 1.7760208-.507717-.1362888-.982582-.3094759-1.419902-.5184948-1.708107-.8565509-2.918095-2.3826022-3.267311-4.1490253l-.027733-.1394881h13.754451zM138.32144123 49.7357905c-3.38129629 0-6.14681004-2.6808521-6.23169343-6.04042014v-.31621743c.08401943-3.35418649 2.85039714-6.03546919 6.23169343-6.03546919 3.44242097 0 6.23320537 2.7740599 6.23320537 6.1960534 0 3.42199346-2.7907844 6.19605336-6.23320537 6.19605336m.00172791-15.67913203c-2.21776751 0-4.33682838.7553485-6.03989586 2.140764l-.19352548.1573553V34.6208558c0-.4623792-.0993546-.56419733-.56740117-.56419733h-2.17651376c-.47409424 0-.56761716.09428403-.56761716.56419733v27.6400724c0 .4539841.10583425.5641973.56761716.5641973h2.17651376c.46351081 0 .56740117-.1078454.56740117-.5641973V50.734168l.19352548.1573553c1.70328347 1.3856307 3.82234434 2.1409792 6.03989586 2.1409792 5.27140956 0 9.54473746-4.2479474 9.54473746-9.48802964 0-5.239867-4.2733279-9.48781439-9.54473746-9.48781439M115.907646 49.5240292c-3.449458 0-6.245805-2.7496948-6.245805-6.1425854 0-3.3928907 2.79656-6.1427988 6.245805-6.1427988 3.448821 0 6.24538 2.7499081 6.24538 6.1427988 0 3.3926772-2.796346 6.1425854-6.24538 6.1425854m.001914-15.5438312c-5.28187 0-9.563025 4.2112903-9.563025 9.4059406 0 5.1944369 4.281155 9.4059406 9.563025 9.4059406 5.281657 0 9.562387-4.2115037 9.562387-9.4059406 0-5.1946503-4.280517-9.4059406-9.562387-9.4059406M94.5919049 34.1890939c-1.9281307 0-3.7938902.6198995-5.3417715 1.7656047l-.188189.1393105V23.2574169c0-.4254677-.1395825-.5643476-.5649971-.5643476h-2.2782698c-.4600414 0-.5652122.1100273-.5652122.5643476v29.2834155c0 .443339.1135587.5647782.5652122.5647782h2.2782698c.4226187 0 .5649971-.1457701.5649971-.5647782v-9.5648406c.023658-3.011002 2.4931278-5.4412923 5.5299605-5.4412923 3.0445753 0 5.516841 2.4421328 5.5297454 5.4630394v9.5430935c0 .4844647.0806524.5645628.5652122.5645628h2.2726775c.481764 0 .565212-.0824666.565212-.5645628v-9.5710848c-.018066-4.8280677-4.0440197-8.7806537-8.9328471-8.7806537M62.8459442 47.7938061l-.0053397.0081519c-.3248668.4921188-.4609221.6991347-.5369593.8179812-.2560916.3812097-.224267.551113.1668119.8816949.91266.7358184 2.0858968 1.508535 2.8774525 1.8955369 2.2023021 1.076912 4.5810275 1.646045 7.1017886 1.6975309 1.6283921.0821628 3.6734936-.3050536 5.1963734-.9842376 2.7569891-1.2298679 4.5131066-3.6269626 4.8208863-6.5794607.4985136-4.7841067-2.6143125-7.7747902-10.6321784-10.1849709l-.0021359-.0006435c-3.7356476-1.2047686-5.4904836-2.8064071-5.4911243-5.0426086.1099976-2.4715346 2.4015793-4.3179454 5.4932602-4.4331449 2.4904317.0062212 4.6923065.6675996 6.8557356 2.0598624.4562232.2767364.666607.2256796.9733188-.172263.035242-.0587797.1332787-.2012238.543367-.790093l.0012815-.0019308c.3829626-.5500403.5089793-.7336731.5403767-.7879478.258441-.4863266.2214903-.6738208-.244985-1.0046173-.459427-.3290803-1.7535544-1.0024722-2.4936356-1.2978721-2.0583439-.8211991-4.1863175-1.2199998-6.3042524-1.1788111-4.8198184.1046878-8.578747 3.2393171-8.8265087 7.3515337-.1572005 2.9703036 1.350301 5.3588174 4.5000778 7.124567.8829712.4661613 4.1115618 1.6865902 5.6184225 2.1278667 4.2847814 1.2547527 6.5186944 3.5630343 6.0571315 6.2864205-.4192725 2.4743234-3.0117991 4.1199394-6.6498372 4.2325647-2.6382344-.0549182-5.2963324-1.0217793-7.6043603-2.7562084-.0115337-.0083664-.0700567-.0519149-.1779185-.1323615-.1516472-.1130543-.1516472-.1130543-.1742875-.1300017-.4705335-.3247898-.7473431-.2977598-1.0346184.1302162-.0346012.0529875-.3919333.5963776-.5681431.8632459"
                                        ></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="header__search">
                            <div class="header__search-input-wrap">
                                <input type="text" class="header__search-input" placeholder="Nhập để tìm kiếm sản phẩm">
                                
                                <!-- Search history -->
                                <div class="header__search-history">
                                    <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                    <ul class="header__search-history-list">
                                        <li class="header__search-history-item">
                                            <a href="">Kem dưỡng da</a>
                                        </li>
                                        <li class="header__search-history-item">
                                            <a href="">Kem trị mụn</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header__search-select">
                                <span class="header__search-select-label">
                                    Trong Shop
                                </span>
                                <i class="header__search-select-icon fa-solid fa-angle-down"></i>

                                <ul class="header__search-option">
                                    <li class="header__search-option-item header__search-option-item--active">
                                        <span>Trong Shop</span>
                                        <i class="fa-solid fa-check"></i>
                                    </li>
                                    <li class="header__search-option-item">
                                        <span>Ngoài Shop</span>
                                        <i class="fa-solid fa-check"></i>
                                    </li>
                                </ul>
                            </div>
                            <button class="header__search-btn">
                                <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>

                        <!--Cart layout-->
                        <div class="header__cart">
                            <div class="header__cart-wrap">
                                <i class="header-cart-icon fa-solid fa-cart-shopping"></i>

                                <span class="header__cart-notice">3</span>
                                
                                <!-- No cart: header__cart--no-cart -->
                                <div class="header__cart-list ">
                                    <img src="../img/no-cart.png" alt="no product" class="header__cart-no-cart-img">
                                    <p class="header__cart-list-no-cart-msg">
                                        Chưa có sản phẩm
                                    </p>

                                    <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                                    <ul class="header__cart-list-item">
                                        <!-- Cart item-->
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắtBộ kem đặc trị vùng mắtBộ kem đặc trị vùng mắtBộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="header__cart-item">
                                            <img src="https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn" alt="" class="header__cart-img">
                                            <div class="header__cart-item-info">
                                                <div class="header__cart-item-head">
                                                    <h5 class="header__cart-item-name">
                                                        Bộ kem đặc trị vùng mắt
                                                    </h5>
                                                    <div class="header__cart-item-price-wrap">
                                                        <span class="header__cart-item-price">2.000.000đ</span>
                                                        <span class="header__cart-item-multiply">x</span>
                                                        <span class="header__cart-item-qnt">2</span>
                                                    </div>
                                                </div>
                                                <div class="header__cart-item-body">
                                                    <span class="header__cart-item-description">Phân loại: Bạc</span>
                                                    <span class="header__cart-item-remove">Xóa</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <a class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="app__container">
                <div class="grid">
                    <div class="grid__row app__content">
                        <div class="grid__column-2">
                            <nav class="category">
                                <h3 class="category__heading">
                                    <!-- <i class="category__heading-icon fa-solid fa-list"></i> -->
                                    Danh Mục
                                </h3>
            
                                <ul class="category-list">
                                    <li class="category-item category-item--active">
                                        <a href="#" class="category-item__link">Trang điểm mặt</a>
                                    </li>
                                    <li class="category-item">
                                        <a href="#" class="category-item__link">Trang điểm mắt</a>
                                    </li>
                                    <li class="category-item">
                                        <a href="#" class="category-item__link">Trang điểm môi</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
    
                        <div class="grid__column-10">
                            <div class="home-filter">
                                <span class="home-filter__label">Sắp xếp theo</span>
                                <button class="home-filter__btn btn-background-w btn">Phổ biến</button>
                                <button class="home-filter__btn btn-background-w btn btn--primary">Mới nhất</button>
                                <button class="home-filter__btn btn-background-w btn">Bán chạy</button>

                                <div class="select-input">
                                    <span class="select-input__label">Giá</span>
                                    <i class="select-input__icon fa-solid fa-angle-down"></i>

                                    <!-- list option -->
                                    <ul class="select-input__list">
                                        <li class="select-input__item">
                                            <a href="" class="select-input__link">Giá: Thấp đến cao</a>
                                        </li>
                                        <li class="select-input__item">
                                            <a href="" class="select-input__link">Giá: Cao đến Thấp</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="home-filter__page">
                                    <span class="home-filter__page-num">
                                        <span class="home-filter__page-current">1</span>/14
                                    </span>
                                    <div class="home-filter__page-control">
                                        <a href="#" class="home-filter__page-btn home-filter__page-btn--disabled">
                                            <i class="home-filter__page-icon "></i>
                                        </a>
                                        <a href="" class="home-filter__page-btn">
                                            <i class="home-filter__page-icon fa-solid fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="home-product">
                                <div class="grid__row">
                                    <!-- Product Item-->
                                    <div class="grid__column-2-4">
                                        <a class="home-product-item" href="#">
                                            <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn);" ></div>
                                            <h4 class="home-product-item__name">[Quà tặng không bán] Bộ 5 bước cải thiện nếp nhăn ngăn lão hóa OHUI Age Recovery Miniature Kit</h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">1.200.000đ</span>
                                                <span class="home-product-item__price-current">990.000đ</span>
                                            </div>
                                            <div class="home-product-item__action">
                                                <span class="home-product-item__like home-product-item__like--liked">
                                                    <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                    <i class="home-product-item__like-icon-fill fa-solid fa-heart "></i>
                                                </span>
                                                <div class="home-product-item__rating">
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <span class="home-product-item__sold">88 đã bán</span>
                                                </div>
                                            </div>
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">Whoo</span>
                                                <span class="home-product-item__origin-name">Hàn Quốc</span>
                                            </div>
                                            <div class="home-product-item__favorite">
                                                <i class="fa-solid fa-check"></i>
                                                <span>Yêu Thích</span>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">43%</span>
                                                <span class="home-product-item__sale-off-label">GIẢM</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a class="home-product-item" href="#">
                                            <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn);" ></div>
                                            <h4 class="home-product-item__name">[Quà tặng không bán] Bộ 5 bước cải thiện nếp nhăn ngăn lão hóa OHUI Age Recovery Miniature Kit</h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">1.200.000đ</span>
                                                <span class="home-product-item__price-current">990.000đ</span>
                                            </div>
                                            <div class="home-product-item__action">
                                                <span class="home-product-item__like home-product-item__like--liked">
                                                    <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                    <i class="home-product-item__like-icon-fill fa-solid fa-heart "></i>
                                                </span>
                                                <div class="home-product-item__rating">
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <span class="home-product-item__sold">88 đã bán</span>
                                                </div>
                                            </div>
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">Whoo</span>
                                                <span class="home-product-item__origin-name">Hàn Quốc</span>
                                            </div>
                                            <div class="home-product-item__favorite">
                                                <i class="fa-solid fa-check"></i>
                                                <span>Yêu Thích</span>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">43%</span>
                                                <span class="home-product-item__sale-off-label">GIẢM</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a class="home-product-item" href="#">
                                            <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn);" ></div>
                                            <h4 class="home-product-item__name">[Quà tặng không bán] Bộ 5 bước cải thiện nếp nhăn ngăn lão hóa OHUI Age Recovery Miniature Kit</h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">1.200.000đ</span>
                                                <span class="home-product-item__price-current">990.000đ</span>
                                            </div>
                                            <div class="home-product-item__action">
                                                <span class="home-product-item__like home-product-item__like--liked">
                                                    <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                    <i class="home-product-item__like-icon-fill fa-solid fa-heart "></i>
                                                </span>
                                                <div class="home-product-item__rating">
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <span class="home-product-item__sold">88 đã bán</span>
                                                </div>
                                            </div>
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">Whoo</span>
                                                <span class="home-product-item__origin-name">Hàn Quốc</span>
                                            </div>
                                            <div class="home-product-item__favorite">
                                                <i class="fa-solid fa-check"></i>
                                                <span>Yêu Thích</span>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">43%</span>
                                                <span class="home-product-item__sale-off-label">GIẢM</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a class="home-product-item" href="#">
                                            <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn);" ></div>
                                            <h4 class="home-product-item__name">[Quà tặng không bán] Bộ 5 bước cải thiện nếp nhăn ngăn lão hóa OHUI Age Recovery Miniature Kit</h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">1.200.000đ</span>
                                                <span class="home-product-item__price-current">990.000đ</span>
                                            </div>
                                            <div class="home-product-item__action">
                                                <span class="home-product-item__like home-product-item__like--liked">
                                                    <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                    <i class="home-product-item__like-icon-fill fa-solid fa-heart "></i>
                                                </span>
                                                <div class="home-product-item__rating">
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <span class="home-product-item__sold">88 đã bán</span>
                                                </div>
                                            </div>
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">Whoo</span>
                                                <span class="home-product-item__origin-name">Hàn Quốc</span>
                                            </div>
                                            <div class="home-product-item__favorite">
                                                <i class="fa-solid fa-check"></i>
                                                <span>Yêu Thích</span>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">43%</span>
                                                <span class="home-product-item__sale-off-label">GIẢM</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a class="home-product-item" href="#">
                                            <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn);" ></div>
                                            <h4 class="home-product-item__name">[Quà tặng không bán] Bộ 5 bước cải thiện nếp nhăn ngăn lão hóa OHUI Age Recovery Miniature Kit</h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">1.200.000đ</span>
                                                <span class="home-product-item__price-current">990.000đ</span>
                                            </div>
                                            <div class="home-product-item__action">
                                                <span class="home-product-item__like home-product-item__like--liked">
                                                    <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                    <i class="home-product-item__like-icon-fill fa-solid fa-heart "></i>
                                                </span>
                                                <div class="home-product-item__rating">
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <span class="home-product-item__sold">88 đã bán</span>
                                                </div>
                                            </div>
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">Whoo</span>
                                                <span class="home-product-item__origin-name">Hàn Quốc</span>
                                            </div>
                                            <div class="home-product-item__favorite">
                                                <i class="fa-solid fa-check"></i>
                                                <span>Yêu Thích</span>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">43%</span>
                                                <span class="home-product-item__sale-off-label">GIẢM</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a class="home-product-item" href="#">
                                            <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn);" ></div>
                                            <h4 class="home-product-item__name">[Quà tặng không bán] Bộ 5 bước cải thiện nếp nhăn ngăn lão hóa OHUI Age Recovery Miniature Kit</h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">1.200.000đ</span>
                                                <span class="home-product-item__price-current">990.000đ</span>
                                            </div>
                                            <div class="home-product-item__action">
                                                <span class="home-product-item__like home-product-item__like--liked">
                                                    <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                    <i class="home-product-item__like-icon-fill fa-solid fa-heart "></i>
                                                </span>
                                                <div class="home-product-item__rating">
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <span class="home-product-item__sold">88 đã bán</span>
                                                </div>
                                            </div>
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">Whoo</span>
                                                <span class="home-product-item__origin-name">Hàn Quốc</span>
                                            </div>
                                            <div class="home-product-item__favorite">
                                                <i class="fa-solid fa-check"></i>
                                                <span>Yêu Thích</span>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">43%</span>
                                                <span class="home-product-item__sale-off-label">GIẢM</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a class="home-product-item" href="#">
                                            <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn);" ></div>
                                            <h4 class="home-product-item__name">[Quà tặng không bán] Bộ 5 bước cải thiện nếp nhăn ngăn lão hóa OHUI Age Recovery Miniature Kit</h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">1.200.000đ</span>
                                                <span class="home-product-item__price-current">990.000đ</span>
                                            </div>
                                            <div class="home-product-item__action">
                                                <span class="home-product-item__like home-product-item__like--liked">
                                                    <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                    <i class="home-product-item__like-icon-fill fa-solid fa-heart "></i>
                                                </span>
                                                <div class="home-product-item__rating">
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <span class="home-product-item__sold">88 đã bán</span>
                                                </div>
                                            </div>
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">Whoo</span>
                                                <span class="home-product-item__origin-name">Hàn Quốc</span>
                                            </div>
                                            <div class="home-product-item__favorite">
                                                <i class="fa-solid fa-check"></i>
                                                <span>Yêu Thích</span>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">43%</span>
                                                <span class="home-product-item__sale-off-label">GIẢM</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a class="home-product-item" href="#">
                                            <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn);" ></div>
                                            <h4 class="home-product-item__name">[Quà tặng không bán] Bộ 5 bước cải thiện nếp nhăn ngăn lão hóa OHUI Age Recovery Miniature Kit</h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">1.200.000đ</span>
                                                <span class="home-product-item__price-current">990.000đ</span>
                                            </div>
                                            <div class="home-product-item__action">
                                                <span class="home-product-item__like home-product-item__like--liked">
                                                    <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                    <i class="home-product-item__like-icon-fill fa-solid fa-heart "></i>
                                                </span>
                                                <div class="home-product-item__rating">
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <span class="home-product-item__sold">88 đã bán</span>
                                                </div>
                                            </div>
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">Whoo</span>
                                                <span class="home-product-item__origin-name">Hàn Quốc</span>
                                            </div>
                                            <div class="home-product-item__favorite">
                                                <i class="fa-solid fa-check"></i>
                                                <span>Yêu Thích</span>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">43%</span>
                                                <span class="home-product-item__sale-off-label">GIẢM</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a class="home-product-item" href="#">
                                            <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn);" ></div>
                                            <h4 class="home-product-item__name">[Quà tặng không bán] Bộ 5 bước cải thiện nếp nhăn ngăn lão hóa OHUI Age Recovery Miniature Kit</h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">1.200.000đ</span>
                                                <span class="home-product-item__price-current">990.000đ</span>
                                            </div>
                                            <div class="home-product-item__action">
                                                <span class="home-product-item__like home-product-item__like--liked">
                                                    <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                    <i class="home-product-item__like-icon-fill fa-solid fa-heart "></i>
                                                </span>
                                                <div class="home-product-item__rating">
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <span class="home-product-item__sold">88 đã bán</span>
                                                </div>
                                            </div>
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">Whoo</span>
                                                <span class="home-product-item__origin-name">Hàn Quốc</span>
                                            </div>
                                            <div class="home-product-item__favorite">
                                                <i class="fa-solid fa-check"></i>
                                                <span>Yêu Thích</span>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">43%</span>
                                                <span class="home-product-item__sale-off-label">GIẢM</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a class="home-product-item" href="#">
                                            <div class="home-product-item__img" style="background-image: url(https://cf.shopee.vn/file/b8d51a7e27063dba5baf42d5737f42a4_tn);" ></div>
                                            <h4 class="home-product-item__name">[Quà tặng không bán] Bộ 5 bước cải thiện nếp nhăn ngăn lão hóa OHUI Age Recovery Miniature Kit</h4>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">1.200.000đ</span>
                                                <span class="home-product-item__price-current">990.000đ</span>
                                            </div>
                                            <div class="home-product-item__action">
                                                <span class="home-product-item__like home-product-item__like--liked">
                                                    <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                    <i class="home-product-item__like-icon-fill fa-solid fa-heart "></i>
                                                </span>
                                                <div class="home-product-item__rating">
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                                    <span class="home-product-item__sold">88 đã bán</span>
                                                </div>
                                            </div>
                                            <div class="home-product-item__origin">
                                                <span class="home-product-item__brand">Whoo</span>
                                                <span class="home-product-item__origin-name">Hàn Quốc</span>
                                            </div>
                                            <div class="home-product-item__favorite">
                                                <i class="fa-solid fa-check"></i>
                                                <span>Yêu Thích</span>
                                            </div>
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">43%</span>
                                                <span class="home-product-item__sale-off-label">GIẢM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <ul class="pagination home-product__pagination">
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">
                                        <i class="pagination-item__icon fa-solid fa-angle-left">
                                        </i>
                                    </a>
                                </li>
                                <li class="pagination-item pagination-item--active">
                                    <a href="" class="pagination-item__link">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">...</a>
                                </li>
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">14</a>
                                </li>
                                <li class="pagination-item">
                                    <a href="" class="pagination-item__link">
                                        <i class="pagination-item__icon fa-solid fa-angle-right">
                                        </i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-2-4">
                            <h3 class="footer__heading">Chăm sóc khách hàng</h3>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Trung tâm trợ giúp</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Lmao-shop Mall</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Hướng dẫn mua hàng</a>
                                </li>
                            </ul>
                        </div>
                        <div class="grid__column-2-4">
                            <h3 class="footer__heading">Giới thiệu</h3>
                            
                        </div>
                        <div class="grid__column-2-4">
                            <h3 class="footer__heading">Danh mục</h3>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Trang điểm mặt</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Trang điểm mắt</a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">Trang điểm môi</a>
                                </li>
                            </ul>
                        </div>
                        <div class="grid__column-2-4">
                            <h3 class="footer__heading">Theo dõi</h3>
                            <ul class="footer-list">
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        <i class="footer-item__icon fa-brands fa-facebook"></i>
                                        Facebook
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        <i class="footer-item__icon fa-brands fa-instagram"></i>
                                        Instagram
                                    </a>
                                </li>
                                <li class="footer-item">
                                    <a href="" class="footer-item__link">
                                        <i class="footer-item__icon fa-brands fa-linkedin"></i>
                                        Linked
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="grid__column-2-4">
                            <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
                            <div class="footer__download">
                                <img src="../img/qr_code.png" alt="Download QR" class="footer__dowload-qr">
                                <div class="footer__download-apps">
                                    <a href="" class="footer__download-app-link">
                                        <img src="../img/google_play.png" alt="Google Play" class="footer__download-app-img">
                                    </a>
                                    <a href="" class="footer__download-app-link">
                                        <img src="../img/app_store.png" alt="Apple store" class="footer__download-app-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
