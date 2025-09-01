<header class="md:hidden flex justify-between items-center p-4 bg-white shadow">
    <!-- Logo (vertikal) -->
    <div class="flex flex-col items-center">
        <div class="flex items-center gap-1 mb-1">
            <div class="bg-green-500 w-4 h-4 rounded-sm"></div>
            <div class="bg-zinc-500 mt-4 w-4 h-4 rounded-sm -ml-2"></div>
        </div>
        <span class="text-sm font-bold text-gray-800">KampusTime</span>
    </div>

    <!-- Sidebar Button -->
    <button onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')"
        class="text-3xl text-gray-800 p-2 rounded hover:bg-gray-100">
        <i class="bi bi-list block"></i>
    </button>
</header>
<aside id="sidebar"
    class="w-64 bg-zinc-300 shadow h-full-screen rounded md:translate-x-0 -translate-x-full transition-transform fixed md:static z-30 p-6 md:block">
    <div class="flex flex-col items-center mb-5">
        <div class="flex flex-col items-center">
            <div class="flex items-center gap-1 mb-1">
                <div class="bg-green-500 w-6 h-6 rounded-sm"></div>
                <div class="bg-zinc-500 mt-4 w-6 h-6 rounded-sm -ml-2"></div>
            </div>
            <span class="text-sm font-bold text-gray-800">KampusTime</span>
        </div>
    </div>
    <p>----------------------------</p>
    <nav class="space-y-4 text-gray-700 mt-5 mx-4">
        <a href="dashboard"
            class="flex items-center gap-2 font-semibold {{ Request::is('dashboard') ? 'text-blue-600' : '' }}">
            <i class="bi bi-house-fill"></i>Dashboard
        </a>
        <a href="profile" class="flex items-center gap-2 {{ Request::is('profile') ? 'text-blue-600' : '' }}">
            <i class="bi bi-person-circle"></i>Profile
        </a>
        <a href="akademik"" class="flex items-center gap-2 {{ Request::is('akademik') ? 'text-blue-600' : '' }}">
            <i class="bi bi-person-plus-fill"></i>Dosen & Mata Kuliah
        </a>
        <a href="ruangan" class="flex items-center gap-2 {{ Request::is('ruangan') ? 'text-blue-600' : '' }}">
            <i class="bi bi-building"></i>Ruangan & Kelas
        </a>
        <a href="kehadiran" class="flex items-center gap-2 {{ Request::is('kehadiran') ? 'text-blue-600' : '' }}">
            <i class="bi bi-person-fill-check"></i>Kehadiran
        </a>
    </nav>
</aside>
