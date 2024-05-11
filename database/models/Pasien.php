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

    public function ambildata($id){
        $sql = "SELECT p.*, k.nama AS nama_kelurahan 
        FROM pasien p 
        INNER JOIN kelurahan k ON k.id = p.kelurahan_id
        WHERE p.id = ?" ;

        $siap = $this->koneksi->prepare($sql);
        $siap->execute([$id]); 
        $data = $siap->fetch();
        return $data;

    }

    public function simpan($data){
        $sql="INSERT INTO pasien (kode,nama,tmp_lahir,tgl_lahir,gender,email,alamat,kelurahan_id)
        VALUES (?,?,?,?,?,?,?,?)";
        $siap = $this->koneksi->prepare($sql);
        $siap->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE pasien SET kode=?,nama=?,tmp_lahir=?,tgl_lahir=?,gender=?,email=?,alamat=?,kelurahan_id=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM pasien WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }


}