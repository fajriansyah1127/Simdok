@extends('layout.layout')

@section('content')
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
  
        <div class="row mt-6 ml-4 p-5">
          <div class="card ml-5 text-white text-center" style="width: 25rem; height: 15rem">
            <div class="card-header bg-dark display-4 pt-4 pb-4">
              <i class="nav-icon fas fa-users"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-dark"><b>Tambah User</b></h5><br><br>
              <a href="/admin&user" class="btn btn-dark">Lihat Disini</a>
            </div>
      </div>
       
           <div class="card ml-5 text-white text-center" style="width: 25rem; height: 15rem;">
                 <div class="card-header bg-dark display-4 pt-4 pb-4">
                   <i class="fas fa-upload"></i>
                 </div>
                 <div class="card-body">
                   <h5 class="card-title text-dark"><b>UPLOAD DOKUMEN</b></h5><br><br>
                   <a href="/upload" class="btn btn-dark">Lihat Disini</a>
                 </div>
           </div>
           
           <div class="card ml-5 text-white text-center" style="width: 25rem; height: 15rem;">
            <div class="card-header bg-dark display-4 pt-4 pb-4">
              <i class="nav-icon fas fa-landmark"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-dark"><b>UNIT ASURANSI</b></h5><br><br>
              <a href="/asuransi" class="btn btn-dark">Lihat Disini</a>
            </div>
      </div>

           <div class="card ml-5 text-white text-center" style="width: 25rem; height: 15rem;">
            <div class="card-header bg-dark display-4 pt-4 pb-4">
              <i class="nav-icon fas fa-list"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title text-dark"><b>KUMPULAN DOKUMEN</b></h5><br><br>
              <a href="/dokumen" class="btn btn-dark">Lihat Disini</a>
            </div>
      </div>
       
       
           {{-- <div class="card ml-5 text-white text-center" style="width: 25rem; height: 15rem;">
                 <div class="card-header bg-dark display-4 pt-4 pb-4">
                   <i class="fas fa-upload"></i>
                 </div>
                 <div class="card-body">
                     <h5 class="card-title text-dark"><b>user upload arsip</b></h5><br><br>
                     <a href="/user_upload" class="btn btn-dark">Lihat Disini</a>
                 </div>
           </div> --}}
  
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content -->
    @endsection