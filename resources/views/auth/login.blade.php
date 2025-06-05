<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>LaporKampus - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #d1fae5 0%, #bae6fd 50%, #81e6d9 100%);
            min-height: 100vh;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .btn-primary {
            background: linear-gradient(to right, #22c55e, #14b8a6);
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #16a34a, #0f766e);
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen px-4">
    <div class="glass-card rounded-3xl p-8 max-w-md w-full shadow-lg">
        <div class="text-center mb-8">
            <div
                class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-green-500 to-teal-600 rounded-3xl mx-auto mb-4">
                <i class="fas fa-university text-white text-4xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-800">Masuk ke <span class="text-green-600">LaporKampus</span></h1>
            <p class="text-gray-600 mt-2">Masukkan akun Anda untuk melanjutkan</p>
        </div>

        <form action="#" method="POST" class="space-y-6">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username / NIM</label>
                <input type="text" id="username" name="username" required
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent transition"
                    placeholder="Masukkan username atau NIM" />
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
                <input type="password" id="password" name="password" required
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent transition"
                    placeholder="Masukkan kata sandi" />
            </div>

            <button type="submit"
                class="btn-primary w-full text-white font-semibold py-3 rounded-xl shadow-md hover:scale-105 transform transition">
                <i class="fas fa-sign-in-alt mr-2"></i> Masuk
            </button>
        </form>

        <p class="text-center text-gray-600 mt-6 text-sm">
            Belum punya akun?
            <a href="#" class="text-green-600 font-semibold hover:underline">Daftar di sini</a>
        </p>
    </div>
</body>

</html>