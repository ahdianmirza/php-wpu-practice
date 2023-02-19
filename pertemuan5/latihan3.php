<?php
$mahasiswa = [
    ["Ahdian Mirza", "J0304201057", "Teknik Komputer", "ahdiansvipbmirza@apps.ipb.ac.id"],
    ["Budi Setiawan", "J0304201065", "Informatika", "budisetiawan@apps.ipb.ac.id"],
    ["Erik Tohir", "J0304201145", "Teknik Mesin", "eriktohir@apps.ipb.ac.id"]
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

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>