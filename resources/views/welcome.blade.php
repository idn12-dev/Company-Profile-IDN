<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inovasi Digital Nusantara</title>
    <!-- Tambahkan Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('images/logo.png') }}">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gradient-to-br from-[#f4f9ff] via-[#f7f7f7] to-[#fdf6f0]">

    

    <!-- Navbar -->
<header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-6 md:px-12 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <img src="{{ asset('images/logo.png') }}" alt="IDNlogo" class="h-[56px] md:h-[72px]">
        </div>

        <!-- Menu Desktop -->
        <nav class="hidden md:flex items-center gap-8 text-gray-800 font-medium">
            <a href="{{ url('/#beranda') }}" class="relative hover:text-orange-500 transition duration-200 after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-orange-500 hover:after:w-full after:transition-all after:duration-300">Beranda</a>
            <a href="{{ url('/#harga') }}" class="relative hover:text-orange-500 transition duration-200 after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-orange-500 hover:after:w-full after:transition-all after:duration-300">Harga/Paket</a>

            <!-- Dropdown -->
            <div class="relative group">
                <button class="flex items-center gap-1 py-2 px-3 hover:text-orange-500 transition duration-200">
                    Layanan
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover:rotate-180 duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute left-0 mt-2 w-56 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition duration-300 transform scale-95 group-hover:scale-100">
                    <a href="#company-profile" class="block px-4 py-2 hover:bg-orange-50 hover:text-orange-500 transition">Website Company Profile</a>
                    <a href="#ecommerce" class="block px-4 py-2 hover:bg-orange-50 hover:text-orange-500 transition">Website E-Commerce</a>
                    <a href="#landing-page" class="block px-4 py-2 hover:bg-orange-50 hover:text-orange-500 transition">Landing Page</a>
                    <a href="#custom" class="block px-4 py-2 hover:bg-orange-50 hover:text-orange-500 transition">Custom Website</a>
                </div>
            </div>

            <a href="#" class="relative hover:text-orange-500 transition duration-200 after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-orange-500 hover:after:w-full after:transition-all after:duration-300">Tentang Kami</a>
            <a href="{{ url('/#faqs') }}" class="relative hover:text-orange-500 transition duration-200 after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-orange-500 hover:after:w-full after:transition-all after:duration-300">FAQs</a>
            <a href="{{ route ('login') }}" class="relative hover:text-orange-500 transition duration-200 after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-orange-500 hover:after:w-full after:transition-all after:duration-300">Login</a>
        </nav>

        <!-- Button Desktop -->
        <a href="https://tawk.to/chat/689f91c018d27d1925752e9a/1j2nl2m3v" target="_blank"
            class="hidden md:inline-block border border-orange-500 text-orange-500 px-4 py-2 rounded-lg font-semibold hover:bg-orange-500 hover:text-white transition duration-300">
            Konsultasi Gratis
        </a>

        <!-- Tombol Mobile -->
        <button id="menu-btn" class="md:hidden text-3xl text-gray-700 focus:outline-none">
            ☰
        </button>
    </div>
</header>

<!-- Sidebar Mobile -->
<div id="sidebar"
    class="fixed top-0 left-0 w-64 h-full bg-gray-500 shadow-lg transform -translate-x-full transition-transform duration-300 z-50">
    <div class="p-4 flex justify-between items-center border-b border-blue-500">
        <img src="{{ asset('images/logo.png') }}" alt="IDNlogo" class="h-[48px]">
        <button id="close-btn" class="text-2xl text-white">✕</button>
    </div>
    <ul class="p-4 space-y-4 text-white font-medium">
        <li><a href="{{ url('/#beranda') }}" class="block hover:text-orange-500 transition">Beranda</a></li>
        <li><a href="{{ url('/#harga') }}" class="block hover:text-orange-500 transition">Harga/Paket</a></li>
        <li><a href="#company-profile" class="block hover:text-orange-500 transition">Website Company Profile</a></li>
        <li><a href="#ecommerce" class="block hover:text-orange-500 transition">Website E-Commerce</a></li>
        <li><a href="#landing-page" class="block hover:text-orange-500 transition">Landing Page</a></li>
        <li><a href="#custom" class="block hover:text-orange-500 transition">Custom Website</a></li>
        <li><a href="#" class="block hover:text-orange-500 transition">Tentang Kami</a></li>
        <li><a href="{{ url('/#faqs') }}" class="block hover:text-orange-500 transition">FAQs</a></li>
        <li><a href="{{ route ('login') }}" class="block hover:text-orange-500 transition">Login</a></li>
        <li>
            <a href="https://tawk.to/chat/689f91c018d27d1925752e9a/1j2nl2m3v" target="_blank"
                class="block border border-orange-500 text-orange-500 px-4 py-2 rounded-lg font-semibold hover:bg-orange-500 hover:text-white transition duration-300">
                Konsultasi Gratis
            </a>
        </li>
    </ul>
