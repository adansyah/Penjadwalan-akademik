<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KampusTime Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <script>
        // Script sederhana untuk toggle dropdown
        function toggleDropdown() {
            const dropdown = document.getElementById("dropdown-menu");
            dropdown.classList.toggle("hidden");
        }

        // Klik di luar untuk tutup dropdown
        window.addEventListener("click", function(e) {
            const button = document.getElementById("dropdown-button");
            const menu = document.getElementById("dropdown-menu");
            if (!button.contains(e.target)) {
                menu.classList.add("hidden");
            }
        });
    </script>
</head>

<body class="bg-gray-100">
    <div class="flex flex-col md:flex-row min-h-screen">
        {{-- Sidebar --}}
        @include('components.sidebar')
        {{-- Sidebar --}}

        <!-- Main Content -->
        <main class="flex-1 p-4 md:p-8  md:mt-0">
            {{-- Navbar --}}
            @include('components.navbar')
            {{-- Navbar --}}

            <!-- Yield content -->
            @yield('content')
        </main>
    </div>
</body>

</html>
