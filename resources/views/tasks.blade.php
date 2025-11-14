!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Daftar Tugas</h1>
        <a href="/tasks/create" class="btn btn-primary mb-3">Daftar Tugas</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Tugas</th>
                    <th scope="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <th scope="row">{{ $task->id }}</th>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
