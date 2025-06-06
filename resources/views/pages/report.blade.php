<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporKampus - Laporan Saya</title>
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
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .nav-item {
            transition: all 0.3s ease;
        }
        
        .nav-item.active {
            background: rgba(34, 197, 94, 0.1);
            color: #16a34a;
        }
        
        .status-badge {
            font-size: 0.75rem;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-weight: 600;
        }
        
        .status-pending {
            background: rgba(251, 146, 60, 0.1);
            color: #ea580c;
            border: 1px solid rgba(251, 146, 60, 0.2);
        }
        
        .status-progress {
            background: rgba(59, 130, 246, 0.1);
            color: #2563eb;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }
        
        .status-resolved {
            background: rgba(34, 197, 94, 0.1);
            color: #16a34a;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }
        
        .status-rejected {
            background: rgba(239, 68, 68, 0.1);
            color: #dc2626;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }
        
        .filter-btn {
            transition: all 0.2s ease;
        }
        
        .filter-btn.active {
            background: #16a34a;
            color: white;
        }
        
        .notification-badge {
            animation: pulse 2s infinite;
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .report-card {
            border-left: 4px solid transparent;
        }
        
        .report-card.pending {
            border-left-color: #ea580c;
        }
        
        .report-card.progress {
            border-left-color: #2563eb;
        }
        
        .report-card.resolved {
            border-left-color: #16a34a;
        }
        
        .report-card.rejected {
            border-left-color: #dc2626;
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-green-50 via-blue-50 to-teal-50 relative">
    <!-- Gentle Background Elements -->
    @include('components.bg-elements')

    <!-- Navigation -->
    @include('components.navbar')

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="glass-card rounded-2xl p-6 md:p-8">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div class="mb-4 md:mb-0">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Laporan Saya</h2>
                        <p class="text-gray-600">Kelola dan pantau status laporan yang telah Anda kirimkan</p>
                    </div>
                    <button onclick="showCreateModal()" class="bg-gradient-to-r from-green-500 to-teal-600 text-white px-6 py-3 rounded-xl font-semibold hover:from-green-600 hover:to-teal-700 transform hover:scale-105 transition-all duration-300 flex items-center justify-center">
                        <i class="fas fa-plus mr-2"></i>
                        Buat Laporan Baru
                    </button>
                </div>
            </div>
        </div>

        <!-- Statistics Summary -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            <div class="glass-card rounded-xl p-4 text-center card-hover">
                <div class="w-10 h-10 bg-gray-100 rounded-xl flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-file-alt text-gray-600"></i>
                </div>
                <p class="text-xl font-bold text-gray-800">12</p>
                <p class="text-xs text-gray-600">Total Laporan</p>
            </div>
            
            <div class="glass-card rounded-xl p-4 text-center card-hover">
                <div class="w-10 h-10 bg-orange-100 rounded-xl flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-clock text-orange-600"></i>
                </div>
                <p class="text-xl font-bold text-orange-600">4</p>
                <p class="text-xs text-gray-600">Diproses</p>
            </div>
            
            <div class="glass-card rounded-xl p-4 text-center card-hover">
                <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-check-circle text-green-600"></i>
                </div>
                <p class="text-xl font-bold text-green-600">7</p>
                <p class="text-xs text-gray-600">Selesai</p>
            </div>
            
            <div class="glass-card rounded-xl p-4 text-center card-hover">
                <div class="w-10 h-10 bg-red-100 rounded-xl flex items-center justify-center mx-auto mb-2">
                    <i class="fas fa-times-circle text-red-600"></i>
                </div>
                <p class="text-xl font-bold text-red-600">1</p>
                <p class="text-xs text-gray-600">Ditolak</p>
            </div>
        </div>

        <!-- Filter and Search -->
        <div class="glass-card rounded-xl p-4 md:p-6 mb-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <!-- Search -->
                <div class="flex-1 max-w-md">
                    <div class="relative">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text" placeholder="Cari laporan..." class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent bg-white/80" id="searchInput" onkeyup="filterReports()">
                    </div>
                </div>
                
                <!-- Filter Buttons -->
                <div class="flex flex-wrap gap-2">
                    <button onclick="filterByStatus('all')" class="filter-btn active px-4 py-2 rounded-lg text-sm font-medium bg-gray-100 text-gray-700" id="filter-all">
                        Semua
                    </button>
                    <button onclick="filterByStatus('pending')" class="filter-btn px-4 py-2 rounded-lg text-sm font-medium bg-gray-100 text-gray-700" id="filter-pending">
                        Menunggu
                    </button>
                    <button onclick="filterByStatus('progress')" class="filter-btn px-4 py-2 rounded-lg text-sm font-medium bg-gray-100 text-gray-700" id="filter-progress">
                        Diproses
                    </button>
                    <button onclick="filterByStatus('resolved')" class="filter-btn px-4 py-2 rounded-lg text-sm font-medium bg-gray-100 text-gray-700" id="filter-resolved">
                        Selesai
                    </button>
                </div>
            </div>
        </div>

        <!-- Reports List -->
        <div class="space-y-4" id="reportsContainer">
            <!-- Report Item 1 -->
            <div class="glass-card rounded-xl p-4 md:p-6 card-hover fade-in report-card progress" data-status="progress" data-title="AC Ruang Kelas 3A Tidak Berfungsi">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                    <div class="flex-1">
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">AC Ruang Kelas 3A Tidak Berfungsi</h3>
                                <div class="flex flex-wrap items-center gap-2 text-sm text-gray-600">
                                    <span class="flex items-center">
                                        <i class="fas fa-building mr-1"></i>
                                        Fasilitas Kampus
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fas fa-calendar mr-1"></i>
                                        15 Nov 2024
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fas fa-hashtag mr-1"></i>
                                        #LPR-2024-001
                                    </span>
                                </div>
                            </div>
                            <span class="status-badge status-progress">Diproses</span>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">AC di ruang kelas 3A sudah tidak berfungsi sejak 3 hari yang lalu. Suhu ruangan menjadi sangat panas dan mengganggu proses pembelajaran...</p>
                        
                        <!-- Progress Timeline -->
                        <div class="bg-white/60 rounded-lg p-3 mb-4">
                            <h4 class="text-sm font-semibold text-gray-700 mb-2">Progress Terbaru:</h4>
                            <div class="text-sm text-gray-600">
                                <div class="flex items-center mb-1">
                                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Tim maintenance telah memeriksa unit AC
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-clock text-blue-500 mr-2"></i>
                                    Proses perbaikan sedang berlangsung
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row md:flex-col gap-2">
                        <button onclick="showReportDetail('LPR-2024-001')" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors text-sm font-medium">
                            <i class="fas fa-eye mr-1"></i>
                            Detail
                        </button>
                        <button onclick="showEditModal('LPR-2024-001')" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors text-sm font-medium">
                            <i class="fas fa-edit mr-1"></i>
                            Edit
                        </button>
                    </div>
                </div>
            </div>

            <!-- Report Item 2 -->
            <div class="glass-card rounded-xl p-4 md:p-6 card-hover fade-in report-card resolved" data-status="resolved" data-title="WiFi Lambat di Perpustakaan">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                    <div class="flex-1">
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">WiFi Lambat di Perpustakaan</h3>
                                <div class="flex flex-wrap items-center gap-2 text-sm text-gray-600">
                                    <span class="flex items-center">
                                        <i class="fas fa-building mr-1"></i>
                                        Fasilitas Kampus
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fas fa-calendar mr-1"></i>
                                        10 Nov 2024
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fas fa-hashtag mr-1"></i>
                                        #LPR-2024-002
                                    </span>
                                </div>
                            </div>
                            <span class="status-badge status-resolved">Selesai</span>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Kecepatan internet WiFi di perpustakaan sangat lambat, terutama pada jam sibuk. Hal ini mengganggu aktivitas penelitian dan download jurnal...</p>
                        
                        <!-- Resolution -->
                        <div class="bg-green-50 border border-green-200 rounded-lg p-3">
                            <h4 class="text-sm font-semibold text-green-700 mb-1">Penyelesaian:</h4>
                            <p class="text-sm text-green-600">Bandwidth WiFi telah ditingkatkan dari 50 Mbps menjadi 100 Mbps. Mohon konfirmasi jika masih ada kendala.</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row md:flex-col gap-2">
                        <button onclick="showReportDetail('LPR-2024-002')" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors text-sm font-medium">
                            <i class="fas fa-eye mr-1"></i>
                            Detail
                        </button>
                        <button onclick="showFeedbackModal('LPR-2024-002')" class="px-4 py-2 bg-green-100 text-green-700 rounded-lg hover:bg-green-200 transition-colors text-sm font-medium">
                            <i class="fas fa-star mr-1"></i>
                            Beri Rating
                        </button>
                    </div>
                </div>
            </div>

            <!-- Report Item 3 -->
            <div class="glass-card rounded-xl p-4 md:p-6 card-hover fade-in report-card pending" data-status="pending" data-title="Lampu Koridor Lantai 2 Mati">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                    <div class="flex-1">
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Lampu Koridor Lantai 2 Mati</h3>
                                <div class="flex flex-wrap items-center gap-2 text-sm text-gray-600">
                                    <span class="flex items-center">
                                        <i class="fas fa-building mr-1"></i>
                                        Fasilitas Kampus
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fas fa-calendar mr-1"></i>
                                        20 Nov 2024
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fas fa-hashtag mr-1"></i>
                                        #LPR-2024-003
                                    </span>
                                </div>
                            </div>
                            <span class="status-badge status-pending">Menunggu</span>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Beberapa lampu di koridor lantai 2 gedung utama sudah mati sejak kemarin. Koridor menjadi gelap dan kurang aman untuk dilalui...</p>
                        
                        <div class="text-sm text-gray-500">
                            <i class="fas fa-clock mr-1"></i>
                            Menunggu tindak lanjut dari tim maintenance
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row md:flex-col gap-2">
                        <button onclick="showReportDetail('LPR-2024-003')" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors text-sm font-medium">
                            <i class="fas fa-eye mr-1"></i>
                            Detail
                        </button>
                        <button onclick="showEditModal('LPR-2024-003')" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors text-sm font-medium">
                            <i class="fas fa-edit mr-1"></i>
                            Edit
                        </button>
                    </div>
                </div>
            </div>

            <!-- Report Item 4 -->
            <div class="glass-card rounded-xl p-4 md:p-6 card-hover fade-in report-card rejected" data-status="rejected" data-title="Keluhan Makanan Kantin Mahal">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4">
                    <div class="flex-1">
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Keluhan Makanan Kantin Mahal</h3>
                                <div class="flex flex-wrap items-center gap-2 text-sm text-gray-600">
                                    <span class="flex items-center">
                                        <i class="fas fa-utensils mr-1"></i>
                                        Layanan Umum
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fas fa-calendar mr-1"></i>
                                        5 Nov 2024
                                    </span>
                                    <span class="flex items-center">
                                        <i class="fas fa-hashtag mr-1"></i>
                                        #LPR-2024-004
                                    </span>
                                </div>
                            </div>
                            <span class="status-badge status-rejected">Ditolak</span>
                        </div>
                        <p class="text-gray-600 mb-4 text-sm md:text-base">Harga makanan di kantin kampus terlalu mahal dibandingkan dengan kantin kampus lain. Perlu ada pengurangan harga atau subsidi...</p>
                        
                        <!-- Rejection Reason -->
                        <div class="bg-red-50 border border-red-200 rounded-lg p-3">
                            <h4 class="text-sm font-semibold text-red-700 mb-1">Alasan Penolakan:</h4>
                            <p class="text-sm text-red-600">Penetapan harga kantin merupakan kebijakan pihak pengelola kantin dan bukan kewenangan kampus untuk mengatur secara langsung.</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row md:flex-col gap-2">
                        <button onclick="showReportDetail('LPR-2024-004')" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors text-sm font-medium">
                            <i class="fas fa-eye mr-1"></i>
                            Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-8">
            <button class="px-6 py-3 bg-white/70 text-gray-700 rounded-xl font-medium hover:bg-white/90 border border-gray-200 transition-all duration-300">
                <i class="fas fa-chevron-down mr-2"></i>
                Muat Lebih Banyak
            </button>
        </div>
    </div>

    <script>
        function setActiveNav(page) {
            // Remove active class from all nav items
            document.querySelectorAll('.nav-item').forEach(item => {
                item.classList.remove('active');
                item.classList.add('text-gray-600', 'hover:text-gray-800', 'hover:bg-gray-100');
            });
            
            // Add active class to selected nav items
            const desktopNav = document.getElementById(`nav-${page}`);
            const mobileNav = document.getElementById(`nav-${page}-mobile`);
            
            if (desktopNav) {
                desktopNav.classList.add('active');
                desktopNav.classList.remove('text-gray-600', 'hover:text-gray-800', 'hover:bg-gray-100');
            }
            
            if (mobileNav) {
                mobileNav.classList.add('active');
                mobileNav.classList.remove('text-gray-600');
            }
        }

        function filterByStatus(status) {
            // Update filter button styles
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.remove('active');
                btn.classList.add('bg-gray-100', 'text-gray-700');
            });
            
            document.getElementById(`filter-${status}`).classList.add('active');
            
            // Filter reports
            const reports = document.querySelectorAll('.report-card');
            reports.forEach(report => {
                if (status === 'all' || report.dataset.status === status) {
                    report.style.display = 'block';
                } else {
                    report.style.display = 'none';
                }
            });
        }

        function filterReports() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const reports = document.querySelectorAll('.report-card');
            
            reports.forEach(report => {
                const title = report.dataset.title.toLowerCase();
                if (title.includes(searchTerm)) {
                    report.style.display = 'block';
                } else {
                    report.style.display = 'none';
                }
            });
        }

        function showReportDetail(reportId) {
            alert(`Menampilkan detail laporan ${reportId}`);
        }

        function showEditModal(reportId) {
            alert(`Membuka form edit untuk laporan ${reportId}`);
        }

        function showCreateModal() {
            alert('Membuka form buat laporan baru');
        }

        function showFeedbackModal(reportId) {
            alert(`Membuka form rating untuk laporan ${reportId}`);
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            // Set default active nav
            setActiveNav('daftar');
        });
    </script>
</body>
</html>