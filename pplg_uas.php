<?php
$siswa = array(
    array("Nama" => "Bayu", "Nilai" => 85),
    array("Nama" => "Nura", "Nilai" => 87),
    array("Nama" => "Andini", "Nilai" => 90),
    array("Nama" => "Mukaromah", "Nilai" => 65),
    array("Nama" => "Kalila", "Nilai" => 75)
);

function getStatusKelulusan($nilai)
{
    if ($nilai >= 85) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

echo "Daftar Siswa:</br>";
echo "----------------</br>";

foreach ($siswa as $data) {
    echo "Nama: " . $data["Nama"] . "</br>";
    echo "Nilai: " . $data["Nilai"] . "</br>";
    echo "Status Kelulusan: " . getStatusKelulusan($data["Nilai"]) . "</br>";
}

?>