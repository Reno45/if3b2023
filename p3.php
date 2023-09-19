<?php
// Pertemuan ke-3
// function dan if

$npm = 2226250098;
$nama = "Reno";

// Built-in function

$tahun_masuk = substr($npm, 0, 2);
echo $tahun_masuk;
$tahun_lulus = substr($npm, 2, 2);
echo "<br>".$tahun_lulus;
$prodi = substr($npm, 4, 2);
echo "<br>".$prodi;
$nomor_urut = substr($npm, 6, 4);
echo "<br>".$nomor_urut;
echo "<hr>";
echo strtoupper($nama);
echo "<br>".ucfirst($nama);

// if condicion
// kode prodi: 25 maka informatika
// kode prodi: 24 maka sistem infomasi

echo "<br>";
if($prodi == 25) {
    echo "Informatika";
} else if ($prodi == 24) {
    echo "Sistem Informasi";
}

// include 
echo "<hr>";
require('mdp.halper.php');
echo get_prodi($prodi);


// array mahasiswa
echo "<hr>";
$mahasiswa = [
        [
            "npm" => 2226250098,
            "nama" => "Reno"
        ],
        [
            "npm" => 2226240099,
            "nama" => "Dewa"
        ],
        
    ];
echo "<table class='table tablesw-striped table-hover'>
   <thead>
    <tr>  
        <th> NPM </th>
        <th> Nama </th>
        <th> Program Studi </th>
    </tr>
    </thead>
    <tbody>";
    foreach($mahasiswa as $row){
        echo "<tr>
        <td> ".$row["npm"]."</td>
        <td> ".$row["nama"]."</td>
        <td> ".get_prodi(substr($row["npm"],4, 2))."</td>


        </tr>";
    };
    echo "</tbody></table>";
    echo "<hr>";

 
?>