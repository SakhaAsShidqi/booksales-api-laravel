<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Genre Buku</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        h1 { color: #4CAF50; }
        table { width: 80%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Daftar Genre Buku</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Genre</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            {{-- Loop data $genres yang dikirim dari Controller --}}
            @foreach ($genres as $genre)
            <tr>
                <td>{{ $genre->id }}</td>
                <td>{{ $genre->nama }}</td>
                <td><td>{{ $genre->deskripsi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/">Kembali ke Home</a>
</body>
</html>