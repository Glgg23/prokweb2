<!-- panggil file atas atau header -->
<?php
include 'dbkoneksi.php';
include 'models/Paramedik.php';
include 'models/Unit_kerja.php';
include 'atas.php';
// buat object dari class kelas
$obj_paramedik = new Paramedik();
$obj_unit_kerja = new Unit_kerja();
// panggil method tampildata untuk menampilkan seluruh data kelas
$data_paramedik = $obj_paramedik->TampilData();
$data_unit_kerja = $obj_unit_kerja->TampilData();

$idedit = $_REQUEST['idedit'];
$paramedik = !empty($idedit) ? $obj_paramedik->ambildata($idedit) : [];

?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">edit paramedik</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <form action="paramedik_controller.php" method="POST">
                            <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" value="<?= $paramedik ['nama']?>" placeholder="Masukkan Inisial Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-4 col-form-label">Gender</label> 
    <div class="col-8">
      <input id="gender" name="gender" value="<?= $paramedik ['gender']?>" type="text" class="form-control" aria-describedby="genderHelpBlock"> 
      <span id="genderHelpBlock" class="form-text text-muted">Ketik (L/P)</span>
    </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" value="<?= $paramedik ['tmp_lahir']?>" placeholder="Masukkan Tempat Lahir" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" value="<?= $paramedik ['tgl_lahir']?>" placeholder="Masukkan Tanggal Lahir" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="telepon" class="col-4 col-form-label">Telepon</label> 
    <div class="col-8">
      <input id="telepon" name="telepon" value="<?= $paramedik ['telepon']?>" placeholder="Masukkan Nomor Telepon" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="alamat" name="alamat" value="<?= $paramedik ['alamat']?>" placeholder="Masukkan Alamat" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="unit_kerja_id" class="col-4 col-form-label">Unit Kerja</label> 
    <div class="col-8">
      <select id="unit_kerja_id" name="unit_kerja_id" class="custom-select">
        <option selected>--Pilih Unit Kerja--</option>
        <?php
        foreach ($data_unit_kerja as $unit_kerja_id) {
        ?>
        <option value="<?= $unit_kerja_id['id']?>"><?php echo $unit_kerja_id['nama']?></option>
        <?php
        }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
        <button name="proses" value="ubah" class="btn btn-primary">Edit</button>
        <input type="hidden" name="idx" value="<?= $idedit ?>">
      </div>
</form>

<!-- Button trigger modal -->
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