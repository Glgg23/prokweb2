<!-- step 1 ambil data yg diinput user simpan ke dalam variable-->

<!-- step 2 simpan data yang diinput ke dalam array -->

<!-- step 3 kirim data array melalui tombol simpan dengan value masing2 tombol
ke dalam file model/function masing2 tombol -->
<?php
include_once 'dbkoneksi.php';
include_once 'models/Pasien.php';


$_kode = $_POST['kode']; 
$_nama = $_POST['nama']; 
$_tmp_lahir = $_POST['tmp_lahir']; 
$_tgl_lahir = $_POST['tgl_lahir']; 
$_gender = $_POST['gender']; 
$_email = $_POST['email']; 
$_alamat = $_POST['alamat']; 
$_kelurahan_id = $_POST['kelurahan_id']; 

$data = [
    $_kode,
    $_nama,
    $_tmp_lahir,
    $_tgl_lahir,
    $_gender,
    $_email,
    $_alamat,
    $_kelurahan_id,
];

$model_pasien = new Pasien();
$tombol =  $_REQUEST ['proses'];
switch ($tombol) {
    case 'simpan':
        $model_pasien->simpan($data);
        header('Location:pasien.php');
        break;
        case 'ubah':
            $data[] = $_POST['idx'];
            $model_pasien->ubah($data);
            break;
    
            case 'hapus':
                unset($id);
                $model_pasien->hapus($_POST['idx']);
                break;
        default:
            header('Location:pasien.php');
            break;
    }
    header('Location:pasien.php');