</div>

<!-- Overlay -->
<div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40"></div>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const closeBtn = document.getElementById('close-btn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    // buka sidebar
    menuBtn.addEventListener('click', () => {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
    });

    // tutup sidebar (pakai tombol X)
    closeBtn.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });

    // tutup sidebar (klik overlay)
    overlay.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });

    // tutup sidebar ketika menu diklik
    document.querySelectorAll('#sidebar a').forEach(link => {
        link.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });
    });
</script>

 <br>
    <br>
    <br>
    <br>

    {{-- hero section --}}
    <style>
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeOutDown {
            0% {
                opacity: 1;
                transform: translateY(0);
            }

            100% {
                opacity: 0;
                transform: translateY(30px);
            }
        }

        .fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }

        .fade-in-up-delay {
            animation: fadeInUp 1.2s ease-out forwards;
        }

        /* Fade out class (bisa dipanggil pakai JS) */

    </style>

    <!-- Hero Section -->
    <section id="beranda" class="max-w-7xl mx-auto px-12 py-8 md:py-10 mt-4 grid md:grid-cols-2 gap-8 items-center">

        <!-- Left Content -->
        <div id="heroText" class="fade-in-up">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-6">
                Jasa Pembuatan Website Profesional untuk Bisnis Anda
            </h1>
            <p class="text-gray-700 mb-6 leading-relaxed">
                Kami menyediakan layanan pembuatan website modern, responsif, yang siap membantu bisnis Anda tampil profesional di dunia digital.
                Dari website perusahaan, toko online, hingga landing page promosi. semua bisa kami buat sesuai kebutuhan Anda.
            </p>
            <p class="font-semibold text-gray-800 mb-7">Ingin tahu lebih lanjut?</p>
            <a href="#kontak" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold shadow-lg transition">
                Pelajari Selengkapnya
            </a>
        </div>

        <!-- Right Image -->
        <div id="heroImage" class="flex justify-center fade-in-up-delay">
            <div class="overflow-hidden">
                <img src="{{ asset('images/banner-1.png') }}" alt="banner-1" class="w-3/4 h-auto object-cover mx-auto">            </div>
        </div>
    </section>

    <script>
        // Contoh: fade-out saat scroll ke bawah
        window.addEventListener("scroll", function() {
            let heroText = document.getElementById("heroText");
            let heroImage = document.getElementById("heroImage");

            if (window.scrollY > 150) {
                heroText.classList.add("fade-out-down");
                heroImage.classList.add("fade-out-down");
            } else {
                heroText.classList.remove("fade-out-down");
                heroImage.classList.remove("fade-out-down");
            }
        });

    </script>

    {{-- promosi --}}
    <style>
        @keyframes slideInRight {
            0% {
                opacity: 0;
                transform: translateX(50px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideOutLeft {
            0% {
                opacity: 1;
                transform: translateX(0);
            }

            100% {
                opacity: 0;
                transform: translateX(-50px);
            }
        }

        .slide-in-right {
            animation: slideInRight 1s ease-out forwards;
        }

        .slide-out-left {
            animation: slideOutLeft 1s ease-in forwards;
        }

        .hidden-section {
            opacity: 0;
        }

    </style>

    <!-- Section Promosi -->
    <section id="promosi" class="text-center px-6 py-16 max-w-5xl mx-auto hidden-section">
        <!-- Judul -->
        <h2 class="text-3xl md:text-4xl font-extrabold text-blue-700 leading-snug">
            Jasa Pembuatan Website dengan IDN,<br>
            Solusi Cara Membuat Website Mudah
        </h2>

        <!-- Deskripsi -->
        <p class="mt-4 text-gray-600 max-w-3xl mx-auto leading-relaxed">
            Kamu nggak perlu pusing mikirin prosesnya. IDN akan membuat website kamu sesuai dengan kebutuhan untuk menunjang prospek perusahaanmu.
            Nikmati harga paling murah mulai dari<span class="font-bold text-gray-800"> Rp250.000,-/bulan</span>.<br>
            GRATIS Domain dan Hosting!
        </p>

        <!-- Gambar -->
        <div class="mt-10 flex justify-center">
            <div class="relative w-full md:w-[700px] rounded-xl overflow-hidden shadow-lg">
                <video controls class="w-full h-auto">
                      <source src="{{ asset('videos/videoIDN.mp4') }}" type="video/mp4">
                    Browser kamu tidak mendukung video HTML5.
                </video>
            </div>
        </div>
    </section>

    <script>
        // Observer untuk animasi saat scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('slide-in-right');
                    entry.target.classList.remove('hidden-section');
                } else {
                    entry.target.classList.remove('slide-in-right');
                    entry.target.classList.add('hidden-section');
                }
            });
        }, {
            threshold: 0.2
        }); // 20% bagian terlihat baru animasi jalan

        observer.observe(document.getElementById("promosi"));

    </script>


    {{-- section harga --}}
    <style>
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            opacity: 0;
            transform: translateY(50px);
        }

        .fade-in-up.active {
            animation: fadeInUp 0.8s ease-out forwards;
        }

    </style>

    <!-- Section Harga -->
    <section class="bg-white py-16 px-6 md:px-12 fade-in-up" id="harga">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-12">Paket Harga</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Paket Starter -->
                <div class="border-2 border-blue-200 rounded-xl p-6 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-xl font-bold text-blue-800 mb-2">Starter</h3>
                    <p class="line-through text-red-500">Rp5.000.000</p>
                    <p class="text-4xl mb-2 font-bold text-blue-700">Rp1.700.000</p>
                    <p class="text-gray-500 mb-4"> <span class="font-semibold text-green-600">Free</span> Hosting 1 Tahun </p>
                    <a href="#" class="block bg-blue-700 text-white py-2 rounded-lg font-semibold hover:bg-blue-800 transition">
                        Beli Sekarang
                    </a>
                    <div class="mt-4 flex justify-center">
                        <span class="border border-orange-500 text-orange-500 text-sm px-3 py-1 rounded-full">5 Hari Pengerjaan</span>
                    </div>
                    <ul class="mt-6 space-y-2 text-left text-sm">
                        <li>✅ Desain siap pakai, cepat jadi</li>
                        <li>✅ Form kontak <span class="font-semibold text-green-600">sederhana</span></li>
                        <li>✅ Link ke media sosial</li>
                        <li>✅ 1 kali Revisi</li>
                    </ul>
                </div>

                <!-- Paket Medium -->
                <div class="border-2 border-blue-200 rounded-xl p-6 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-xl font-bold text-blue-800 mb-2">Medium</h3>
                    <p class="line-through text-red-500">Rp8.700.000</p>
                    <p class="text-4xl mb-2 font-bold text-blue-700">Rp5.700.000</p>
                    <p class="text-gray-500 mb-4"> <span class="font-semibold text-green-600">Free</span> Hosting 1 Tahun </p>
                    <a href="#" class="block bg-blue-700 text-white py-2 rounded-lg font-semibold hover:bg-blue-800 transition">
                        Beli Sekarang
                    </a>
                    <div class="mt-4 flex justify-center gap-2">
                        <span class="border border-orange-500 text-orange-500 text-sm px-3 py-1 rounded-full">7 Hari Pengerjaan</span>
                    </div>
                    <ul class="mt-6 space-y-2 text-left text-sm">
                        <li>✅ Desain diubah sesuai warna & gaya usaha</li>
                        <li>✅ 5–15 halaman (Home, Produk, Blog, dll.)</li>
                        <li>✅ Bisa update sendiri lewat panel admin</li>
                        <li>✅ Form pendaftaran atau pemesanan</li>
                        <li>✅ Terhubung media sosial, peta lokasi</li>
                    </ul>
                </div>

                <!-- Paket Custom -->
                <div class="border-2 border-blue-200 rounded-xl p-6 shadow-sm hover:shadow-lg transition">
                    <h3 class="text-xl font-bold text-blue-800 mb-2">Custom</h3>
                    <p class="line-through text-red-500">Rp21.000.000</p>
                    <p class="text-4xl mb-2 font-bold text-blue-700">Rp18.700.000</p>
                    <p class="text-gray-500 mb-4"> <span class="font-semibold text-green-600">Free</span> Hosting 1 Tahun </p>
                    <a href="#" class="block bg-blue-700 text-white py-2 rounded-lg font-semibold hover:bg-blue-800 transition">
                        Beli Sekarang
                    </a>
                    <div class="mt-4 flex justify-center gap-2">
                        <span class="border border-orange-500 text-orange-500 text-sm px-3 py-1 rounded-full">14 Hari Pengerjaan</span>
                    </div>
                    <ul class="mt-6 space-y-2 text-left text-sm">
                        <li>✅ Desain khusus, unik, dan beda dari yang lain</li>
                        <li>✅ Halaman sesuai kebutuhan, tanpa batas</li>
                        <li>✅ Bisa update sendiri + fitur tambahan sesuai permintaan</li>
                        <li>✅ Form custom + terhubung ke sistem bisnis</li>
                        <li>✅ Sistem pembayaran, multi bahasa, login member</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const target = document.querySelector("#harga");

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        target.classList.add("active");
                    } else {
                        // hapus class kalau keluar viewport
                        target.classList.remove("active");
                    }
                });
            }, {
                threshold: 0.2
            });

            observer.observe(target);
        });

    </script>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/628978475687" class="fixed bottom-8 right-6 bg-green-500 text-white px-4 py-3 rounded-full flex items-center gap-2 shadow-lg hover:bg-green-600 transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 8.043.003C3.639.003 0 3.64 0 8.043c0 1.417.37 2.8 1.07 4.021L0 16l4.06-1.058a7.98 7.98 0 0 0 3.983 1.048h.004c4.403 0 8.042-3.638 8.042-8.042 0-2.148-.84-4.165-2.388-5.622zM8.043 14.5c-1.34 0-2.646-.36-3.78-1.038l-.27-.16-2.408.627.643-2.348-.157-.24A6.479 6.479 0 0 1 1.5 8.043C1.5 4.47 4.47 1.5 8.043 1.5c1.736 0 3.368.676 4.594 1.902a6.449 6.449 0 0 1 1.906 4.594c0 3.573-2.97 6.504-6.5 6.504z" />
            <path d="M11.603 9.384c-.2-.1-1.178-.578-1.36-.643-.182-.066-.314-.1-.445.1-.132.2-.51.643-.625.775-.115.132-.23.148-.43.05-.2-.1-.843-.31-1.604-.99-.593-.528-.993-1.178-1.108-1.378-.115-.2-.012-.308.088-.408.09-.09.2-.23.3-.345.1-.115.132-.2.2-.332.066-.132.033-.25-.017-.35-.05-.1-.445-1.073-.61-1.468-.16-.385-.323-.333-.445-.34-.115-.007-.25-.007-.383-.007s-.35.05-.532.25c-.182.2-.693.678-.693 1.655 0 .977.71 1.92.81 2.052.1.132 1.397 2.133 3.393 2.99.475.205.845.327 1.134.418.477.152.91.13 1.253.08.383-.057 1.178-.48 1.345-.943.166-.463.166-.86.116-.943-.05-.083-.182-.132-.382-.232z" />
        </svg>
    </a>

    <!-- FAQ Section -->
    <section class="bg-slate-900 text-white py-12" id="faqs">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8 text-center">Pertanyaan yang Sering Diajukan</h2>

            <div class="space-y-4">
                <!-- Item 1 -->
                <div class="faq-item border-b border-slate-700 pb-4">
                    <div class="faq-question flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-medium">Apakah harga sudah termasuk domain dan hosting?</span>
                        <span class="text-2xl">+</span>
                    </div>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 text-slate-300 mt-2">
                        betul, harga sudah termasuk domain dan hosting 1 Tahun.
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="faq-item border-b border-slate-700 pb-4">
                    <div class="faq-question flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-medium">Apakah ada layanan maintenance setelah website jadi?</span>
                        <span class="text-2xl">+</span>
                    </div>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 text-slate-300 mt-2">
                        ada, silahkan hubungi team melalui whatsapp dan kami siap membantu anda.
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="faq-item border-b border-slate-700 pb-4">
                    <div class="faq-question flex justify-between items-center cursor-pointer">
                        <span class="text-lg font-medium">Apakah website saya bisa muncul di Google?</span>
                        <span class="text-2xl">+</span>
                    </div>
                    <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300 text-slate-300 mt-2">
                        Ya, tentu saja bisa.
                        Website yang kami buat sudah dioptimalkan agar bisa terindeks di Google.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll(".faq-question").forEach(question => {
            question.addEventListener("click", () => {
                const item = question.parentElement;
                const answer = item.querySelector(".faq-answer");
                const icon = question.querySelector("span:last-child");

                if (answer.style.maxHeight && answer.style.maxHeight !== "0px") {
                    answer.style.maxHeight = "0";
                    icon.textContent = "+";
                } else {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                    icon.textContent = "-";
                }
            });
        });

    </script>



    <!-- Footer -->
    <footer class="bg-[#0d1321] text-gray-400">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <!-- Copyright -->
            <p class="text-sm">© 2025 Inovasi Digital Nusantara, Inc. All rights reserved.</p>

            <!-- Social Media Icons -->
            <div class="flex space-x-5">
                <!-- Facebook -->
                <a href="#" class="hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12.07C22 6.49 17.52 2 12 2S2 6.49 2 12.07c0 4.84 3.44 8.86 7.94 9.8v-6.93H7.08v-2.87h2.86V9.41c0-2.83 1.69-4.4 4.27-4.4 1.24 0 2.53.22 2.53.22v2.78h-1.43c-1.41 0-1.85.88-1.85 1.78v2.13h3.14l-.5 2.87h-2.64V21.9c4.5-.94 7.94-4.96 7.94-9.83z" />
                    </svg>
                </a>
                <!-- Instagram -->
                <a href="#" class="hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7 2C4.243 2 2 4.243 2 7v10c0 2.757 2.243 5 5 5h10c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5H7zm10 2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3h10zm-5 3a5 5 0 1 0 .001 10.001A5 5 0 0 0 12 7zm0 2a3 3 0 1 1-.001 6.001A3 3 0 0 1 12 9zm4.5-4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                    </svg>
                </a>
                <!-- Twitter / X -->
                <a href="#" class="hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.3 4.3 0 0 0 1.88-2.37 8.59 8.59 0 0 1-2.72 1.04A4.28 4.28 0 0 0 16.11 4c-2.38 0-4.3 1.93-4.3 4.31 0 .34.04.67.11.98-3.58-.18-6.77-1.9-8.9-4.52a4.33 4.33 0 0 0-.58 2.17c0 1.5.76 2.82 1.92 3.6a4.25 4.25 0 0 1-1.94-.54v.05c0 2.09 1.49 3.84 3.46 4.23a4.3 4.3 0 0 1-1.93.07c.54 1.7 2.11 2.94 3.97 2.97A8.6 8.6 0 0 1 2 18.58 12.13 12.13 0 0 0 8.29 20c7.55 0 11.68-6.27 11.68-11.71 0-.18 0-.36-.01-.54A8.4 8.4 0 0 0 22.46 6z" />
                    </svg>
                </a>
                <!-- GitHub -->
                <a href="#" class="hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 .5C5.73.5.5 5.73.5 12.02c0 5.1 3.29 9.43 7.86 10.96.58.1.79-.25.79-.55v-2c-3.2.69-3.87-1.54-3.87-1.54-.53-1.35-1.3-1.71-1.3-1.71-1.06-.73.08-.72.08-.72 1.17.08 1.78 1.21 1.78 1.21 1.04 1.78 2.74 1.26 3.41.96.1-.76.41-1.26.74-1.55-2.55-.29-5.23-1.28-5.23-5.72 0-1.26.45-2.29 1.19-3.1-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.18 1.18a11.1 11.1 0 0 1 5.79 0c2.2-1.49 3.18-1.18 3.18-1.18.63 1.59.23 2.76.11 3.05.74.81 1.19 1.84 1.19 3.1 0 4.45-2.68 5.43-5.24 5.71.42.37.79 1.1.79 2.22v3.29c0 .3.21.65.8.54A10.53 10.53 0 0 0 23.5 12C23.5 5.73 18.27.5 12 .5z" />
                    </svg>
                </a>
                <!-- YouTube -->
                <a href="#" class="hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.5 6.2s-.2-1.6-.8-2.3c-.7-.8-1.5-.8-1.9-.9-2.7-.2-6.7-.2-6.7-.2h-.1s-4 0-6.7.2c-.4 0-1.2.1-1.9.9-.6.7-.8 2.3-.8 2.3S4 8.1 4 10.1v1.8c0 2 .2 3.9.2 3.9s.2 1.6.8 2.3c.7.8 1.7.8 2.1.9 1.5.1 6.5.2 6.5.2s4 0 6.7-.2c.4 0 1.2-.1 1.9-.9.6-.7.8-2.3.8-2.3s.2-1.9.2-3.9v-1.8c0-2-.2-3.9-.2-3.9zM9.75 14.5v-5.1l5.2 2.5-5.2 2.6z" />
                    </svg>
                </a>
            </div>
        </div>
    </footer>


</body>
</html>
