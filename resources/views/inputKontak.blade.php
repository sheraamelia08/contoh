<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Kontak</title>
</head>
<body>

    <h1>Tambah Kontak Baru</h1>

    @if ($errors->any())
    <p style="color: rgb(192, 243, 255);">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </p>
@endif


<form action="/create" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required><br><br>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required><br><br>
    </div>

    <div class="form-group">
        <label for="phone">Telepon</label>
        <input type="tel" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" required><br><br>
    </div>

    <div class="form-group">
        <label for="address">Alamat</label>
        <textarea class="form-control" name="address" id="address">{{ old('address') }}</textarea><br><br>
    </div>

    <div class="form-group">
        <label for="notes">Catatan</label>
        <textarea class="form-control" name="notes" id="notes">{{ old('notes') }}</textarea><br><br>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
   
</form>


</form>



</body>
</html>
