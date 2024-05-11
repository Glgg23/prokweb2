<?php
class Kelurahan{
    private $koneksi;
    // method
    public function __construct(){
        global $conn;
        $this->koneksi = $conn;
    }
    public function TampilData(){
        $sql = "SELECT * FROM kelurahan";
        $siap = $this->koneksi->prepare($sql);
        $siap->execute();
        $data = $siap->fetchAll();
        return $data;
    }
}