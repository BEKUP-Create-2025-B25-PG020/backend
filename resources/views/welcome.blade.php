<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantra - Jelajahi Kuliner Nusantara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    {{-- logo --}}
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-white">

    <!-- Navigation -->
    <nav class="bg-white border-b border-gray-100 fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="bg-[#96CD39] w-10 h-10 rounded-xl flex items-center justify-center p-2">
                        <img src="{{ asset('favicon/favicon.svg') }}" alt="Mantra Logo" class="w-full h-full">
                    </div>
                    <span class="text-xl font-bold text-gray-900">Mantra</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#fitur" class="text-gray-600 hover:text-gray-900 font-medium transition">Fitur</a>
                    <a href="#tentang" class="text-gray-600 hover:text-gray-900 font-medium transition">Tentang</a>
                    <a href="#kontak" class="text-gray-600 hover:text-gray-900 font-medium transition">Kontak</a>
                </div>
                <div class="flex items-center">
                    <a href="#"
                        class="bg-[#96CD39] text-white px-6 py-2.5 rounded-xl font-semibold hover:bg-[#85b832] transition">
                        Mulai
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-28 pb-16 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div
                        class="inline-block bg-[#F5FF65] text-gray-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        🍜 Kuliner Nusantara
                    </div>
                    <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                        Jelajahi Makanan
                        <span class="text-[#96CD39]">Tradisional</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Temukan resep dan cerita di balik makanan tradisional Indonesia dari berbagai daerah.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#"
                            class="bg-[#96CD39] text-white px-8 py-4 rounded-xl font-semibold hover:bg-[#85b832] transition text-center">
                            Mulai Jelajah
                        </a>
                        <a href="#tentang"
                            class="bg-gray-100 text-gray-700 px-8 py-4 rounded-xl font-semibold hover:bg-gray-200 transition text-center">
                            Pelajari Lebih
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gray-50 rounded-3xl p-8">
                        <div class="bg-white rounded-2xl p-6 shadow-sm">
                            <div
                                class="aspect-square bg-gradient-to-br from-[#F5FF65] to-[#FFBA47] rounded-2xl flex items-center justify-center p-8">
                                <img src="{{ asset('favicon/favicon.svg') }}" alt="Mantra"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="py-16 px-4 bg-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-3">Fitur Unggulan</h2>
                <p class="text-lg text-gray-600">Semua yang Anda butuhkan untuk eksplorasi kuliner</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                    <div class="bg-[#96CD39] w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Pencarian Cepat</h3>
                    <p class="text-gray-600">Temukan makanan berdasarkan nama, daerah, atau kategori.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                    <div class="bg-[#FFBA47] w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Cerita & Sejarah</h3>
                    <p class="text-gray-600">Pelajari latar belakang setiap makanan tradisional.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-gray-100 hover:shadow-lg transition">
                    <div class="bg-[#FF5B44] w-12 h-12 rounded-xl flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Galeri Foto</h3>
                    <p class="text-gray-600">Koleksi foto makanan dari berbagai daerah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="tentang" class="py-16 px-4">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Tentang Mantra</h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-12 max-w-3xl mx-auto">
                Platform untuk melestarikan dan memperkenalkan kekayaan kuliner tradisional Indonesia
                kepada generasi mendatang.
            </p>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-2xl">
                    <div class="text-4xl font-bold text-[#96CD39] mb-2">100+</div>
                    <div class="text-gray-600 font-medium">Makanan Tradisional</div>
                </div>
                <div class="bg-gray-50 p-8 rounded-2xl">
                    <div class="text-4xl font-bold text-[#FFBA47] mb-2">34</div>
                    <div class="text-gray-600 font-medium">Provinsi Indonesia</div>
                </div>
                <div class="bg-gray-50 p-8 rounded-2xl">
                    <div class="text-4xl font-bold text-[#FF5B44] mb-2">1K+</div>
                    <div class="text-gray-600 font-medium">Cerita Kuliner</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 px-4 bg-gradient-to-br from-[#96CD39] to-[#85b832]">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-white mb-4">Mulai Perjalanan Kuliner Anda</h2>
            <p class="text-lg text-white/90 mb-8">
                Jelajahi ribuan resep dan cerita makanan tradisional Indonesia
            </p>
            <a href="#"
                class="inline-block bg-white text-[#96CD39] px-10 py-4 rounded-xl font-bold text-lg hover:shadow-xl transition">
                Daftar Gratis
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="bg-[#96CD39] w-10 h-10 rounded-xl flex items-center justify-center p-2">
                            <img src="{{ asset('favicon/favicon.svg') }}" alt="Mantra Logo" class="w-full h-full">
                        </div>
                        <span class="text-xl font-bold">Mantra</span>
                    </div>
                    <p class="text-gray-400 text-sm">Melestarikan warisan kuliner Nusantara</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-3">Platform</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-white transition">Fitur</a></li>
                        <li><a href="#" class="hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-3">Legal</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Privasi</a></li>
                        <li><a href="#" class="hover:text-white transition">Syarat</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-3">Ikuti Kami</h4>
                    <div class="flex space-x-3">
                        <a href="#" class="bg-gray-800 p-2.5 rounded-lg hover:bg-[#96CD39] transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="bg-gray-800 p-2.5 rounded-lg hover:bg-[#96CD39] transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z" />
                                <path
                                    d="M12 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-6 text-center text-sm text-gray-400">
                <p>&copy; 2025 Mantra. Dibuat untuk Indonesia.</p>
            </div>
        </div>
    </footer>

</body>

</html>
