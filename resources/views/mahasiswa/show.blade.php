<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detail Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-3">

                <div class="grid grid-cols-3 gap-2">
                    <span class="font-medium text-gray-600">NIM</span>
                    <span class="col-span-2">: {{ $mahasiswa->nim }}</span>
                </div>
                <div class="grid grid-cols-3 gap-2">
                    <span class="font-medium text-gray-600">Nama</span>
                    <span class="col-span-2">: {{ $mahasiswa->nama }}</span>
                </div>
                <div class="grid grid-cols-3 gap-2">
                    <span class="font-medium text-gray-600">Tempat Lahir</span>
                    <span class="col-span-2">: {{ $mahasiswa->tempat_lahir }}</span>
                </div>
                <div class="grid grid-cols-3 gap-2">
                    <span class="font-medium text-gray-600">Tanggal Lahir</span>
                    <span class="col-span-2">: {{ $mahasiswa->tanggal_lahir->format('d-m-Y') }}</span>
                </div>
                <div class="grid grid-cols-3 gap-2">
                    <span class="font-medium text-gray-600">Jenis Kelamin</span>
                    <span class="col-span-2">: {{ $mahasiswa->jenis_kelamin }}</span>
                </div>
                <div class="grid grid-cols-3 gap-2">
                    <span class="font-medium text-gray-600">Alamat</span>
                    <span class="col-span-2">: {{ $mahasiswa->alamat }}</span>
                </div>
                <div class="grid grid-cols-3 gap-2">
                    <span class="font-medium text-gray-600">Program Studi</span>
                    <span class="col-span-2">: {{ $mahasiswa->program_studi }}</span>
                </div>
                <div class="grid grid-cols-3 gap-2">
                    <span class="font-medium text-gray-600">Nomor HP</span>
                    <span class="col-span-2">: {{ $mahasiswa->no_hp }}</span>
                </div>
                <div class="grid grid-cols-3 gap-2">
                    <span class="font-medium text-gray-600">Email</span>
                    <span class="col-span-2">: {{ $mahasiswa->email }}</span>
                </div>

                <div class="pt-4">
                    <a href="{{ route('mahasiswa.index') }}"
                        class="inline-block px-4 py-2 bg-gray-600 text-white text-sm rounded-md hover:bg-gray-700">
                        &larr; Kembali
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>