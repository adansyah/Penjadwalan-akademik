<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pilih Login - KampusTime</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-white min-h-screen flex items-center justify-center px-4">
    <div class="text-center space-y-8 max-w-sm w-full">
        <!-- Logo -->
        <div class="flex flex-col items-center">
            <div class="flex gap-1 mb-1">
                <div class="bg-green-500 w-6 h-6 rounded-sm"></div>
                <div class="bg-zinc-500 mt-2 w-6 h-6 rounded-sm -ml-2"></div>
            </div>
            <span class="text-xl font-bold text-blue-900">KampusTime</span>
        </div>

        <!-- Judul -->
        <div>
            <h1 class="text-2xl font-bold text-blue-900">Selamat Datang</h1>
            <p class="text-gray-500 mt-1">Login Sebagai Apa?</p>
        </div>

        <div class="space-y-4">
            <!-- Mahasiswa -->
            <a href="{{ route('log_mahasiswa') }}"
                class="flex justify-between items-center bg-blue-900 text-white px-6 py-4 rounded-lg shadow hover:bg-blue-800 transition">
                <div>
                    <div class="font-semibold text-lg">Mahasiswa</div>
                    <div class="text-sm font-light">Portal akses Mahasiswa</div>
                </div>
                <i class="bi bi-chevron-right text-xl"></i>
            </a>

            <!-- Staff Admin -->
            <a href="{{ route('log_staf') }}"
                class="flex justify-between items-center bg-blue-50 text-blue-900 px-6 py-4 rounded-lg shadow hover:bg-blue-100 transition">
                <div>
                    <div class="font-semibold text-lg">Staff Admin</div>
                    <div class="text-sm font-light">Portal akses Staff Admin</div>
                </div>
                <i class="bi bi-chevron-right text-xl"></i>
            </a>
        </div>
    </div>
</body>

</html>
