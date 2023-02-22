<?php
// $mahasiswa = [
//     ["Ahdian Mirza", "J0304201057", "ahdianmirza@gmail.com", "Teknik Komputer"],
//     ["Doddy Ferdiansyah", "J0304201154", "doddy@gmail.com", "Teknik Informatika"]
// ];

// Array Associative
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Ahdian Mirza",
        "nim" => "J0304201057",
        "email" => "ahdianmirza@gmail.com",
        "jurusan" => "Teknik Komputer",
        "gambar" => "ahdian.jpg"
    ],
    [
        "nama" => "Doddy Ferdiansyah",
        "nim" => "J0304201154",
        "email" => "doddy@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nopal.jpg"
    ]
];
// echo $mahasiswa[1]["email"];
// echo $mahasiswa[1]["jurusan"];
// echo $mahasiswa[1]["tugas"][2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>