<?php
//Buat Function Sendiri
//Funtion Untuk Mendapatkan Nama Prodi

function get_prodi($kode_prodi) {
    // Bisa Pakai If Else
    //Bisa Pake Array

    $array = [
        25 => "Informatika",
        24 => "Sistem Informasi",
        17 => "Teknik Elektro",
        11 => "Manajemen Informatika",
        20 => "Manajemen",
        21 => "Akuntasi"
    ];
    return $array[$kode_prodi];

}


?>