<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporKampus - Detail Laporan</title>
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
        
        .priority-high {
            background: rgba(239, 68, 68, 0.1);
            color: #dc2626;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }
        
        .priority-medium {
            background: rgba(251, 146, 60, 0.1);
            color: #ea580c;
            border: 1px solid rgba(251, 146, 60, 0.2);
        }
        
        .priority-low {
            background: rgba(34, 197, 94, 0.1);
            color: #16a34a;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }
        
        .timeline-item {
            position: relative;
            padding-left: 2rem;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0.5rem;
            top: 1.5rem;
            bottom: -1rem;
            width: 2px;
            background: #e5e7eb;
        }
        
        .timeline-item:last-child::before {
            display: none;
        }
        
        .timeline-dot {
            position: absolute;
            left: 0;
            top: 1rem;
            width: 1rem;
            height: 1rem;
            border-radius: 50%;
            border: 2px solid white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .timeline-dot.active {
            background: #16a34a;
        }
        
        .timeline-dot.pending {
            background: #ea580c;
        }
        
        .timeline-dot.info {
            background: #2563eb;
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .comment-box {
            background: rgba(249, 250, 251, 0.8);
            border: 1px solid rgba(229, 231, 235, 0.5);
        }
        
        .image-gallery img {
            transition: all 0.3s ease;
        }
        
        .image-gallery img:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .progress-bar {
            height: 8px;
            background: #e5e7eb;
            border-radius: 4px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #16a34a, #22c55e);
            border-radius: 4px;
            transition: width 0.5s ease;
        }

        .attachment-item {
            background: rgba(248, 250, 252, 0.8);
            border: 1px solid rgba(226, 232, 240, 0.5);
            transition: all 0.3s ease;
        }
        
        .attachment-item:hover {
            background: rgba(241, 245, 249, 0.9);
            transform: translateY(-1px);
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-green-50 via-blue-50 to-teal-50 relative">
    <!-- Gentle Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="floating-gentle absolute top-20 left-10 w-32 h-32 bg-gradient-to-br from-green-200/30 to-teal-200/30 rounded-full blur-xl"></div>
        <div class="floating-gentle absolute top-40 right-20 w-48 h-48 bg-gradient-to-br from-blue-200/20 to-green-200/20 rounded-full blur-2xl"></div>
        <div class="floating-gentle absolute bottom-32 left-1/4 w-40 h-40 bg-gradient-to-br from-teal-200/25 to-blue-200/25 rounded-full blur-xl"></div>
    </div>

    <!-- Navigation -->
    <nav class="relative z-20 bg-white/80 backdrop-blur-xl border-b border-white/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <div class="w-8 h-8 bg-gradient-to-br from-green-500 to-teal-600 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-university text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold bg-gradient-to-r from-green-600 to-teal-600 bg-clip-text text-transparent">LaporKampus</span>
                    </div>
                </div>
                
                <div class="flex items-center space-x-4">
                    <button onclick="history.back()" class="flex items-center px-4 py-2 text-gray-600 hover:text-gray-800 hover:bg-gray-100 rounded-lg transition-all duration-200">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali
                    </button>
                    <div class="w-8 h-8 bg-gradient-to-br from-green-400 to-teal-500 rounded-full flex items-center justify-center cursor-pointer">
                        <i class="fas fa-user text-white text-sm"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header with Status -->
        <div class="glass-card rounded-2xl p-6 md:p-8 mb-8 fade-in">
            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-6">
                <div class="flex-1">
                    <div class="flex flex-wrap items-center gap-3 mb-4">
                        <span class="status-badge status-progress">Diproses</span>
                        <span class="status-badge priority-high">Prioritas Tinggi</span>
                        <span class="text-sm text-gray-500">#LPR-2024-001</span>
                    </div>
                    
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">AC Ruang Kelas 3A Tidak Berfungsi</h1>
                    
                    <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 mb-6">
                        <span class="flex items-center">
                            <i class="fas fa-user mr-2"></i>
                            Ahmad Fauzi
                        </span>
                        <span class="flex items-center">
                            <i class="fas fa-building mr-2"></i>
                            Fasilitas Kampus
                        </span>
                        <span class="flex items-center">
                            <i class="fas fa-calendar mr-2"></i>
                            15 November 2024, 14:30
                        </span>
                        <span class="flex items-center">
                            <i class="fas fa-clock mr-2"></i>
                            5 hari yang lalu
                        </span>
                    </div>
                    
                    <!-- Progress Bar -->
                    <div class="mb-4">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm font-medium text-gray-700">Progress Penyelesaian</span>
                            <span class="text-sm text-gray-600">60%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 60%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Description -->
                <div class="glass-card rounded-xl p-6 fade-in">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Deskripsi Masalah</h2>
                    <div class="prose prose-gray max-w-none">
                        <p class="text-gray-700 leading-relaxed mb-4">
                            AC di ruang kelas 3A gedung Fakultas Teknik sudah tidak berfungsi sejak 3 hari yang lalu. Unit AC sama sekali tidak mengeluarkan udara dingin meskipun sudah dinyalakan dengan remote control. Suhu ruangan menjadi sangat panas dan pengap, terutama pada siang hari.
                        </p>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Kondisi ini sangat mengganggu proses pembelajaran karena mahasiswa dan dosen merasa tidak nyaman. Beberapa mahasiswa bahkan mengalami pusing karena kepanasan. Ruang kelas ini digunakan untuk mata kuliah dengan kapasitas 40 mahasiswa, sehingga dampaknya cukup signifikan.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            Mohon segera ditindaklanjuti untuk perbaikan atau penggantian unit AC agar proses pembelajaran dapat berjalan dengan nyaman kembali.
                        </p>
                    </div>
                </div>

                <!-- Images/Attachments -->
                <div class="glass-card rounded-xl p-6 fade-in">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Dokumentasi</h2>
                    <div class="image-gallery grid grid-cols-2 md:grid-cols-3 gap-4 mb-6">
                        <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden cursor-pointer" onclick="openImageModal('image1')">
                            <img src="https://via.placeholder.com/300x300/e5e7eb/6b7280?text=AC+Unit" alt="AC Unit" class="w-full h-full object-cover">
                        </div>
                        <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden cursor-pointer" onclick="openImageModal('image2')">
                            <img src="https://via.placeholder.com/300x300/e5e7eb/6b7280?text=Remote+Control" alt="Remote Control" class="w-full h-full object-cover">
                        </div>
                        <div class="aspect-square bg-gray-200 rounded-lg overflow-hidden cursor-pointer" onclick="openImageModal('image3')">
                            <img src="https://via.placeholder.com/300x300/e5e7eb/6b7280?text=Ruang+Kelas" alt="Ruang Kelas" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <!-- File Attachments -->
                    <div class="space-y-3">
                        <h3 class="text-lg font-medium text-gray-800">File Pendukung</h3>
                        <div class="attachment-item rounded-lg p-3 flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-file-pdf text-red-600"></i>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-800">Laporan Kerusakan AC.pdf</p>
                                    <p class="text-sm text-gray-600">245 KB</p>
                                </div>
                            </div>
                            <button class="text-blue-600 hover:text-blue-800 transition-colors">
                                <i class="fas fa-download"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Timeline/Progress -->
                <div class="glass-card rounded-xl p-6 fade-in">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6">Timeline Progress</h2>
                    <div class="space-y-6">
                        <div class="timeline-item">
                            <div class="timeline-dot active"></div>
                            <div class="ml-4">
                                <div class="flex items-center justify-between mb-2">
                                    <h3 class="font-semibold text-gray-800">Tim maintenance memulai perbaikan</h3>
                                    <span class="text-sm text-gray-500">20 Nov 2024, 09:00</span>
                                </div>
                                <p class="text-gray-600 mb-2">Tim maintenance telah datang ke lokasi dan memulai proses perbaikan unit AC. Diagnosis awal menunjukkan masalah pada kompressor.</p>
                                <div class="flex items-center text-sm text-green-600">
                                    <i class="fas fa-user-check mr-2"></i>
                                    <span>Oleh: Tim Maintenance - Budi Santoso</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-dot info"></div>
                            <div class="ml-4">
                                <div class="flex items-center justify-between mb-2">
                                    <h3 class="font-semibold text-gray-800">Pemeriksaan dan diagnosis</h3>
                                    <span class="text-sm text-gray-500">19 Nov 2024, 15:30</span>
                                </div>
                                <p class="text-gray-600 mb-2">Tim maintenance telah melakukan pemeriksaan menyeluruh pada unit AC. Ditemukan beberapa komponen yang perlu diganti.</p>
                                <div class="flex items-center text-sm text-blue-600">
                                    <i class="fas fa-user-check mr-2"></i>
                                    <span>Oleh: Tim Maintenance - Ahmad Wijaya</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-dot info"></div>
                            <div class="ml-4">
                                <div class="flex items-center justify-between mb-2">
                                    <h3 class="font-semibold text-gray-800">Laporan diterima dan diverifikasi</h3>
                                    <span class="text-sm text-gray-500">18 Nov 2024, 10:15</span>
                                </div>
                                <p class="text-gray-600 mb-2">Laporan telah diterima dan diverifikasi oleh admin. Tim maintenance akan segera ditugaskan untuk menangani masalah ini.</p>
                                <div class="flex items-center text-sm text-blue-600">
                                    <i class="fas fa-user-check mr-2"></i>
                                    <span>Oleh: Admin Fasilitas - Sari Dewi</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-dot pending"></div>
                            <div class="ml-4">
                                <div class="flex items-center justify-between mb-2">
                                    <h3 class="font-semibold text-gray-800">Laporan dibuat</h3>
                                    <span class="text-sm text-gray-500">15 Nov 2024, 14:30</span>
                                </div>
                                <p class="text-gray-600 mb-2">Laporan tentang kerusakan AC di ruang kelas 3A telah dibuat dan menunggu verifikasi dari admin.</p>
                                <div class="flex items-center text-sm text-orange-600">
                                    <i class="fas fa-user mr-2"></i>
                                    <span>Oleh: Ahmad Fauzi (Pelapor)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="glass-card rounded-xl p-6 fade-in">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6">Komentar & Update</h2>
                    
                    <!-- Add Comment -->
                    <div class="comment-box rounded-lg p-4 mb-6">
                        <textarea placeholder="Tambahkan komentar atau update..." rows="3" class="w-full bg-transparent border-none outline-none resize-none text-gray-700 placeholder-gray-500"></textarea>
                        <div class="flex justify-between items-center mt-3">
                            <div class="flex items-center space-x-3">
                                <button class="text-gray-500 hover:text-gray-700 transition-colors">
                                    <i class="fas fa-paperclip"></i>
                                </button>
                                <button class="text-gray-500 hover:text-gray-700 transition-colors">
                                    <i class="fas fa-image"></i>
                                </button>
                            </div>
                            <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors">
                                Kirim Komentar
                            </button>
                        </div>
                    </div>
                    
                    <!-- Comments List -->
                    <div class="space-y-4">
                        <div class="flex space-x-3">
                            <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-user text-white text-xs"></i>
                            </div>
                            <div class="flex-1">
                                <div class="comment-box rounded-lg p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-semibold text-gray-800">Tim Maintenance</span>
                                        <span class="text-sm text-gray-500">2 jam yang lalu</span>
                                    </div>
                                    <p class="text-gray-700">Perbaikan sedang dalam progress. Kompressor akan diganti dengan yang baru. Estimasi selesai hari ini sebelum jam 17:00.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex space-x-3">
                            <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-user text-white text-xs"></i>
                            </div>
                            <div class="flex-1">
                                <div class="comment-box rounded-lg p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="font-semibold text-gray-800">Ahmad Fauzi</span>
                                        <span class="text-sm text-gray-500">1 hari yang lalu</span>
                                    </div>
                                    <p class="text-gray-700">Terima kasih atas respon yang cepat. Semoga dapat segera diselesaikan karena cuaca sedang panas-panasnya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Quick Info -->
                <div class="glass-card rounded-xl p-6 fade-in">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Laporan</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Status:</span>
                            <span class="status-badge status-progress">Diproses</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Prioritas:</span>
                            <span class="status-badge priority-high">Tinggi</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Kategori:</span>
                            <span class="text-gray-800 font-medium">Fasilitas</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Lokasi:</span>
                            <span class="text-gray-800 font-medium">Ruang 3A</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Gedung:</span>
                            <span class="text-gray-800 font-medium">Fakultas Teknik</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Penanggung Jawab:</span>
                            <span class="text-gray-800 font-medium">Tim Maintenance</span>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="glass-card rounded-xl p-6 fade-in">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Tindakan</h3>
                    <div class="space-y-3">
                        <button onclick="subscribeNotification()" class="w-full px-4 py-3 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors flex items-center justify-center">
                            <i class="fas fa-bell mr-2"></i>
                            Ikuti Update
                        </button>
                        <button onclick="printReport()" class="w-full px-4 py-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors flex items-center justify-center">
                            <i class="fas fa-print mr-2"></i>
                            Cetak Laporan
                        </button>
                        <button onclick="exportReport()" class="w-full px-4 py-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors flex items-center justify-center">
                            <i class="fas fa-download mr-2"></i>
                            Export PDF
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showEditModal() {
            alert('Membuka form edit laporan');
        }

        function showShareModal() {
            alert('Membuka modal share laporan');
        }

        function openImageModal(imageId) {
            alert(`Membuka gambar ${imageId} dalam modal`);
        }

        function subscribeNotification() {
            alert('Anda akan menerima notifikasi untuk update laporan ini');
        }

        function printReport() {
            window.print();
        }

        function exportReport() {
            alert('Mengexport laporan ke PDF');
        }

        // Initialize page animations
        document.addEventListener('DOMContentLoaded', function() {
            // Add staggered animation to cards
            const cards = document.querySelectorAll('.fade-in');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>
</html>