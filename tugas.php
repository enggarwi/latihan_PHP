<?php
$a = "10";
$b = "20";
$jumlah = $a + $b;
echo "Hasil penjumlahan string angka: $jumlah<br><br>";

$angka1 = 10;
$angka2 = 3;

$pembagian = $angka1 / $angka2;
$modulo = $angka1 % $angka2;

echo "Pembagian (10 / 3): $pembagian<br>";
echo "Modulo (10 % 3): $modulo<br><br>";

$tugas1 = "90";
$tugas2 = "80";
$gabungan = $tugas1 . $tugas2;
echo "Gabungan string tugas1 dan tugas2: $gabungan<br><br>";

$string1 = 'Ini adalah string sederhana';
$string2 = 'Ini adalah
string yang bisa
memiliki beberapa
baris';
$string3 = 'Dia berkata: "I\\\'ll be back"';
$string4 = 'Anda telah berhasil menghapus C:\\\\xampp\\\\htdoc';
$string5 = 'Kalimat ini tidak akan pindah ke: \\n baris baru';
$string6 = 'Variabel juga tidak otomatis ditampilkan $string1 dan $string3';

echo $string1 . "<br>";
echo nl2br($string2) . "<br>";
echo $string3 . "<br>";
echo $string4 . "<br>";
echo $string5 . "<br>";
echo $string6 . "<br><br>";

$nama = "Enggar Widiatama Sunarya";
echo "Halo $nama\\n";
echo "Kalimat ini pindah ke baris baru:\\nBaris kedua";
?>
