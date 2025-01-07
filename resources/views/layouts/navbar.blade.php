<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title", "RJ CarWash")</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .bg-navbar-black {
            background-color: #000;
        }

        .hover-navbar-black:hover {
            background-color: #333;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .animate-fadeIn { animation: fadeIn 2s; }
    </style>
</head>
<body class="min-h-screen bg-gray-50">
    <!-- Navbar -->
    <nav id="navbar" class="fixed w-full z-50 bg-navbar-black shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="/" class="flex items-center space-x-2">
                    <img src="{{ asset('assets/LOGO_AUTOCARE_TRANSPARENT.png') }}" alt="RJ Carwash Logo" class="w-9 h-9">
                    <span class="text-lg font-bold text-white"></span>
                </a>

                <!-- Mobile menu button -->
                <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-white hover-navbar-black hover:text-yellow-300 transition-colors">Beranda</a>
                    <div class="relative group">
                        <button class="text-white hover-navbar-black hover:text-yellow-300 transition-colors flex items-center">
                            Layanan
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute hidden group-hover:block w-48 bg-navbar-black rounded-md shadow-lg py-1 mt-1">
                            <a href="/layanan/Premium-Wash" class="block px-4 py-2 text-white hover-navbar-black">Premium Wash</a>
                            <a href="/layanan/Interior-Detailing" class="block px-4 py-2 text-white hover-navbar-black">Interior Detailing</a>
                            <a href="/layanan/Exterior-Detailing" class="block px-4 py-2 text-white hover-navbar-black">Exterior Detailing</a>
                            <a href="/layanan/Engine-Detailing" class="block px-4 py-2 text-white hover-navbar-black">Engine Detailing</a>
                            <a href="/layanan/Glass-Detailing" class="block px-4 py-2 text-white hover-navbar-black">Glass Detailing</a>
                        </div>
                    </div>
                    <a href="/#about" class="text-white hover-navbar-black hover:text-yellow-300 transition-colors">Tentang Kami</a>
                    <a href="/#map" class="text-white hover-navbar-black hover:text-yellow-300 transition-colors">Lokasi</a>
                    <a href="/Pricelist/PriceList" class="text-white hover-navbar-black hover:text-yellow-300 transition-colors">Pricelist</a>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-navbar-black">
            <a href="/" class="block px-4 py-2 text-white hover-navbar-black">Beranda</a>
            <button onclick="toggleDropdown()" class="block w-full px-4 py-2 text-left text-white hover-navbar-black">
                Layanan
                <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="mobile-dropdown" class="hidden bg-navbar-black">
                <a href="/layanan/Premium-Wash" class="block px-4 py-2 text-white hover-navbar-black">Premium Wash</a>
                <a href="/layanan/Interior-Detailing" class="block px-4 py-2 text-white hover-navbar-black">Interior Detailing</a>
                <a href="/layanan/Exterior-Detailing" class="block px-4 py-2 text-white hover-navbar-black">Exterior Detailing</a>
                <a href="/layanan/Engine-Detailing" class="block px-4 py-2 text-white hover-navbar-black">Engine Detailing</a>
                <a href="/layanan/Glass-Detailing" class="block px-4 py-2 text-white hover-navbar-black">Glass Detailing</a>
            </div>
            <a href="/#about" class="block px-4 py-2 text-white hover-navbar-black">Tentang Kami</a>
            <a href="/#map" class="block px-4 py-2 text-white hover-navbar-black">Lokasi</a>
            <a href="/Pricelist/PriceList" class="block px-4 py-2 text-white hover-navbar-black">Pricelist</a>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="pt-16">
        @yield("content")
    </div>

    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Mobile Dropdown Toggle
        function toggleDropdown() {
            document.getElementById('mobile-dropdown').classList.toggle('hidden');
        }
    </script>
</body>
</html>
