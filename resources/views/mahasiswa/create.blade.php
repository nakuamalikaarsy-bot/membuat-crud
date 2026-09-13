<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf
                    @include('mahasiswa.mahasiswa')

                    <div class="flex items-center gap-4 mt-6">
                        <x-primary-button>
                            Simpan
                        </x-primary-button>
                        <a href="{{ route('mahasiswa.index') }}" class="text-gray-600 hover:underline">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>