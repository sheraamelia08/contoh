<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Kontak</title>
</head>
<body>
    <h2>Edit Kontak</h2>
    <form action="/contacts/{{ $Product->id }}" method="POST">
        @csrf
        @method("PUT")

        <div>
            <label for="name">Nama Kontak:</label>
            <input type="text" id="name" name="name" value="{{ $Product->name }}" required>
        </div>
        <br>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $Product->email }}" required>
        </div>
        <br>

        <div>
            <label for="phone">Telepon:</label>
            <input type="text" id="phone" name="phone" value="{{ $Product->phone }}" required>
        </div>
        <br>

        <div>
            <label for="address">Alamat:</label>
            <input type="text" id="address" name="address" value="{{ $Product->address }}" required>
        </div>
        <br>

        <div>
            <label for="notes">Catatan:</label>
            <textarea id="notes" name="notes" required>{{ $Product->notes }}</textarea>
        </div>
        <br>

        <button type="submit">Update Kontak</button>
    </form>
</body>
</html>
