<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Table</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #e0f7fa, #ffecb3); /* Softer gradient background */
            color: #333;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Daftar Kontak ☏</h1>
        <table class="table table-bordered table-hover">
            <thead class="bg-success text-white">
                <div style="display: flex; justify-content: center;">
        <a href="{{ url('/input') }}">
             <button type="button" class="btn btn-primary">Tambah</button>
        </a>
    </div>
    <br>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Catatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Product as $index => $item)
                    <tr>
                        <td>{{ $index + $Product->firstItem() }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->notes }}</td>
                        <td>
                            <form action="/contacts/{{ $item->id }}/edit" method="GET" class="d-inline">
                                <button type="submit" class="btn btn-info btn-sm">Edit</button>
                            </form>
                            <form action="/contacts/{{ $item->id }}" method="POST" class="d-inline">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $Product->links() }}
    </div>
</body>
</html>
