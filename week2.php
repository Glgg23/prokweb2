<!-- panggil file atas atau header -->
<?php
include 'atas.php';
?>

<br>
<br>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Form Nilai</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <!-- tempat isi konten kita -->
                                <form method="POST" action="nilai.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasa-Dasar Pemrograman</option>
        <option value="WEB">Pemrograman Web</option>
        <option value="BASDAT">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="praktikum" class="col-4 col-form-label">Nilai Praktikum</label> 
    <div class="col-8">
      <input id="praktikum" name="praktikum" placeholder="Masukkan Nilai Praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="Data Berhasil disimpan" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php
// ambil value yg di input user dan simpan ke dalam variable
$proses = $_POST['proses'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$praktikum = $_POST['praktikum'];
$rata_rata = ($uts+$uas+$praktikum)/3;  //menghitung rata2
$keterangan = keterangan($rata_rata);
$grade = grade($rata_rata);
function keterangan ($rata_rata){
if ($rata_rata >= 55 && $rata_rata <=100) {
    return 'Anda Lulus';
}else {
    return 'Anda tidak Lulus';
}
}
function grade($rata_rata){
if ($rata_rata >= 85 && $rata_rata <=100) {
    return "A (Sangat baik)";
} elseif ($rata_rata >= 70 && $rata_rata <=84) {
    return "B (baik)";
} elseif ($rata_rata >= 56 && $rata_rata <=69) {
    return "C (Cukup)";
}  elseif ($rata_rata >= 36 && $rata_rata <=55) {
    return "D (Kurang)";
} elseif ($rata_rata >= 0 && $rata_rata <=35) {
    return "E (Sangat Kurang)";
}else{
    return "I (Tidak Nilai)";
}
}

// panggil variable yang memiliki value kolom, tampilkan menggunakan echo
echo "Proses : $proses";
echo "<br>Nama Lengkap : $nama";
echo "<br>Mata Kuliah : $matkul";
echo "<br>Nilai UTS : $uts";
echo "<br>Nilai UAS : $uas";
echo "<br>Nilai Praktikum : $praktikum";
echo "<br>Rata-Rata Nilai : $rata_rata";
echo "<br>keterangan : $keterangan";
echo "<br>Grade : $grade";
?>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
<!-- panggil file bawah atau footer -->
<?php
include 'bawah.php';
?>