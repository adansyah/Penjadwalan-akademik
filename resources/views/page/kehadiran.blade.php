@extends('components.app')
@section('content')
    <div class=" mx-auto p-4 border border-gray-200 rounded-xl bg-white">

        <!-- Navigasi Hari -->
        <div x-data="{
            days: [
                { date: 30, label: 'Senin', full: '2025-06-30' },
                { date: 1, label: 'Selasa', full: '2025-07-01' },
                { date: 2, label: 'Rabu', full: '2025-07-02' },
                { date: 3, label: 'Kamis', full: '2025-07-03' },
                { date: 4, label: 'Jumaat', full: '2025-07-04' },
                { date: 5, label: 'Sabtu', full: '2025-07-05' },
                { date: 6, label: 'Minggu', full: '2025-07-06' },
            ],
            activeDayIndex: null,
            init() {
                const today = new Date().toISOString().split('T')[0];
                const index = this.days.findIndex(day => day.full === today);
                this.activeDayIndex = index !== -1 ? index : null;
            }
        }" x-init="init()" class="w-full overflow-x-auto mb-4">
            <div
                class="flex m-auto w-max gap-4 px-4 py-3 text-center text-sm border rounded-xl bg-white shadow-md border-gray-300">
                <template x-for="(day, index) in days" :key="index">
                    <div @click="activeDayIndex = index"
                        :class="[
                            'min-w-[60px] md:min-w-[80px] py-2 px-3 rounded-lg shadow-sm cursor-pointer transition duration-200 whitespace-nowrap',
                            activeDayIndex === index ?
                            'bg-blue-900 text-white font-semibold scale-105' :
                            'bg-gray-100 text-blue-900 font-bold hover:bg-gray-200'
                        ]">
                        <span class="text-lg" x-text="day.date"></span><br>
                        <span class="text-xs" x-text="day.label"></span>
                    </div>
                </template>
            </div>
        </div>

        <!-- Judul -->
        <h2 class="text-sm font-semibold text-gray-700 mb-3">Kelas</h2>

        <!-- Kelas 1 (Ungu) -->
        <div class="border border-gray-300 rounded-xl mb-3 overflow-hidden">
            <div class="bg-gray-300 text-white px-4 py-3 flex justify-between items-start">
                <div>
                    <p class="text-xs text-gray-500">Ruang 203-G1</p>
                    <p class="font-semibold text-blue-900">Perancangan Sistem Informasi</p>
                </div>
                <button type="button"
                    class="focus:outline-none font-bold text-green-700 bg-green-200   rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                    Hadir</button>
            </div>
            <div class="bg-white text-sm text-blue-900 px-4 py-2">
                <p class="text-gray-500">Presensi<br></p><span class="font-medium">08:00</span>
            </div>
        </div>

        <!-- Kelas 2 (Biru) -->
        <div class="border border-gray-300 rounded-xl mb-3 overflow-hidden">
            <div class="bg-gray-300 text-white px-4 py-3 flex justify-between items-start">
                <div>
                    <p class="text-xs text-gray-500">Ruang 203-G1</p>
                    <p class="font-semibold text-blue-900">Bahasa Indonesai</p>
                </div>
                <button type="button"
                    class="focus:outline-none font-bold text-red-700 bg-red-300   rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Tidak
                    Hadir</button>
            </div>
            <div class="bg-white text-sm text-blue-900 px-4 py-2">
                <p class="text-gray-500">Presensi<br></p><span class="font-medium">-</span>
            </div>
        </div>

    </div>
@endsection
