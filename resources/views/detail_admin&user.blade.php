@extends('layout.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <!-- Main content -->
    <section class="content">

       <!-- Default box -->
       <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Digital Strategist
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>{{ $pengguna->Nama }} </b></h2>
                      <p class="text-muted text-sm"><b>Jabatan: </b> {{ $pengguna->Jabatan }}</p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: {{ $pengguna->Alamat }}</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: {{ $pengguna->Email }}</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: {{ $pengguna->Kontak }}</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      {{-- <img src="{{asset('template')}}/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid"> --}}
                      <img src="{{ url('foto/'.$pengguna->Foto) }}" alt="user-avatar" class="img-circle img-fluid" >
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  {{-- <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                  </div> --}}
                </div>
              </div>
            </div>






    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    @endsection

 