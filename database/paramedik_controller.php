<!-- step 1 ambil data yg diinput user simpan ke dalam variable-->

<!-- step 2 simpan data yang diinput ke dalam array -->

<!-- step 3 kirim data array melalui tombol simpan dengan value masing2 tombol
ke dalam file model/function masing2 tombol -->
<?php
include_once 'dbkoneksi.php';
include_once 'models/Paramedik.php';


$_nama = $_POST['nama']; 
$_gender = $_POST['gender']; 
$_tmp_lahir = $_POST['tmp_lahir']; 
$_tgl_lahir = $_POST['tgl_lahir']; 
$_telepon = $_POST['telepon']; 
$_alamat = $_POST['alamat']; 
$_unit_kerja_id = $_POST['unit_kerja_id']; 

$data = [
    $_nama,
    $_gender,
    $_tmp_lahir,
    $_tgl_lahir,
    $_telepon,
    $_alamat,
    $_unit_kerja_id,
];

$model_paramedik = new Paramedik();
$tombol =  $_REQUEST ['proses'];
switch ($tombol) {
    case 'simpan':
        $model_paramedik->simpan($data);
        header('Location:paramedik.php');
        break;
        case 'ubah':
            $data[] = $_POST['idx'];
            $model_paramedik->ubah($data);
            break;
    
            case 'hapus':
                unset($id);
                $model_paramedik->hapus($_POST['idx']);
                break;
        default:
            header('Location:paramedik.php');
            break;
    }
    header('Location:paramedik.php');