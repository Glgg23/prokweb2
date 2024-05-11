<?php

class Paramedik{
    
    private $koneksi;

    public function __construct(){
        global $conn;
        $this->koneksi = $conn;
    }

    public function TampilData(){
        $sql = "SELECT k.*, u.nama AS nama_unit_kerja
        FROM paramedik k INNER JOIN unit_kerja u ON u.id = k.unit_kerja_id
        ORDER BY k.id DESC";
        $siap = $this->koneksi->prepare($sql);
        $siap->execute();
        $data = $siap->fetchALL();
        return $data;
    }
    public function ambildata($id){
        $sql = "SELECT k.*, u.nama AS nama_unit_kerja 
        FROM paramedik k 
        INNER JOIN unit_kerja u ON u.id = k.unit_kerja_id
        WHERE k.id = ?" ;

        $siap = $this->koneksi->prepare($sql);
        $siap->execute([$id]);
        $data = $siap->fetch();
        return $data;

    }

    public function simpan($data){
        $sql="INSERT INTO paramedik (nama,gender,tmp_lahir,tgl_lahir,telepon,alamat,unit_kerja_id)
        VALUES (?,?,?,?,?,?,?,?)";
        $siap = $this->koneksi->prepare($sql);
        $siap->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE paramedik SET nama=?,gender=?,tmp_lahir=?,tgl_lahir=?,telepon=?,alamat=?,unit_kerja_id=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM paramedik WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }


}