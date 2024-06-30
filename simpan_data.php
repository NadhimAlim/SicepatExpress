<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jarak = $_POST['jarak'];
    $biaya = $_POST['biaya'];

    $data = "Jarak: {$jarak} km, Biaya: Rp {$biaya}\n";

    // Simpan ke dalam file pengiriman.txt
    file_put_contents('pengiriman.txt', $data, FILE_APPEND);

    echo "Data berhasil disimpan.";
}
