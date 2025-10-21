<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Buku (Book)</title>
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background: #f6f8fb;
            color: #1f2937;
            margin: 24px;
        }

        h1 {
            margin: 0 0 12px;
            font-size: 1.5rem;
            font-weight: 600;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            box-shadow: 0 1px 4px rgba(16,24,40,0.06);
            border-radius: 8px;
            overflow: hidden;
        }

        thead th {
            text-align: left;
            padding: 12px 16px;
            background: linear-gradient(180deg,#f3f4f6,#eef2ff);
            color: #0f172a;
            font-weight: 700;
            font-size: 0.95rem;
            border-bottom: 1px solid #e6e9ef;
        }

        tbody td {
            padding: 12px 16px;
            vertical-align: middle;
            font-size: 0.95rem;
            border-bottom: 1px solid #f1f5f9;
        }

        tbody tr:nth-child(even) {
            background: #fbfdff;
        }

        tbody tr:hover {
            background: #f1f5f9;
        }

        td:first-child {
            color: #6b7280;
            width: 72px;
        }

        p a {
            display: inline-block;
            margin-top: 14px;
            padding: 8px 12px;
            background: #2563eb;
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
        }
        p a:hover { background: #1e40af; }
        
        @media (max-width: 700px) {
            table { display: block; overflow-x: auto; white-space: nowrap; }
            thead th, tbody td { padding: 10px 12px; }
            body { margin: 12px; }
        }
    </style>
</head>
<body>
    <h1>Daftar Buku (Book)</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>ISBN</th>
                <th>Author</th>
                <th>Tahun Terbit</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->author->nama }}</td> <td>{{ $book->tahun_terbit }}</td>
                <td>{{ $book->genre }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p><a href="/">Kembali</a></p>
</body>
</html>