<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                {{-- Notifikasi sukses --}}
                @if (session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-md">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Tombol Tambah --}}
                <a href="{{ route('mahasiswa.create') }}"
                    class="inline-block mb-4 px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700">
                    + Tambah Mahasiswa
                </a>

                {{-- Tabel Data --}}
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 border">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase border">No</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase border">NIM</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase border">Nama</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase border">Program Studi</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase border">No HP</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase border">Email</th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase border">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($mahasiswas as $index => $mhs)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $mahasiswas->firstItem() + $index }}</td>
                                    <td class="px-4 py-2 border">{{ $mhs->nim }}</td>
                                    <td class="px-4 py-2 border">{{ $mhs->nama }}</td>
                                    <td class="px-4 py-2 border">{{ $mhs->program_studi }}</td>
                                    <td class="px-4 py-2 border">{{ $mhs->no_hp }}</td>
                                    <td class="px-4 py-2 border">{{ $mhs->email }}</td>
                                    <td class="px-4 py-2 border">
                                        <div class="flex gap-3">
                                            <a href="{{ route('mahasiswa.show', $mhs->id) }}"
                                                class="text-blue-600 hover:underline text-sm">Detail</a>
                                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}"
                                                class="text-yellow-600 hover:underline text-sm">Edit</a>
                                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:underline text-sm">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-4 py-4 text-center text-gray-500 border">
                                        Belum ada data mahasiswa.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="mt-4">
                    {{ $mahasiswas->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>