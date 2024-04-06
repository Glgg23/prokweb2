<?php
class pasien{
    
    private $koneksi;

    public function __construct(){
        global $conn;
        $this->koneksi = $conn;
    }

    public function TampilData(){
        $sql = "SELECT p.*, k.nama AS nama_kelurahan
        FROM pasien p INNER JOIN kelurahan k ON k.id = p.kelurahan_id
        ORDER BY k.id DESC";
        $siap = $this->koneksi->prepare($sql);
        $siap->execute();
        $data = $siap->fetchALL();
        return $data;
    }
}
