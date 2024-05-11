<?php
class Periksa{
    
    private $koneksi;

    public function __construct(){
        global $conn;
        $this->koneksi = $conn;
    }

    public function TampilData(){
        $sql = "SELECT e.*, p.nama AS nama_pasien
        FROM periksa e INNER JOIN pasien p ON p.id = e.pasien_id
        ORDER BY p.id DESC";
        $siap = $this->koneksi->prepare($sql);
        $siap->execute();
        $data = $siap->fetchALL();
        return $data;
    }
}