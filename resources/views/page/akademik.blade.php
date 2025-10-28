@extends('components.app')
@section('content')
    <div class="max-w-6xl mx-auto p-4 grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- KRS Section -->
        <div class="md:col-span-2">
            <div class="bg-white rounded-xl shadow p-6 border border-gray-200">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold text-blue-900">Pengisian KRS</h2>
                    <input type="checkbox" class="form-checkbox rounded text-blue-600" checked />
                </div>
                <p class="text-sm text-gray-500 mb-4 italic">Pilih Mata Kuliah:</p>

                <div class="space-y-3">
                    {{-- Matkul Dipilih --}}
                    <div class="border border-gray-300 rounded-xl overflow-hidden">
                        <div class="bg-blue-900 text-white px-4 py-3 flex justify-between items-start">
                            <div>
                                <p class="text-xs">Ruang 203-G1</p>
                                <p class="font-semibold">Komputer & Masyarakat</p>
                            </div>
                            <input type="checkbox" class="form-checkbox text-blue-900 bg-white rounded" checked />
                        </div>
                        <div class="bg-white text-sm text-blue-900 px-4 py-2">
                            <p class="text-gray-500">Dosen<br></p><span class="font-medium">Susanto</span>
                        </div>
                    </div>

                    <!-- Perancangan Sistem Informasi (checked) -->
                    <div class="border border-gray-300 rounded-xl overflow-hidden">
                        <div class="bg-blue-900 text-white px-4 py-3 flex justify-between items-start">
                            <div>
                                <p class="text-xs">Ruang 203-G1</p>
                                <p class="font-semibold">Perancangan Sistem Informasi</p>
                            </div>
                            <input type="checkbox" class="form-checkbox text-blue-900 bg-white rounded" checked />
                        </div>
                        <div class="bg-white text-sm text-blue-900 px-4 py-2">
                            <p class="text-gray-500">Dosen<br></p><span class="font-medium">Jajat Sudrajat</span>
                        </div>
                    </div>

                    <!-- Bahasa Indonesia (unchecked) -->
                    <div class="border border-gray-300 rounded-xl overflow-hidden">
                        <div class="bg-blue-900 text-white px-4 py-3 flex justify-between items-start">
                            <div>
                                <p class="text-xs">Ruang 203-G1</p>
                                <p class="font-semibold">Bahasa Indonesia</p>
                            </div>
                            <input type="checkbox" class="form-checkbox text-blue-900 bg-white rounded" />
                        </div>
                        <div class="bg-white text-sm text-blue-900 px-4 py-2">
                            <p class="text-gray-500">Dosen<br></p><span class="font-medium">Cucu Sugyati</span>
                        </div>
                    </div>

                    <!-- Metode Numerik -->
                    <div class="border border-gray-300 rounded-xl overflow-hidden">
                        <div class="bg-blue-900 text-white px-4 py-3 flex justify-between items-start">
                            <div>
                                <p class="text-xs">Ruang 107-G1</p>
                                <p class="font-semibold">Metode Numerik</p>
                            </div>
                            <input type="checkbox" class="form-checkbox text-blue-900 bg-white rounded" />
                        </div>
                        <div class="bg-white text-sm text-blue-900 px-4 py-2">
                            <p class="text-gray-500">Dosen<br></p><span class="font-medium">Dewi Fawziati</span>
                        </div>
                    </div>

                    <!-- Keamanan Database -->
                    <div class="border border-gray-300 rounded-xl overflow-hidden">
                        <div class="bg-blue-900 text-white px-4 py-3 flex justify-between items-start">
                            <div>
                                <p class="text-xs">Online</p>
                                <p class="font-semibold">Keamanan Database</p>
                            </div>
                            <input type="checkbox" class="form-checkbox text-blue-900 bg-white rounded" />
                        </div>
                        <div class="bg-white text-sm text-blue-900 px-4 py-2">
                            <p class="text-gray-500">Dosen<br></p><span class="font-medium">Hamdani</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-4">
            <a href="admin"
                class="flex justify-between items-center bg-blue-900 text-white px-6 py-4 rounded-lg shadow hover:bg-blue-800 transition">
                <i class="bi bi-download text-2xl"></i>
                <div>
                    <div class="font-semibold text-lg">Kartu Ujian</div>
                    <div class="text-sm font-light">Cetak kartu ujian anda</div>
                </div>
                <i class="bi bi-chevron-right text-xl"></i>
            </a>
            <a href="admin"
                class="flex justify-between items-center bg-blue-50 text-blue-900 px-6 py-4 rounded-lg shadow hover:bg-blue-100 transition">
                <i class="bi bi-calendar3 text-2xl mr-6"></i>
                <div>
                    <div class="font-semibold text-lg">Riwayat KRS</div>
                    <div class="text-sm font-light">Riwayat KRS yang telah diambil</div>
                </div>
                <i class="bi bi-chevron-right text-xl"></i>
            </a>
        </div>

    </div>
    </div>
@endsection
