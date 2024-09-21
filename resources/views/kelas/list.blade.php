<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Halaman Kelas</h3>
    <a href="{{ route('kelas.create') }}">
        Tambah Kelas
    </a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kode Kelas</th>
            <th>Nama Kelas</th>
        </tr>
        @foreach ($classes as $key => $item )
        <tr>
            <td>{{ ($key + 1) }}</td>
            <td>{{ $item->class_code }}</td>
            <td>{{ $item->class_name }}</td>
            <td><a
                    href="{{ route('kelas.show', $item->id) }}">Lihat
                    Data</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>