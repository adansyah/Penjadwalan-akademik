@extends('components.app')
@section('content')
    <div class=" mx-auto">
        <!-- Header -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gray-300 h-32 relative">
                <div
                    class=" absolute left-1/2 transform -translate-x-1/2 bottom-[-40px] w-20 h-20 rounded-full overflow-hidden border-4 border-white">
                    <img src="{{ asset('sahdan.jpeg') }}" alt="Foto Profil" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="pt-14 pb-4  text-center">
                <h1 class="font-bold text-lg">Syahdan Mutahariq</h1>
                <p class="text-sm text-gray-500">@adansyah225@gmail.com</p>
                <p class="text-sm text-gray-500">Teknik Informatika-S1</p>
                <div class="flex justify-center gap-10 mt-2 text-sm">
                    <div class="text-center">
                        <span class="font-semibold text-gray-800 text-base">4 Tahun</span><br>Masa Kuliah
                    </div>
                    <div class="text-center">
                        <span class="font-semibold text-gray-800 text-base">23110065</span><br>NIM
                    </div>
                </div>
            </div>

            <!-- Informasi Pribadi -->
            <div class="flex">
                <div class="w-2 bg-blue-900 rounded-l-lg"></div>
                <div class=" px-6 py-4 border-b border-gray-300 flex-1">
                    <h2 class="font-semibold text-gray-700 text-center mb-2 bg-gray-300 px-3 py-1 rounded">Informasi Pribadi
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-y-3 gap-10 text-sm text-gray-800">
                        <div>
                            <span class="text-gray-500">Nama</span><br>{{ $data->name }}
                        </div>
                        <div>
                            <span class="text-gray-500">Jenis Kelamin</span><br>{{ $data->gender }}
                        </div>
                        <div>
                            <span class="text-gray-500">Negara</span><br><span
                                class="font-semibold">{{ $data->negara }}</span>
                        </div>
                        <div>
                            <span class="text-gray-500">Agama</span><br><span
                                class="font-semibold">{{ $data->agama }}</span>
                        </div>
                        <div>
                            <span class="text-gray-500">Nama Panggilan</span><br>{{ $data->panggilan }}
                        </div>
                        <div>
                            <span class="text-gray-500">Tanggal Lahir</span><br><span
                                class="font-semibold">{{ Carbon\Carbon::parse($data->tanggal_lahir)->format('d F Y') }}</span>
                        </div>
                        <div>
                            <span class="text-gray-500">Daerah</span><br><span
                                class="font-semibold">{{ $data->daerah }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kontak -->
            <div class="flex pt-5">
                <div class="w-2 bg-blue-900 rounded-l-lg"></div>
                <div class="bg-gray-50 px-6 py-3 border-t border-gray-200 flex-1">
                    <h2 class="font-semibold text-gray-700 text-center mb-2 bg-gray-300 px-3 py-1 rounded">Kontak</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-y-3 gap-10 text-sm text-gray-800">
                        <div>
                            <span class="text-gray-500">Email</span><br>
                            <a href="mailto:brodiethom@gmail.com" class="text-blue-600 font-medium hover:underline">
                                {{ $data->email }}
                            </a>
                        </div>
                        <div>
                            <span class="text-gray-500">Alamat</span><br>
                            <span class="font-medium">{{ $data->alamat }}</span><br>
                            02/28<br>40218
                        </div>
                        <div>
                            <span class="text-gray-500">Nomor Telfon</span><br>
                            <span class="font-medium">{{ $data->telp }}</span>
                        </div>
                        <div>
                            <span class="text-gray-500">Nomer Whatsapp</span><br>
                            <span class="font-medium">{{ $data->telp_wa }}</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
