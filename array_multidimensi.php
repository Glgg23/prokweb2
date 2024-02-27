<?php

$mahasiswas = 
[["Anies","TI","8"],
["Prabowo","SI","9"],
["Ganjar","BD","16"]];

foreach ($mahasiswas as $mahasiswa ) {
    echo "Nama : " .$mahasiswa[0] ."<br>";
    echo "Jurusan : " .$mahasiswa[1] ."<br>";
    echo "Semester : " .$mahasiswa[2] ."<br>";
    echo "<br>";
}
 