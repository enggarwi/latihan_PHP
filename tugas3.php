<?php
$kode_fakultas = "FTI";

switch ($kode_fakultas) {
    case "FEB":
        echo "Fakultas Ekonomi dan Bisnis";
        break;
    case "FTI":
        echo "Fakultas Teknologi Informasi";
        break;
    case "FAPERTA":
        echo "Fakultas Pertanian";
        break;
    default:
        echo "Fakultas tidak dikenali";
        break;
}
?>
