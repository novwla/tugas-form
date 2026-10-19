<?php
if (isset($_POST["nama"]) && isset($_POST["kelas"]) && isset($_POST["pesan"])) {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $pesan = $_POST["pesan"];
} else {
    // kalau dibuka langsung tanpa isi form
    header("Location: form_pesan.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Pesan Berhasil Dikirim</h1>

    <p>Terima kasih, <b>
        <?php echo $nama; ?>
    </b>!</p>

    <p>Nama : <?php echo $nama; ?></p>
    <p>Kelas : <?php echo $kelas; ?></p>
    <p>Pesan / Kesan : <?php echo $pesan; ?></p>

    <a href="index.php">Kembali ke Data Mahasiswa</a>

</body>
</html>