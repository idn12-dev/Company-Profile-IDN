<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Client | IDN</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex font-sans">

    <!-- Sidebar -->
    <aside class="w-64 bg-indigo-700 text-white flex flex-col shadow-lg">
        <div class="p-6 text-center border-b border-indigo-600">
            <h1 class="text-2xl font-bold">IDN Client</h1>
            <p class="text-sm mt-1">Jasa Pembuatan Website</p>
        </div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="{{ url('/dashboard') }}" class="block px-4 py-2 rounded hover:bg-indigo-600 transition">🏠 Dashboard</a>
            <a href="{{ url('/orders') }}" class="block px-4 py-2 rounded hover:bg-indigo-600 transition">🛒 Pemesanan</a>
            <a href="{{ url('/payments') }}" class="block px-4 py-2 rounded hover:bg-indigo-600 transition">💰 Pembayaran</a>
            <a href="{{ url('/profile') }}" class="block px-4 py-2 rounded hover:bg-indigo-600 transition">👤 Profil</a>

            <!-- Logout POST -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-2 rounded hover:bg-red-600 transition">
                    🚪 Logout
                </button>
            </form>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Dashboard Client</h2>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-lg transition-transform hover:scale-105">
                <h3 class="text-lg font-semibold text-gray-700">Proyek Aktif</h3>
                <p class="text-3xl font-bold text-indigo-600 mt-2">3</p>
            </div>
            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-lg transition-transform hover:scale-105">
                <h3 class="text-lg font-semibold text-gray-700">Pemesanan Baru</h3>
                <p class="text-3xl font-bold text-indigo-600 mt-2">1</p>
            </div>
            <div class="bg-white shadow-md rounded-xl p-6 hover:shadow-lg transition-transform hover:scale-105">
                <h3 class="text-lg font-semibold text-gray-700">Pembayaran Tertunda</h3>
                <p class="text-3xl font-bold text-indigo-600 mt-2">Rp 5.000.000</p>
            </div>
        </div>

        <!-- Tabel Pemesanan Terbaru -->
        <div class="mt-10 bg-white shadow-md rounded-xl p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Pemesanan Terbaru</h3>
            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse">
                    <thead>
                        <tr class="bg-indigo-50 text-gray-700">
                            <th class="px-4 py-2 text-left">Tanggal</th>
                            <th class="px-4 py-2 text-left">Proyek</th>
                            <th class="px-4 py-2 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t hover:bg-indigo-50 transition">
                            <td class="px-4 py-2">15-08-2025</td>
                            <td class="px-4 py-2">Website Profil Perusahaan</td>
                            <td class="px-4 py-2 font-semibold text-green-600">Selesai</td>
                        </tr>
                        <tr class="border-t hover:bg-indigo-50 transition">
                            <td class="px-4 py-2">18-08-2025</td>
                            <td class="px-4 py-2">E-Commerce</td>
                            <td class="px-4 py-2 font-semibold text-yellow-600">Dalam Proses</td>
                        </tr>
                        <tr class="border-t hover:bg-indigo-50 transition">
                            <td class="px-4 py-2">20-08-2025</td>
                            <td class="px-4 py-2">Landing Page Promo</td>
                            <td class="px-4 py-2 font-semibold text-red-600">Menunggu Pembayaran</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
