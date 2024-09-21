<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Kelas</h1>
    <form action="{{ route('kelas.store') }}"
        method="post">
        @csrf
        <label for="">Kode Kelas</label><br>
        <input type="text" name="kode_kelas" id=""
            placeholder="Masukkan Kode Kelas"
            required>
        <br>
        <label for="">Nama Kelas</label><br>
        <input type="text" name="nama_kelas" id=""
            placeholder="Masukkan Nama Kelas"
            required>
        <br>
        <button type="submit"
            value="simpan">Simpan</button>

    </form>
</body>

</html>