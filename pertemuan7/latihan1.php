<?php
// variable scope / lingkup variable
// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();
// echo "<br>";
// echo $x;

// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];

// $_GET
// $_GET["nama"] = "Ahdian Mirza";
// $_GET["nim"] = "J0304201057";
// http://localhost/phpdasar/pertemuan7/latihan1.php?nama=Ahdian%20Mirza
// http://localhost/phpdasar/pertemuan7/latihan1.php?nama=Ahdian%20Mirza&nim=J0304201057
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

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>