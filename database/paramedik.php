<?php
include 'dbkoneksi.php';
include 'models/Paramedik.php';
include 'models/unit_kerja.php';
include 'atas.php';

// buat object dari class kelas
$obj_paramedik = new Paramedik();
$obj_unit_kerja = new Unit_kerja();

// panggil method tampildata untuk menampilkan seluruh data kelas
$data_paramedik = $obj_paramedik->TampilData();
$data_unit_kerja = $obj_unit_kerja->TampilData();
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Admin</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <!-- buat table disini -->
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">TanggaL Lahir</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Unit Kerja</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1; 
                            // Periksa apakah ada data_kelas sebelum melakukan loop
                            if ($data_paramedik) {
                                foreach ($data_paramedik as $data) {
                            ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $data['nama']?></td>
                                        <td><?= $data['gender']?></td>
                                        <td><?= $data['tmp_lahir']?></td>
                                        <td><?= $data['tgl_lahir']?></td>
                                        <td><?= $data['telepon']?></td>
                                        <td><?= $data['alamat']?></td>
                                        <td><?= $data['nama_unit_kerja']?></td>
                                        <td>
          <form action="paramedik_controller.php" method="POST">
            <a href="paramedik_edit.php?idedit=<?= $data ['id']?>">
          <button type="button" class="btn btn-success" title = "edit">edit</button>
          </a>
          <input type="hidden" name="idx" value="<?= $data ['id'] ?>">

          <button type="submit" class="btn btn-danger" name="proses" value="hapus"
          onclick="return confirm('apakah anda yakin ingin menghapus data paramedik <?= $data['nama']?>')">hapus</button>
          </form>
        </td>
                                    </tr>
                            <?php
                                    $no++;
                                }
                            } else {
                                // Tampilkan pesan jika tidak ada data
                                echo "<tr><td colspan='7'>Tidak ada data yang ditemukan</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
                    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kelas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form -->
      <form action="paramedik_controller.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan Inisial Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="gender" class="col-4 col-form-label">Gender</label> 
    <div class="col-8">
      <input id="gender" name="gender" type="text" class="form-control" aria-describedby="genderHelpBlock"> 
      <span id="genderHelpBlock" class="form-text text-muted">Ketik (L/P)</span>
    </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" type="date" class="form-control">
    </div>
  </div>
 <div class="form-group row">
    <label for="telepon" class="col-4 col-form-label">Telepon</label> 
    <div class="col-8">
      <input id="telepon" name="telepon" placeholder="Masukkan Tempat Lahir" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="alamat" name="alamat" placeholder="Masukkan Alamat" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="unit_kerja_id" class="col-4 col-form-label">Unit kerja</label> 
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
  <div class="modal-footer">
        <button type="submit" name="proses" value="simpan" class="btn btn-primary">Simpan</button>
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
