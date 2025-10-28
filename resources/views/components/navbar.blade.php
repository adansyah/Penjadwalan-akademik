<div class="flex justify-between items-center px-6 py-4 bg-white shadow mb-6 rounded-sm">
    <h1 class="text-2xl font-semibold text-blue-900">Dashboard</h1>

    <div class="flex items-center gap-4 relative">
        <!-- Notifikasi: hanya tampil di md ke atas -->
        {{-- <button class="text-blue-900 text-xl relative hidden md:block">
            <i class="bi bi-bell"></i>
            <span class="absolute top-0 right-0 w-2 h-2 bg-blue-500 rounded-full"></span>
        </button> --}}

        <!-- Dropdown Trigger -->
        <div id="dropdown-button" onclick="toggleDropdown()" class="flex items-center gap-2 cursor-pointer">
            <img src="{{ asset('sahdan.jpeg') }}" alt="Avatar" class="w-8 h-8 rounded-full object-cover" />

            <div class="text-sm leading-tight hidden sm:block">
                <div class="font-semibold text-blue-900">Syahdan Mutahariq</div>
                <div class="text-gray-500 text-xs">Mahasiswa</div>
            </div>

            <i class="bi bi-caret-down-fill text-blue-900 text-xs"></i>
        </div>

        <div id="dropdown-menu"
            class="absolute right-0 top-14 bg-white border rounded-md shadow-md h-18 w-40 hidden z-50">
            <a href="/profile" class="block px-4 py-2 text-sm hover:bg-gray-100">My Profile</a>
            <form method="POST" action="/logout">
                @csrf
                <a href="/" class="block w-full text-left px-4 py-2 text-sm hover:bg-gray-100">Logout</a>
                {{-- <button type="submit"
                                class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100">Logout</button> --}}
            </form>
        </div>
    </div>

</div>
