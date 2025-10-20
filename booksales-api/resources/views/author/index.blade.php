<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Penulis (Author)</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        h1 { color: #007BFF; }
        table { width: 80%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Daftar Penulis (Author)</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Penulis</th>
                <th>Negara</th>
                <th>Tahun Lahir</th>
            </tr>
        </thead>
        <tbody>
            {{-- Loop data $authors yang dikirim dari Controller --}}
            @foreach ($authors as $author)
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->nama }}</td>
                <td>{{ $author->negara }}</td>
                <td>{{ $author->tahun_lahir }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/">Kembali ke Home</a>
</body>
</html>