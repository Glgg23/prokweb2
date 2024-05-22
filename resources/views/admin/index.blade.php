
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
          <h5>Halo Nama Saya {{$username}} </h5>
          <tr>
          <table class="table table-bordered" >
  <thead>
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
      <td><h4>Endo</h4></td>
      <td><h4>26</h4></td>
      <td><h4>endot1@gmmail.com</h4></td>
      <td><h4>GJ</h4></td>
      <td><h4>Shibuya</h4></td>
    </tr>
    <tr>
      <td><h4>Goat Grealish</h4></td>
      <td><h4>28</h4></td>
      <td><h4>grealish4@gmmail.com</h4></td>
      <td><h4>GRL</h4></td>
      <td><h4>Manchaster</h4></td>
    </tr>
    <tr>
      <td><h4>El Klemer</h4></td>
      <td><h4>20</h4></td>
      <td><h4>rafael12@gmmail.com</h4></td>
      <td><h4>ELK</h4></td>
      <td><h4>Denhag</h4></td>
    </tr>
    <tr>
      <td><h4>El Gasing</h4></td>
      <td><h4>23</h4></td>
      <td><h4>antoninarkoboy@gmmail.com</h4></td>
      <td><h4>ELG</h4></td>
      <td><h4>Manchaster</h4></td>
    </tr>
  </tbody>
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



