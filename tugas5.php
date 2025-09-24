<?php
$data = [
    ["nama" => "Andi", "status" => "aktif"],
    ["nama" => "Budi", "status" => "nonaktif"],
    ["nama" => "Citra", "status" => "aktif"],
];

foreach ($data as $mhs) {
    if ($mhs["status"] != "aktif") {
        continue;
    }
    echo $mhs["nama"] . " adalah mahasiswa aktif.\n";
}
?>
