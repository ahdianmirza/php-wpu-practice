<?php
// Built-in Function
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-F-Y");

// Time
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("d F Y", time() - 60 * 60 * 24 * 100);

// mktime
// Membuat sendiri detik
// mktime(0, 0, 0, 0, 0, 0, 0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 11, 6, 2001));

// strtotime
// echo date("l", strtotime("6 nov 2001"));

// String
// strlen()
// strcmp()
// explode()
// htmlspecialchars()

// Utility
// var_dump()
// isset()
// empty()
// die()
// sleep()