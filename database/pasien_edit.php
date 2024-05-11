<?php
include 'dbkoneksi.php';
include 'models/Pasien.php';
include 'models/Kelurahan.php';
include 'atas.php';

// buat object dari class kelas
$obj_pasien = new Pasien();
$obj_kelurahan = new Kelurahan();

// panggil method tampildata untuk menampilkan seluruh data kelas
$data_pasien = $obj_pasien->TampilData();
$data_kelurahan = $obj_kelurahan->TampilData();


$idedit = $_REQUEST['idedit'];
$pasien = !empty($idedit) ? $obj_pasien->ambildata($idedit) :[];

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">edit kelas</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">

<!-- FORM -->
<form action="pasien_controller.php" method="POST">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" value="<?= $pasien ['kode']?>" placeholder="Masukkan Kode" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" value="<?= $pasien ['nama']?>"placeholder="Masukkan Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" value="<?= $pasien ['tmp_lahir']?>"placeholder="Masukkan Tempat Lahir" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" value="<?= $pasien ['tgl_lahir']?>"placeholder="Masukkan Tanggal Lahir" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-4 col-form-label">Gender</label> 
    <div class="col-8">
      <input id="gender" name="gender" value="<?= $pasien ['gender']?>" type="text" class="form-control" aria-describedby="genderHelpBlock"> 
    </div>
    <br>
    <br>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" value="<?= $pasien ['email']?>" placeholder="Masukkan Email" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="alamat" name="alamat" value="<?= $pasien ['alamat']?>" placeholder="Masukkan Alamat" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="kelurahan_id" class="col-4 col-form-label">Kelurahan</label> 
    <div class="col-8">
      <select id="kelurahan_id" name="kelurahan_id" class="custom-select">
        <option selected>--Pilih Kelurahan--</option>
        <?php
        foreach ($data_kelurahan as $kelurahan_id) {
        ?>
        <option value="<?= $kelurahan_id['id']?>"><?php echo $kelurahan_id['nama']?></option>
        <?php
        }
        ?>
      </select>
    </div>
  </div>
  <div class="modal-footer">
        <button name="proses" value="ubah" class="btn btn-primary">edit</button>
        <input type="hidden" name="idx" value="<?= $idedit ?>">
      </div>
</form>
      </div>
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
    </main>


    <!-- panggil file bawah atau footer -->
    <?php
    include 'bawah.php';
    ?>
