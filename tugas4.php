<?php
$mahasiswa = ["Andi", "Budi", "Citra", "Doni", "Eka"];
$cari = "Citra";

foreach ($mahasiswa as $nama) {
    if ($nama == $cari) {
        echo "$cari ditemukan dalam daftar.";
        break;
    }
}
?>
