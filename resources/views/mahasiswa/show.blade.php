!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Detail Mahasiswa</h1>
        <div class="card">
            <div class="card-header">
                {{ $mahasiswa->name }}
            </div>
            <div class="card-body">
                <h5 class="card-title">NIM: {{ $mahasiswa->nim }}</h5>
                <p class="card-text">Email: {{ $mahasiswa->email }}</p>
                <p class="card-text">Jurusan: {{ $mahasiswa->jurusan }}</p>
                <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
