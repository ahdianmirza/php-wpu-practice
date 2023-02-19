<?php
// Array
// Variable yang dapat memiliki banyak nilai
// Elemen pada array boleh memiliki tipe data yang berbeda
// Pasangan antara key dan value
// Key-nya adalah index yang dimulai dari 0

// Membuat Array
// Cara Lama
$hari = array("Senin", "Selasa", "Rabu");

// Cara Baru
$bulan = ["Januari", "Februari", "Maret", "April"];
$arr1 = [123, "Tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);
