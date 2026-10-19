<?php
$mahasiswa = [
    [
        "nim" => "25001",
        "nama" => "Andi Pratama",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "andi@upi.edu",
        "nilai" => 88
    ],
    [
        "nim" => "25002",
        "nama" => "Budi Santoso",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "budi@upi.edu",
        "nilai" => 76
    ],
    [
        "nim" => "25003",
        "nama" => "Citra Lestari",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "citra@upi.edu",
        "nilai" => 67
    ],
    [
        "nim" => "25004",
        "nama" => "Dina Maharani",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "dina@upi.edu",
        "nilai" => 92
    ],
    [
        "nim" => "25005",
        "nama" => "Eko Saputra",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "eko@upi.edu",
        "nilai" => 58
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <a href="form_pesan.php">Isi Form Pesan</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Status</th>
            <th>Detail</th>
        </tr>

        <?php
        $nomor = 1;
        foreach ($mahasiswa as $data) {

            // cari grade
            if ($data["nilai"] >= 80) {
                $grade = "A";
            } elseif ($data["nilai"] >= 70) {
                $grade = "B";
            } elseif ($data["nilai"] >= 60) {
                $grade = "C";
            } else {
                $grade = "D";
            }

            // cari status
            if ($data["nilai"] >= 70) {
                $status = "Lulus";
            } else {
                $status = "Tidak Lulus";
            }
        ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $data["nim"]; ?></td>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["jurusan"]; ?></td>
            <td><?php echo $data["nilai"]; ?></td>
            <td><?php echo $grade; ?></td>
            <td><?php echo $status; ?></td>
            <td>
                <a href="detail.php?nim=<?php echo $data["nim"]; ?>&nama=<?php echo $data["nama"]; ?>&jurusan=<?php echo $data["jurusan"]; ?>&email=<?php echo $data["email"]; ?>&nilai=<?php echo $data["nilai"]; ?>&grade=<?php echo $grade; ?>&status=<?php echo $status; ?>">Lihat Detail</a>
            </td>
        </tr>
        <?php
            $nomor++;
        }
        ?>
    </table>

</body>
</html>