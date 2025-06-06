<nav class="relative z-10 bg-white/80 backdrop-blur-lg border-b border-white/20 top-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo & Brand -->
            <div class="flex items-center">
                <div class="flex items-center space-x-3">
                    <div
                        class="w-10 h-10 bg-gradient-to-br from-green-500 to-teal-600 rounded-xl flex items-center justify-center">
                        <i class="fas fa-university text-white text-lg"></i>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-800">LaporKampus</h1>
                    </div>
                </div>
            </div>

            <!-- Navigation Menu -->
            <div class="hidden md:flex space-x-2">
                <a href="/" onclick="setActiveNav('home')" class="nav-item active px-4 py-2 rounded-lg font-medium"
                    id="nav-home">
                    <i class="fas fa-home mr-2"></i>
                    Home
                </a>
                <a href="/create" onclick="setActiveNav('lapor')"
                    class="nav-item px-4 py-2 rounded-lg font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-100"
                    id="nav-lapor">
                    <i class="fas fa-plus-circle mr-2"></i>
                    Laporkan
                </a>
                <a href="/report" onclick="setActiveNav('daftar')"
                    class="nav-item px-4 py-2 rounded-lg font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-100"
                    id="nav-daftar">
                    <i class="fas fa-list mr-2"></i>
                    Daftar Laporan
                </a>
            </div>

            <!-- Profile & Notifications -->
            <div class="flex items-center space-x-4">
                <button class="relative p-2 text-gray-600 hover:text-gray-800 transition-colors">
                    <i class="fas fa-bell text-lg"></i>
                    <span
                        class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-xs rounded-full flex items-center justify-center notification-badge">3</span>
                </button>

                <div class="flex items-center space-x-3">
                    <div
                        class="w-8 h-8 bg-gradient-to-br from-green-400 to-teal-500 rounded-full flex items-center justify-center">
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
            <a href="/" onclick="setActiveNav('home')"
                class="nav-item active flex-1 text-center py-2 rounded-lg font-medium text-sm" id="nav-home-mobile">
                <i class="fas fa-home"></i>
                <span class="block text-xs mt-1">Home</span>
            </a>
            <a href="/create" onclick="setActiveNav('lapor')"
                class="nav-item flex-1 text-center py-2 rounded-lg font-medium text-sm text-gray-600"
                id="nav-lapor-mobile">
                <i class="fas fa-plus-circle"></i>
                <span class="block text-xs mt-1">Laporkan</span>
            </a>
            <a href="/report" onclick="setActiveNav('daftar')"
                class="nav-item flex-1 text-center py-2 rounded-lg font-medium text-sm text-gray-600"
                id="nav-daftar-mobile">
                <i class="fas fa-list"></i>
                <span class="block text-xs mt-1">Daftar</span>
            </a>
        </div>
    </div>
</nav>