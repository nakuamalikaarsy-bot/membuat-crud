<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
        <a class="navbar-brand" href="/dashboard">Aplikasi Mahasiswa</a>
        <div>
            <a href="/dashboard" class="btn btn-sm btn-outline-primary me-2">Dashboard</a>
            <a href="/mahasiswa" class="btn btn-sm btn-outline-primary me-2">Data Mahasiswa</a>
            <form action="/logout" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-danger">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container mt-4">
        <p class="fs-4">Data Mahasiswa</p>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a class="btn btn-primary mb-3" href="/mahasiswa/create" role="button">Tambah Data</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mahasiswas as $index => $mhs)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->program_studi }}</td>
                    <td>{{ $mhs->no_hp }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="/mahasiswa/{{ $mhs->id }}" role="button">Detail</a>
                        <a class="btn btn-sm btn-warning" href="/mahasiswa/edit/{{ $mhs->id }}" role="button">Edit</a>
                        <a class="btn btn-sm btn-danger" href="/mahasiswa/delete/{{ $mhs->id }}" role="button"
                           onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data mahasiswa.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>