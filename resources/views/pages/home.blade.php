<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporKampus - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .floating-gentle {
            animation: floatGentle 8s ease-in-out infinite;
        }

        .floating-gentle:nth-child(2) {
            animation-delay: -2s;
        }

        .floating-gentle:nth-child(3) {
            animation-delay: -4s;
        }

        @keyframes floatGentle {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .nav-item {
            transition: all 0.3s ease;
        }

        .nav-item.active {
            background: rgba(34, 197, 94, 0.1);
            color: #16a34a;
        }

        .notification-badge {
            animation: pulse 2s infinite;
        }

        .stats-counter {
            animation: countUp 2s ease-out;
        }

        @keyframes countUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-green-50 via-blue-50 to-teal-50 relative">
    <!-- Gentle Background Elements -->
    @include('components.bg-elements')
    @include('components.navbar')

    <!-- Navigation -->

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Welcome Hero Section -->
        <div class="mb-8">
            <div class="glass-card rounded-3xl p-8 card-hover">
                <div class="text-center">
                    <div class="mb-6">
                        <div
                            class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-green-100 to-teal-100 rounded-3xl mb-4">
                            <i class="fas fa-graduation-cap text-4xl text-green-600"></i>
                        </div>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Selamat Datang di <span class="text-green-600">LaporKampus</span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-6 max-w-2xl mx-auto">
                        Platform digital yang memfasilitasi mahasiswa untuk melaporkan berbagai keluhan kampus secara
                        transparan dan terorganisir
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button onclick="setActiveNav('lapor')"
                            class="bg-gradient-to-r from-green-500 to-teal-600 text-white px-8 py-3 rounded-xl font-semibold hover:from-green-600 hover:to-teal-700 transform hover:scale-105 transition-all duration-300 flex items-center justify-center">
                            <i class="fas fa-plus mr-2"></i>
                            Buat Laporan Baru
                        </button>
                        <button onclick="setActiveNav('daftar')"
                            class="bg-white/70 text-gray-700 px-8 py-3 rounded-xl font-semibold hover:bg-white/90 border border-gray-200 transform hover:scale-105 transition-all duration-300 flex items-center justify-center">
                            <i class="fas fa-search mr-2"></i>
                            Lihat Laporan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Dashboard -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-8">
            <div class="glass-card rounded-xl p-4 md:p-6 card-hover">
                <div class="text-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-file-alt text-blue-600 text-xl"></i>
                    </div>
                    <p class="text-2xl md:text-3xl font-bold text-gray-800 stats-counter">247</p>
                    <p class="text-sm text-gray-600">Total Laporan</p>
                </div>
            </div>

            <div class="glass-card rounded-xl p-4 md:p-6 card-hover">
                <div class="text-center">
                    <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-clock text-orange-600 text-xl"></i>
                    </div>
                    <p class="text-2xl md:text-3xl font-bold text-orange-600 stats-counter">43</p>
                    <p class="text-sm text-gray-600">Dalam Proses</p>
                </div>
            </div>

            <div class="glass-card rounded-xl p-4 md:p-6 card-hover">
                <div class="text-center">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-check-circle text-green-600 text-xl"></i>
                    </div>
                    <p class="text-2xl md:text-3xl font-bold text-green-600 stats-counter">189</p>
                    <p class="text-sm text-gray-600">Terselesaikan</p>
                </div>
            </div>

            <div class="glass-card rounded-xl p-4 md:p-6 card-hover">
                <div class="text-center">
                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-users text-purple-600 text-xl"></i>
                    </div>
                    <p class="text-2xl md:text-3xl font-bold text-purple-600 stats-counter">1.2k</p>
                    <p class="text-sm text-gray-600">Mahasiswa Aktif</p>
                </div>
            </div>
        </div>

        <!-- Feature Categories -->
        <div class="mb-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Kategori Laporan</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="glass-card rounded-2xl p-6 card-hover text-center">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-building text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Fasilitas Kampus</h4>
                    <p class="text-gray-600 mb-4">AC rusak, WiFi lambat, toilet kotor, dan masalah fasilitas lainnya</p>
                    <div class="flex justify-center space-x-4 text-sm text-gray-500">
                        <span><i class="fas fa-file-alt mr-1"></i>156 laporan</span>
                    </div>
                </div>

                <div class="glass-card rounded-2xl p-6 card-hover text-center">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Layanan Akademik</h4>
                    <p class="text-gray-600 mb-4">Jadwal bentrok, dosen tidak hadir, masalah administrasi</p>
                    <div class="flex justify-center space-x-4 text-sm text-gray-500">
                        <span><i class="fas fa-file-alt mr-1"></i>67 laporan</span>
                    </div>
                </div>

                <div class="glass-card rounded-2xl p-6 card-hover text-center">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Isu Sosial</h4>
                    <p class="text-gray-600 mb-4">Intoleransi, pelecehan, perundungan, dan isu sosial lainnya</p>
                    <div class="flex justify-center space-x-4 text-sm text-gray-500">
                        <span><i class="fas fa-file-alt mr-1"></i>24 laporan</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latest Updates -->
        <div class="glass-card rounded-2xl p-6 md:p-8 mb-8">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800">Update Terbaru</h3>
                <a href="#" onclick="setActiveNav('daftar')"
                    class="text-green-600 hover:text-green-700 font-medium flex items-center">
                    Lihat semua <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="space-y-4">
                <div class="flex items-start space-x-4 p-4 bg-white/60 rounded-xl border border-white/20">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-check text-green-600"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-gray-800">Perbaikan AC Gedung Utama Selesai</h4>
                        <p class="text-sm text-gray-600 mt-1">Laporan mengenai AC yang rusak di lantai 3 gedung utama
                            telah ditindaklanjuti dan diperbaiki</p>
                        <p class="text-xs text-gray-500 mt-2">2 jam yang lalu</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 p-4 bg-white/60 rounded-xl border border-white/20">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-info text-blue-600"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-gray-800">Peningkatan Bandwidth WiFi Kampus</h4>
                        <p class="text-sm text-gray-600 mt-1">Berdasarkan laporan mahasiswa, bandwidth WiFi kampus akan
                            ditingkatkan minggu depan</p>
                        <p class="text-xs text-gray-500 mt-2">1 hari yang lalu</p>
                    </div>
                </div>

                <div class="flex items-start space-x-4 p-4 bg-white/60 rounded-xl border border-white/20">
                    <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-clock text-orange-600"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-gray-800">Pembersihan Toilet Umum Terjadwal</h4>
                        <p class="text-sm text-gray-600 mt-1">Tim kebersihan akan melakukan pembersihan menyeluruh
                            toilet umum setiap 2 jam</p>
                        <p class="text-xs text-gray-500 mt-2">3 hari yang lalu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Animate stats on page load
        window.addEventListener('load', function () {
            const counters = document.querySelectorAll('.stats-counter');
            counters.forEach(counter => {
                const target = parseInt(counter.textContent.replace(/[^\d]/g, ''));
                let current = 0;
                const increment = target / 50;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        counter.textContent = target >= 1000 ? `${(target / 1000).toFixed(1)}k` : target;
                        clearInterval(timer);
                    } else {
                        const value = Math.floor(current);
                        counter.textContent = value >= 1000 ? `${(value / 1000).toFixed(1)}k` : value;
                    }
                }, 40);
            });
        });
    </script>
</body>

</html>