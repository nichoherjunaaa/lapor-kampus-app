<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporKampus - Buat Laporan Baru</title>
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
        
        .notification-badge {
            animation: pulse 2s infinite;
        }
        
        .form-input {
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(34, 197, 94, 0.15);
        }
        
        .drag-area {
            border: 2px dashed #d1d5db;
            transition: all 0.3s ease;
        }
        
        .drag-area.drag-over {
            border-color: #16a34a;
            background-color: rgba(34, 197, 94, 0.05);
        }
        
        .image-preview {
            position: relative;
            overflow: hidden;
        }
        
        .image-preview img {
            transition: transform 0.3s ease;
        }
        
        .image-preview:hover img {
            transform: scale(1.05);
        }
        
        .remove-image {
            position: absolute;
            top: 8px;
            right: 8px;
            background: rgba(239, 68, 68, 0.9);
            color: white;
            border: none;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .remove-image:hover {
            background: rgba(239, 68, 68, 1);
            transform: scale(1.1);
        }
        
        .progress-bar {
            height: 4px;
            background: #e5e7eb;
            border-radius: 2px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #16a34a, #059669);
            transition: width 0.3s ease;
        }
        
        .step {
            transition: all 0.3s ease;
        }
        
        .step.active {
            color: #16a34a;
        }
        
        .step.active .step-circle {
            background: #16a34a;
            color: white;
        }
        
        .step-circle {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
            color: #6b7280;
        }
        
        .category-card {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .category-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        
        .category-card.selected {
            border-color: #16a34a;
            background: rgba(34, 197, 94, 0.05);
        }
        
        .category-card.selected .category-icon {
            color: #16a34a;
        }
        
        .priority-option {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .priority-option:hover {
            transform: translateY(-1px);
        }
        
        .priority-option.selected {
            border-color: #16a34a;
            background: rgba(34, 197, 94, 0.05);
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-green-50 via-blue-50 to-teal-50 relative">
    <!-- Gentle Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/6 w-64 h-64 bg-gradient-to-r from-green-200 to-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 floating-gentle"></div>
        <div class="absolute top-1/3 right-1/6 w-80 h-80 bg-gradient-to-r from-blue-200 to-teal-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 floating-gentle"></div>
        <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-gradient-to-r from-teal-200 to-green-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 floating-gentle"></div>
    </div>

    <!-- Navigation -->
    <nav class="relative z-10 bg-white/80 backdrop-blur-lg border-b border-white/20 sticky top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo & Brand -->
                <div class="flex items-center">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-teal-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-university text-white text-lg"></i>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold text-gray-800">LaporKampus</h1>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation Menu -->
                <div class="hidden md:flex space-x-2">
                    <a href="#" onclick="setActiveNav('home')" class="nav-item px-4 py-2 rounded-lg font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-100" id="nav-home">
                        <i class="fas fa-home mr-2"></i>
                        Home
                    </a>
                    <a href="#" onclick="setActiveNav('lapor')" class="nav-item active px-4 py-2 rounded-lg font-medium" id="nav-lapor">
                        <i class="fas fa-plus-circle mr-2"></i>
                        Laporkan
                    </a>
                    <a href="#" onclick="setActiveNav('daftar')" class="nav-item px-4 py-2 rounded-lg font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-100" id="nav-daftar">
                        <i class="fas fa-list mr-2"></i>
                        Laporan Saya
                    </a>
                </div>
                
                <!-- Profile & Notifications -->
                <div class="flex items-center space-x-4">
                    <button class="relative p-2 text-gray-600 hover:text-gray-800 transition-colors">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center notification-badge">3</span>
                    </button>
                    
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-gradient-to-br from-green-400 to-teal-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white text-sm"></i>
                        </div>
                        <div class="hidden lg:block">
                            <p class="text-sm font-semibold text-gray-800">Ahmad Fauzi</p>
                            <p class="text-xs text-gray-600">2021001234</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div class="md:hidden px-4 pb-3">
            <div class="flex space-x-1">
                <a href="#" onclick="setActiveNav('home')" class="nav-item flex-1 text-center py-2 rounded-lg font-medium text-sm text-gray-600" id="nav-home-mobile">
                    <i class="fas fa-home"></i>
                    <span class="block text-xs mt-1">Home</span>
                </a>
                <a href="#" onclick="setActiveNav('lapor')" class="nav-item active flex-1 text-center py-2 rounded-lg font-medium text-sm" id="nav-lapor-mobile">
                    <i class="fas fa-plus-circle"></i>
                    <span class="block text-xs mt-1">Laporkan</span>
                </a>
                <a href="#" onclick="setActiveNav('daftar')" class="nav-item flex-1 text-center py-2 rounded-lg font-medium text-sm text-gray-600" id="nav-daftar-mobile">
                    <i class="fas fa-list"></i>
                    <span class="block text-xs mt-1">Laporan Saya</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="glass-card rounded-2xl p-6 md:p-8 text-center">
                <div class="mb-6">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-green-100 to-teal-100 rounded-2xl mb-4">
                        <i class="fas fa-plus-circle text-3xl text-green-600"></i>
                    </div>
                </div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Buat Laporan Baru</h2>
                <p class="text-gray-600">Sampaikan keluhan atau masalah yang Anda alami di kampus</p>
            </div>
        </div>

        <!-- Progress Steps -->
        <div class="glass-card rounded-xl p-4 mb-8">
            <div class="flex items-center justify-between">
                <div class="step active flex items-center">
                    <div class="step-circle">1</div>
                    <span class="ml-2 text-sm font-medium hidden sm:block">Kategori</span>
                </div>
                <div class="flex-1 h-px bg-gray-300 mx-4"></div>
                <div class="step flex items-center">
                    <div class="step-circle">2</div>
                    <span class="ml-2 text-sm font-medium hidden sm:block">Detail</span>
                </div>
                <div class="flex-1 h-px bg-gray-300 mx-4"></div>
                <div class="step flex items-center">
                    <div class="step-circle">3</div>
                    <span class="ml-2 text-sm font-medium hidden sm:block">Konfirmasi</span>
                </div>
            </div>
        </div>

        <!-- Form Container -->
        <form id="reportForm" class="space-y-8">
            <!-- Step 1: Category Selection -->
            <div id="step1" class="fade-in">
                <div class="glass-card rounded-2xl p-6 md:p-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Pilih Kategori Laporan</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="category-card glass-card rounded-xl p-6 border-2 border-transparent" onclick="selectCategory('fasilitas')">
                            <div class="text-center">
                                <div class="category-icon text-4xl text-blue-600 mb-4">
                                    <i class="fas fa-building"></i>
                                </div>
                                <h4 class="font-semibold text-gray-800 mb-2">Fasilitas Kampus</h4>
                                <p class="text-sm text-gray-600">AC, WiFi, toilet, ruang kelas, laboratorium</p>
                            </div>
                        </div>
                        
                        <div class="category-card glass-card rounded-xl p-6 border-2 border-transparent" onclick="selectCategory('akademik')">
                            <div class="text-center">
                                <div class="category-icon text-4xl text-green-600 mb-4">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h4 class="font-semibold text-gray-800 mb-2">Layanan Akademik</h4>
                                <p class="text-sm text-gray-600">Jadwal, dosen, administrasi, sistem</p>
                            </div>
                        </div>
                        
                        <div class="category-card glass-card rounded-xl p-6 border-2 border-transparent" onclick="selectCategory('sosial')">
                            <div class="text-center">
                                <div class="category-icon text-4xl text-purple-600 mb-4">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h4 class="font-semibold text-gray-800 mb-2">Isu Sosial</h4>
                                <p class="text-sm text-gray-600">Pelecehan, diskriminasi, perundungan</p>
                            </div>
                        </div>
                        
                        <div class="category-card glass-card rounded-xl p-6 border-2 border-transparent" onclick="selectCategory('keamanan')">
                            <div class="text-center">
                                <div class="category-icon text-4xl text-red-600 mb-4">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h4 class="font-semibold text-gray-800 mb-2">Keamanan</h4>
                                <p class="text-sm text-gray-600">Kehilangan, kerusakan, akses tidak aman</p>
                            </div>
                        </div>
                        
                        <div class="category-card glass-card rounded-xl p-6 border-2 border-transparent" onclick="selectCategory('kebersihan')">
                            <div class="text-center">
                                <div class="category-icon text-4xl text-teal-600 mb-4">
                                    <i class="fas fa-broom"></i>
                                </div>
                                <h4 class="font-semibold text-gray-800 mb-2">Kebersihan</h4>
                                <p class="text-sm text-gray-600">Sampah, toilet kotor, area tidak terawat</p>
                            </div>
                        </div>
                        
                        <div class="category-card glass-card rounded-xl p-6 border-2 border-transparent" onclick="selectCategory('lainnya')">
                            <div class="text-center">
                                <div class="category-icon text-4xl text-gray-600 mb-4">
                                    <i class="fas fa-ellipsis-h"></i>
                                </div>
                                <h4 class="font-semibold text-gray-800 mb-2">Lainnya</h4>
                                <p class="text-sm text-gray-600">Masalah lain yang tidak terkategori</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 text-center">
                        <button type="button" onclick="nextStep()" class="bg-gradient-to-r from-green-500 to-teal-600 text-white px-8 py-3 rounded-xl font-semibold hover:from-green-600 hover:to-teal-700 transform hover:scale-105 transition-all duration-300" disabled id="nextBtn1">
                            Lanjutkan
                            <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Step 2: Detail Form -->
            <div id="step2" class="fade-in hidden">
                <div class="space-y-6">
                    <!-- Basic Information -->
                    <div class="glass-card rounded-2xl p-6 md:p-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-6">Detail Laporan</h3>
                        
                        <div class="space-y-6">
                            <!-- Title -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Judul Laporan <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent bg-white/80" 
                                       placeholder="Contoh: AC Ruang Kelas 3A Tidak Berfungsi"
                                       id="reportTitle"
                                       required>
                            </div>
                            
                            <!-- Location -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Lokasi Kejadian <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent bg-white/80" 
                                       placeholder="Contoh: Gedung A, Lantai 3, Ruang Kelas 3A"
                                       id="reportLocation"
                                       required>
                            </div>
                            
                            <!-- Priority -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-4">
                                    Tingkat Prioritas <span class="text-red-500">*</span>
                                </label>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div class="priority-option border-2 border-gray-200 rounded-xl p-4 text-center" onclick="selectPriority('rendah')">
                                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-2">
                                            <i class="fas fa-circle text-green-500 text-sm"></i>
                                        </div>
                                        <h4 class="font-semibold text-gray-800">Rendah</h4>
                                        <p class="text-xs text-gray-600 mt-1">Tidak mendesak</p>
                                    </div>
                                    
                                    <div class="priority-option border-2 border-gray-200 rounded-xl p-4 text-center" onclick="selectPriority('sedang')">
                                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-2">
                                            <i class="fas fa-circle text-orange-500 text-sm"></i>
                                        </div>
                                        <h4 class="font-semibold text-gray-800">Sedang</h4>
                                        <p class="text-xs text-gray-600 mt-1">Perlu tindakan</p>
                                    </div>
                                    
                                    <div class="priority-option border-2 border-gray-200 rounded-xl p-4 text-center" onclick="selectPriority('tinggi')">
                                        <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-2">
                                            <i class="fas fa-circle text-red-500 text-sm"></i>
                                        </div>
                                        <h4 class="font-semibold text-gray-800">Tinggi</h4>
                                        <p class="text-xs text-gray-600 mt-1">Mendesak</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Description -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Deskripsi Masalah <span class="text-red-500">*</span>
                                </label>
                                <textarea 
                                    class="form-input w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent bg-white/80 h-32 resize-none" 
                                    placeholder="Jelaskan masalah yang Anda alami secara detail..."
                                    id="reportDescription"
                                    required></textarea>
                                <p class="text-xs text-gray-500 mt-2">Minimum 20 karakter</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Photo Upload -->
                    <div class="glass-card rounded-2xl p-6 md:p-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-6">Lampiran Foto (Opsional)</h3>
                        
                        <div class="drag-area rounded-xl p-8 text-center" id="dragArea">
                            <div class="mb-4">
                                <i class="fas fa-cloud-upload-alt text-4xl text-gray-400"></i>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-700 mb-2">Seret & Lepas Foto Disini</h4>
                            <p class="text-gray-600 mb-4">atau klik untuk memilih file</p>
                            <input type="file" id="photoInput" class="hidden" multiple accept="image/*">
                            <button type="button" onclick="document.getElementById('photoInput').click()" class="bg-gray-100 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                                <i class="fas fa-plus mr-2"></i>
                                Pilih Foto
                            </button>
                            <p class="text-xs text-gray-500 mt-4">Format: JPG, PNG, JPEG | Maksimal 5MB per file | Maksimal 3 foto</p>
                        </div>
                        
                        <div id="imagePreview" class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6 hidden"></div>
                    </div>
                    
                    <!-- Navigation Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-between">
                        <button type="button" onclick="prevStep()" class="bg-gray-100 text-gray-700 px-6 py-3 rounded-xl font-semibold hover:bg-gray-200 transition-colors">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Kembali
                        </button>
                        <button type="button" onclick="nextStep()" class="bg-gradient-to-r from-green-500 to-teal-600 text-white px-8 py-3 rounded-xl font-semibold hover:from-green-600 hover:to-teal-700 transform hover:scale-105 transition-all duration-300" id="nextBtn2">
                            Lanjutkan
                            <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Step 3: Confirmation -->
            <div id="step3" class="fade-in hidden">
                <div class="glass-card rounded-2xl p-6 md:p-8">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Konfirmasi Laporan</h3>
                    
                    <div class="space-y-6">
                        <!-- Report Summary -->
                        <div class="bg-white/60 rounded-xl p-6 border border-white/20">
                            <h4 class="font-semibold text-gray-800 mb-4">Ringkasan Laporan</h4>
                            <div class="space-y-3">
                                <div class="flex flex-col sm:flex-row sm:justify-between">
                                    <span class="text-sm text-gray-600">Kategori:</span>
                                    <span class="font-medium text-gray-800" id="summaryCategory">-</span>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:justify-between">
                                    <span class="text-sm text-gray-600">Judul:</span>
                                    <span class="font-medium text-gray-800" id="summaryTitle">-</span>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:justify-between">
                                    <span class="text-sm text-gray-600">Lokasi:</span>
                                    <span class="font-medium text-gray-800" id="summaryLocation">-</span>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:justify-between">
                                    <span class="text-sm text-gray-600">Prioritas:</span>
                                    <span class="font-medium text-gray-800" id="summaryPriority">-</span>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:justify-between">
                                    <span class="text-sm text-gray-600">Lampiran:</span>
                                    <span class="font-medium text-gray-800" id="summaryPhotos">-</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Agreement -->
                        <div class="bg-blue-50 border border-blue-200 rounded-xl p-4">
                            <div class="flex items-start">
                                <input type="checkbox" id="agreement" class="mt-1 mr-3">
                                <label for="agreement" class="text-sm text-blue-800">
                                    Saya menyatakan bahwa informasi yang saya berikan adalah benar dan dapat dipertanggungjawabkan. Saya memahami bahwa laporan palsu dapat dikenakan sanksi.
                                </label>
                            </div>
                        </div>
                        
                        <!-- Navigation Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-between">
                            <button type="button" onclick="prevStep()" class="bg-gray-100 text-gray-700 px-6 py-3 rounded-xl font-semibold hover:bg-gray-200 transition-colors">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Kembali
                            </button>
                            <button type="submit" class="bg-gradient-to-r from-green-500 to-teal-600 text-white px-8 py-3 rounded-xl font-semibold hover:from-green-600 hover:to-teal-700 transform hover:scale-105 transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed" id="submitBtn" disabled>
                                <i class="fas fa-paper-plane mr-2"></i>
                                Kirim Laporan
                            </button>
                        </div>
                    </div>
                    </div>
            </div>
        </form>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="glass-card rounded-2xl p-8 max-w-md w-full mx-4">
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-check text-2xl text-green-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Laporan Berhasil Dikirim!</h3>
                <p class="text-gray-600 mb-6">Terima kasih atas laporan Anda. Tim kami akan segera menindaklanjuti.</p>
                <div class="bg-gray-50 rounded-lg p-4 mb-6">
                    <p class="text-sm text-gray-600">Nomor Laporan:</p>
                    <p class="font-mono font-bold text-green-600" id="reportNumber">LK-2025-001234</p>
                </div>
                <button onclick="closeModal()" class="bg-gradient-to-r from-green-500 to-teal-600 text-white px-6 py-3 rounded-xl font-semibold hover:from-green-600 hover:to-teal-700 transition-all duration-300">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="glass-card rounded-2xl p-8 text-center">
            <div class="animate-spin w-12 h-12 border-4 border-green-500 border-t-transparent rounded-full mx-auto mb-4"></div>
            <p class="text-gray-700 font-medium">Mengirim laporan...</p>
        </div>
    </div>

    <script>
        // Global variables
        let currentStep = 1;
        let selectedCategory = '';
        let selectedPriority = '';
        let uploadedPhotos = [];

        // Navigation functions
        function setActiveNav(navItem) {
            // Remove active class from all nav items
            document.querySelectorAll('.nav-item').forEach(item => {
                item.classList.remove('active');
                item.classList.add('text-gray-600');
            });
            
            // Add active class to selected nav item
            document.getElementById(`nav-${navItem}`).classList.add('active');
            document.getElementById(`nav-${navItem}`).classList.remove('text-gray-600');
            
            // Mobile navigation
            const mobileNav = document.getElementById(`nav-${navItem}-mobile`);
            if (mobileNav) {
                mobileNav.classList.add('active');
                mobileNav.classList.remove('text-gray-600');
            }
        }

        // Category selection
        function selectCategory(category) {
            // Remove selection from all categories
            document.querySelectorAll('.category-card').forEach(card => {
                card.classList.remove('selected');
            });
            
            // Add selection to clicked category
            event.target.closest('.category-card').classList.add('selected');
            selectedCategory = category;
            
            // Enable next button
            document.getElementById('nextBtn1').disabled = false;
            document.getElementById('nextBtn1').classList.remove('opacity-50', 'cursor-not-allowed');
        }

        // Priority selection
        function selectPriority(priority) {
            // Remove selection from all priority options
            document.querySelectorAll('.priority-option').forEach(option => {
                option.classList.remove('selected');
            });
            
            // Add selection to clicked priority
            event.target.closest('.priority-option').classList.add('selected');
            selectedPriority = priority;
            
            validateStep2();
        }

        // Step navigation
        function nextStep() {
            if (currentStep === 1 && !selectedCategory) return;
            if (currentStep === 2 && !validateStep2()) return;
            
            if (currentStep < 3) {
                // Hide current step
                document.getElementById(`step${currentStep}`).classList.add('hidden');
                
                // Show next step
                currentStep++;
                document.getElementById(`step${currentStep}`).classList.remove('hidden');
                
                // Update progress
                updateProgress();
                
                // If step 3, populate summary
                if (currentStep === 3) {
                    populateSummary();
                }
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                // Hide current step
                document.getElementById(`step${currentStep}`).classList.add('hidden');
                
                // Show previous step
                currentStep--;
                document.getElementById(`step${currentStep}`).classList.remove('hidden');
                
                // Update progress
                updateProgress();
            }
        }

        // Update progress indicators
        function updateProgress() {
            document.querySelectorAll('.step').forEach((step, index) => {
                if (index + 1 <= currentStep) {
                    step.classList.add('active');
                } else {
                    step.classList.remove('active');
                }
            });
        }

        // Validate step 2
        function validateStep2() {
            const title = document.getElementById('reportTitle').value.trim();
            const location = document.getElementById('reportLocation').value.trim();
            const description = document.getElementById('reportDescription').value.trim();
            
            const isValid = title && location && description.length >= 20 && selectedPriority;
            
            const nextBtn = document.getElementById('nextBtn2');
            if (isValid) {
                nextBtn.disabled = false;
                nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
            } else {
                nextBtn.disabled = true;
                nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
            }
            
            return isValid;
        }

        // Populate summary in step 3
        function populateSummary() {
            const categoryNames = {
                'fasilitas': 'Fasilitas Kampus',
                'akademik': 'Layanan Akademik',
                'sosial': 'Isu Sosial',
                'keamanan': 'Keamanan',
                'kebersihan': 'Kebersihan',
                'lainnya': 'Lainnya'
            };
            
            const priorityNames = {
                'rendah': 'Rendah',
                'sedang': 'Sedang',
                'tinggi': 'Tinggi'
            };
            
            document.getElementById('summaryCategory').textContent = categoryNames[selectedCategory] || '-';
            document.getElementById('summaryTitle').textContent = document.getElementById('reportTitle').value || '-';
            document.getElementById('summaryLocation').textContent = document.getElementById('reportLocation').value || '-';
            document.getElementById('summaryPriority').textContent = priorityNames[selectedPriority] || '-';
            document.getElementById('summaryPhotos').textContent = uploadedPhotos.length > 0 ? `${uploadedPhotos.length} foto` : 'Tidak ada';
        }

        // Photo upload functionality
        function initializePhotoUpload() {
            const dragArea = document.getElementById('dragArea');
            const photoInput = document.getElementById('photoInput');
            
            // Drag and drop events
            dragArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                dragArea.classList.add('drag-over');
            });
            
            dragArea.addEventListener('dragleave', () => {
                dragArea.classList.remove('drag-over');
            });
            
            dragArea.addEventListener('drop', (e) => {
                e.preventDefault();
                dragArea.classList.remove('drag-over');
                handleFiles(e.dataTransfer.files);
            });
            
            // File input change
            photoInput.addEventListener('change', (e) => {
                handleFiles(e.target.files);
            });
        }

        function handleFiles(files) {
            if (uploadedPhotos.length + files.length > 3) {
                alert('Maksimal 3 foto yang dapat diunggah');
                return;
            }
            
            Array.from(files).forEach(file => {
                if (!file.type.startsWith('image/')) {
                    alert('Hanya file gambar yang diperbolehkan');
                    return;
                }
                
                if (file.size > 5 * 1024 * 1024) {
                    alert('Ukuran file maksimal 5MB');
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = (e) => {
                    uploadedPhotos.push({
                        file: file,
                        url: e.target.result
                    });
                    updateImagePreview();
                };
                reader.readAsDataURL(file);
            });
        }

        function updateImagePreview() {
            const preview = document.getElementById('imagePreview');
            
            if (uploadedPhotos.length === 0) {
                preview.classList.add('hidden');
                return;
            }
            
            preview.classList.remove('hidden');
            preview.innerHTML = '';
            
            uploadedPhotos.forEach((photo, index) => {
                const imageContainer = document.createElement('div');
                imageContainer.className = 'image-preview relative glass-card rounded-xl overflow-hidden';
                imageContainer.innerHTML = `
                    <img src="${photo.url}" alt="Preview ${index + 1}" class="w-full h-32 object-cover">
                    <button type="button" class="remove-image" onclick="removeImage(${index})">
                        <i class="fas fa-times text-xs"></i>
                    </button>
                `;
                preview.appendChild(imageContainer);
            });
        }

        function removeImage(index) {
            uploadedPhotos.splice(index, 1);
            updateImagePreview();
        }

        // Form submission
        function handleFormSubmit(e) {
            e.preventDefault();
            
            if (!document.getElementById('agreement').checked) {
                alert('Anda harus menyetujui pernyataan terlebih dahulu');
                return;
            }
            
            // Show loading
            document.getElementById('loadingOverlay').classList.remove('hidden');
            
            // Simulate API call
            setTimeout(() => {
                document.getElementById('loadingOverlay').classList.add('hidden');
                
                // Generate report number
                const reportNumber = 'LK-' + new Date().getFullYear() + '-' + Math.random().toString(36).substr(2, 6).toUpperCase();
                document.getElementById('reportNumber').textContent = reportNumber;
                
                // Show success modal
                document.getElementById('successModal').classList.remove('hidden');
            }, 2000);
        }

        function closeModal() {
            document.getElementById('successModal').classList.add('hidden');
            // Reset form or redirect to dashboard
            window.location.href = '#dashboard';
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize photo upload
            initializePhotoUpload();
            
            // Form validation listeners
            document.getElementById('reportTitle').addEventListener('input', validateStep2);
            document.getElementById('reportLocation').addEventListener('input', validateStep2);
            document.getElementById('reportDescription').addEventListener('input', validateStep2);
            
            // Agreement checkbox
            document.getElementById('agreement').addEventListener('change', function() {
                const submitBtn = document.getElementById('submitBtn');
                if (this.checked) {
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                } else {
                    submitBtn.disabled = true;
                    submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
                }
            });
            
            // Form submission
            document.getElementById('reportForm').addEventListener('submit', handleFormSubmit);
        });

        // Smooth scroll behavior for mobile navigation
        function smoothScroll() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Auto-resize textarea
        document.addEventListener('DOMContentLoaded', function() {
            const textarea = document.getElementById('reportDescription');
            textarea.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = (this.scrollHeight) + 'px';
            });
        });
    </script>
</body>
</html>