<?php
include 'dbkoneksi.php';
include 'models/Periksa.php';
include 'atas.php';

// buat object dari class kelas
$obj_periksa = new Periksa();

// panggil method tampildata untuk menampilkan seluruh data kelas
$data_periksa = $obj_periksa->TampilData();
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
                                <th scope="col">Tanggal</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Tinggi</th>
                                <th scope="col">Tensi</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Nama Pasien</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

$no = 1;

// Periksa apakah ada data_kelas sebelum melakukan loop
if ($data_periksa) {
  foreach ($data_periksa as $data) {
?>

<tr>
  <td><?= $no ?></td>
  <td><?= $data['tanggal'] ?></td>
  <td><?= $data['berat'] ?></td>
  <td><?= $data['tinggi'] ?></td>
  <td><?= $data['tensi'] ?></td>
  <td><?= $data['keterangan'] ?></td>
  <td><?= $data['nama_pasien'] ?></td>
  <td>Kahfi Arya Pratama</td>
  <td>Edit | Hapus</td>
</tr>



<?php
        $no++;
      }
    }
  
else {
  // Tampilkan pesan jika tidak ada data
  echo "<tr><td colspan='7'>Tidak ada data yang ditemukan</td></tr>";
}

?>

                        </tbody>
                    </table>
                    <button class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
        </div>
    </main>
    <!-- panggil file bawah atau footer -->
    <?php
    include 'bawah.php';
    ?>