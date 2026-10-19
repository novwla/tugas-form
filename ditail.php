<?php
if (isset($_GET["nim"]) && isset($_GET["nama"]) && isset($_GET["jurusan"]) && isset($_GET["email"]) && isset($_GET["nilai"]) && isset($_GET["grade"]) && isset($_GET["status"])) {
    $nim = $_GET["nim"];
    $nama = $_GET["nama"];
    $jurusan = $_GET["jurusan"];
    $email = $_GET["email"];
    $nilai = $_GET["nilai"];
    $grade = $_GET["grade"];
    $status = $_GET["status"];
} else {
    // kalau data tidak lengkap balik ke index
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Detail Mahasiswa</h1>

    <p>NIM : <?php echo $nim; ?></p>
    <p>Nama : <?php echo $nama; ?></p>
    <p>Jurusan : <?php echo $jurusan; ?></p>
    <p>Email : <?php echo $email; ?></p>
    <p>Nilai : <?php echo $nilai; ?></p>
    <p>Grade : <?php echo $grade; ?></p>
    <p>Status : <?php echo $status; ?></p>

    <a href="index.php">Kembali</a>

</body>
</html>