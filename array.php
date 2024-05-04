<?php
// Membuat array dengan index "nama" dan "umur"
$data = array(
    array("nama" => "Richo", "umur" => 20),
    array("nama" => "Novian", "umur" => 20),
    array("nama" => "Saputra", "umur" => 20),
    array("nama" => "Muhammad", "umur" => 18),
    array("nama" => "Aulia", "umur" => 18),
    array("nama" => "Al", "umur" => 18),
    array("nama" => "Farouq", "umur" => 18),
    array("nama" => "Arya", "umur" => 19),
    array("nama" => "Yudha", "umur" => 19),
    array("nama" => "Prasetya", "umur" => 19),
    array("nama" => "Royan", "umur" => 22),
    array("nama" => "Zidane", "umur" => 22),
    array("nama" => "Sandro", "umur" => 22),
    array("nama" => "Refa", "umur" => 23),
    array("nama" => "Arditya", "umur" => 24)
);

// Konversi array menjadi JSON
$json_data = json_encode($data);

// Tampilkan JSON
echo $json_data;
?>
