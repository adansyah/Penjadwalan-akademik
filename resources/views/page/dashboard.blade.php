@extends('components.app')
@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-6">
        <div class="bg-yellow-100 text-yellow-800 p-4 rounded-lg">
            <div class="text-sm">Mata Kuliah</div>
            <div class="text-2xl font-bold">07</div>
            <div class="text-xs">2 Terlaksana</div>
        </div>
        <div class="bg-red-100 text-red-800 p-4 rounded-lg">
            <div class="text-sm">Kehadiran</div>
            <div class="text-2xl font-bold">60%</div>
            <div class="text-xs">24% Tidak Hadir</div>
        </div>
        <div class="bg-blue-100 text-gray-800 p-4 rounded-lg">
            <div class="text-sm">Izin</div>
            <div class="text-2xl font-bold">5</div>
            <div class="text-xs">5 Disetujui</div>
        </div>
    </div>

    <!-- Main Content Columns -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Jadwal Section -->
        <div class="md:col-span-2 space-y-4">
            <h2 class="font-semibold">Jadwal Hari Ini</h2>

            <!-- Sebelumnya -->
            <div class="bg-purple-100 p-3 rounded">
                <h2 class="text-gray-600">Susanto</h2>
                <div class="font-semibold text-purple-600">Komputer Dan Masyarakat</div>
                <div class="text-sm">Ruang 203-G1</div>
                <div class="text-sm text-right text-purple-600">15.30–17.00 | Hadir</div>
            </div>

            <!-- Sekarang -->
            <div class="bg-green-100 p-3 rounded">
                <h2 class="text-gray-600">Dewi Fawziati</h2>
                <div class="font-semibold">Metode Numerik</div>
                <div class="text-sm text-gray-600">Ruang 103-G1</div>
                <div class="text-sm text-right text-green-600">15.30–17.00 | Hadir</div>
            </div>

            <!-- Akan Datang -->
            <h2 class="text-gray-600 font-semibold">Jadwal Akan Datang</h2>
            <div class="bg-indigo-100 p-3 rounded">
                <h2 class="text-gray-600">Hamdani</h2>
                <div class="font-semibold">Keamanan Database</div>
                <div class="text-sm text-gray-600">Online</div>
                <div class="text-sm text-right text-indigo-600">15.30–17.00</div>
            </div>

            <div class="bg-pink-100 p-3 rounded">
                <h2 class="text-gray-600">Herika Fauzia</h2>
                <div class="font-semibold">Proses Bisnis</div>
                <div class="text-sm text-gray-600">Ruang 07-G2</div>
                <div class="text-sm text-right text-pink-600">13.50–15.30</div>
            </div>
        </div>

        <!-- Aktivitas dan Tugas -->
        <div class="space-y-6">
            <div>
                <h2 class="font-semibold mb-2">Aktivitas Terlaksana</h2>
                <div class="bg-blue-900 text-white p-3 rounded space-y-2 text-sm">
                    <div>
                        <i class="bi bi-box-arrow-right"></i>
                        <strong class="font-semibold italic">Hadir dalam Metode
                            Numerik</strong><br />
                        <p class="text-gray-200">Hari ini, 10:30 AM</p>

                    </div>
                    <hr>
                    <div>
                        <i class="bi bi-upc"></i>
                        <strong class="font-semibold italic">Absensi Via Scan Barcode Berhasil</strong><br />
                        <p class="text-gray-200">Hari ini, 10:00 AM</p>

                    </div>
                    <hr>
                    <div>
                        <i class="bi bi-person-add"></i>
                        <strong class="font-semibold italic">Pengajuan izin untuk Komputer &
                            Masyarakat</strong><br />
                        <p class="text-gray-200">Sabtu, 13.00–15.30</p>

                    </div>
                    <hr>
                </div>
            </div>
            <div>
                <h2 class="font-semibold mb-2">Informasi & Tugas</h2>
                <div class="space-y-2 text-sm">
                    <div class="bg-red-100 text-red-700 p-3 rounded">
                        <i class="bi bi-info-circle-fill"></i>
                        <strong>Tugas Studi Kasus-Proses Bisnis</strong><br />
                        Kamis, 3 Juni 2025
                    </div>
                    <div class="bg-yellow-100 text-yellow-700 p-3 rounded">
                        <i class="bi bi-info-square-fill"></i>
                        <strong>Tugas Individu-Keamanan Database</strong><br />
                        Kamis, 10 Juni 2025
                    </div>
                    <div class="bg-blue-100 text-blue-700 p-3 rounded">
                        <i class="bi bi-door-open-fill"></i>
                        <strong>Ruangan Kosong 103-G1</strong><br />
                        Senin, 2 Juni 2025
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
