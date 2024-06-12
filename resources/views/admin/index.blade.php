
  <!-- Navbar -->
 @include('layouts.header');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('layouts.sidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Admin</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
<table class="table table-bordered" >
  <thead>
    <tr>
      <th colspan="5"><h2>Biodata</h2></th>
    </tr>
    <tr>
      <th><h4>nama</h4></th>
      <th><h4>umur</h4></th>
      <th><h4>email</h4></th>
      <th><h4>Kampus</h4></th>
      <th><h4>Alamat</h4></th>
    </tr>
  </thead>
  <tbody >
    <tr>
      <td><h4>{{$nama}}</h4></td>
      <td><h4>{{$umur}}</h4></td>
      <td><h4>{{$email}}</h4></td>
      <td><h4>{{$kampus}}</h4></td>
      <td><h4>{{$alamat}}</h4></td>
    </tr>
    <tr>
      <td><h4>king tolib</h4></td>
      <td><h4>23</h4></td>
      <td><h4>tolibingindimanja@gmmail.com</h4></td>
      <td><h4>NF</h4></td>
      <td><h4>cibinong</h4></td>
    </tr>
    <tr>
      <td><h4>juna</h4></td>
      <td><h4>12</h4></td>
      <td><h4>tolibmanja2@gmmail.com</h4></td>
      <td><h4>UPN</h4></td>
      <td><h4>CIRAMBAY</h4></td>
    </tr>
    <tr>
      <td><h4>Pahri</h4></td>
      <td><h4>23</h4></td>
      <td><h4>tolibpoenya@gmmail.com</h4></td>
      <td><h4>UGM</h4></td>
      <td><h4>Ciamis</h4></td>
    </tr>
    <tr>
      <td><h4>syawalah</h4></td>
      <td><h4>40</h4></td>
      <td><h4>tolibnibus@gmmail.com</h4></td>
      <td><h4>UPS</h4></td>
      <td><h4>CIBADUYUT</h4></td>
    </tr>
  </tbody>
</table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- footer --}}
  @include('layouts.footer');
  {{-- tutup footer --}}



