<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Mahasiswa</title>
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
        <p class="fs-4">Detail Data Mahasiswa</p>

        <table class="table table-borderless">
            <tr><th style="width: 200px;">NIM</th><td>: {{ $mahasiswa->nim }}</td></tr>
            <tr><th>Nama</th><td>: {{ $mahasiswa->nama }}</td></tr>
            <tr><th>Tempat Lahir</th><td>: {{ $mahasiswa->tempat_lahir }}</td></tr>
            <tr><th>Tanggal Lahir</th><td>: {{ date('d-m-Y', strtotime($mahasiswa->tanggal_lahir)) }}</td></tr>
            <tr><th>Jenis Kelamin</th><td>: {{ $mahasiswa->jenis_kelamin }}</td></tr>
            <tr><th>Alamat</th><td>: {{ $mahasiswa->alamat }}</td></tr>
            <tr><th>Program Studi</th><td>: {{ $mahasiswa->program_studi }}</td></tr>
            <tr><th>Nomor HP</th><td>: {{ $mahasiswa->no_hp }}</td></tr>
            <tr><th>Email</th><td>: {{ $mahasiswa->email }}</td></tr>
        </table>

        <a href="/mahasiswa" class="btn btn-secondary">&larr; Kembali</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>