@extends('layout.layout')

@section('content')

      
    
      {{-- <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset('template')}}/plugins/fontawesome-free/css/all.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Tempusdominus Bootstrap 4 -->
      <link rel="stylesheet" href="{{asset('template')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="{{asset('template')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- JQVMap -->
      <link rel="stylesheet" href="{{asset('template')}}/plugins/jqvmap/jqvmap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="{{asset('template')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="{{asset('template')}}/plugins/daterangepicker/daterangepicker.css">
      <!-- summernote -->
      <link rel="stylesheet" href="{{asset('template')}}/plugins/summernote/summernote-bs4.min.css"> --}}
    {{-- </head>
    <body> --}}
    {{-- <div> --}}
      <!-- Preloader -->
      {{-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('template')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
      </div>
    
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/home" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="/contact" class="nav-link">Contact</a>
          </li>
        </ul> --}}
    
        <!-- Right navbar links -->
        {{-- </nav> --}}
        <div class="content-wrapper">
            <div class="container">
            <div class="card mt-2">
        <div class="card-header">
          <h4 style="text-align:center"><b>CARI DOKUMEN </b></h4>
        </div>
        <div class="card-body">
          <form action="" method="GET">
  
            <div class="form-row">
                <div class="form-group col">
                    <label for="judul">Nama</label>
                    <input id="judul" type="text" name="judul" class="form-control"
                        placeholder="Nama ">
                </div>
                <div class="form-group col-sm-3">
                    <label for="Status">Unit Asuransi</label>
                    <select class="form-control" id="status" name="status">
                        <option disabled selected>Semua</option>
                                                                <option value="1">Jamsar</option>
                                                                <option value="2">Jamkrindo</option>
                                                                <option value="3">Askrindo</option>
                                                                <option value="4">Jasa Raharja</option>
                                                            </select>
                </div>
            </div>
    
            <div class="form-row">
                <div class="form-group col-sm-3">
                    <label for="nomor">Nomor</label>
                    <input id="nomor" type="text" class="form-control" name="nomor" placeholder="Nomor">
                </div>
    
                <div class="form-group col-sm-3">
                    <label for="jenis">Jenis</label>
                    <select name="jenis" class="selectpicker form-control" id="jenis" data-live-search="true"
                        title="Pilih jenis Dokumen">
                        <option value="2" >Asuransi </option>
                        <option value="3" >Surat Otorisasi </option>
                                                            </select>
                </div>
    
                <div class="form-group col-sm-3">
                  <label for="tahun">Tahun</label>
                  <div class="input-group">
                          <input type="text" class="form-control" name="datepicker" id="datepicker" placeholder="Pilih tahun berlaku"/>
  
                  </div>
              </div>
            </div>
    
            <button class="btn btn-info float-right">Cari Data</button>
    
        </form>
      </div>
  </div>
  </div>
</div>
</div>
</div>
<!-- /.content -->


  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@endsection

{{-- </body>
</html> --}}
