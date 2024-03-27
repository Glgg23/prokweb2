<?php
// buat class
class Rumah{

// property
public $nama_pemilik = "kosong";
public $warna_rumah = "kosong";
public $merk_tv = "kosong";

// method
private function getRumah($nama_pemilik, $warna_rumah, $merk_tv){
echo "</br>";
echo "Rumah ini  milik " . $nama_pemilik;
echo "</br>"; 
echo "Warna Rumah ini adalah " . $warna_rumah;
echo "</br>";
echo "Merk TV nya " . $merk_tv;
}
public function getDetail(){
    echo $this->getRumah("Pak Jawir", "Putih", "Samsung");
}


}
//object 1
// $rumah1 = new Rumah();
// $rumah1 ->nama_pemilik = "Bu Aul";
// $rumah1 ->warna_rumah = "Pink";
// $rumah1 ->merk_hp = "Thosiba";
// var_dump($rumah1);

echo "</br>";
echo "</br>";
echo "<hr>";
// object 2
$rumah2 = new Rumah();
$rumah2->getDetail("Pak Jawir","putih","samsung");
echo "</br>";
echo "</br>";
// var_dump($rumah2);