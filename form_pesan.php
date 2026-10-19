<!DOCTYPE html>
<html>
<head>
    <title>Form Pesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Form Pesan Mahasiswa</h1>

    <form method="post" action="hasil_pesan.php">
        <p>Nama</p>
        <input type="text" name="nama">

        <p>Kelas</p>
        <input type="text" name="kelas">

        <p>Pesan / Kesan</p>
        <textarea name="pesan" rows="5" cols="30"></textarea>

        <br><br>
        <button type="submit">Kirim</button>
        <a href="index.php">Kembali</a>
    </form>

</body>
</html>