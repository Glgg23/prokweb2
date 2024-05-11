<?php
class unit_kerja{
    private $koneksi;
    // method
    public function __construct(){
        global $conn;
        $this->koneksi = $conn;
    }
    public function TampilData(){
        $sql = "SELECT * FROM unit_kerja";
        $siap = $this->koneksi->prepare($sql);
        $siap->execute();
        $data = $siap->fetchAll();
        return $data;
    }
}