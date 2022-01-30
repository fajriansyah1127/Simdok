@extends('layout.layout')
@section('content')
<div class="content-wrapper">
  @if(session('pesan'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Alert!</h5>
  {{  session ('pesan')}}.
  </div>
  @endif

  <!-- Main content -->
<section class="content">

    
<div class="col-md-12 p-5 pt-2">
<h3><i class="nav-icon fas fa-history"></i> Riwayat</h3><hr>
    <!-- <a href="http://127.0.0.1:8000/user_add_upload_laporan_kinerja" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Unggah</a> -->
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">User</th>
          <th scope="col">Aktivitas</th>
          <th scope="col">Tanggal</th>
         
        
      </thead>
      <tbody>
          <tr>
            <td>1</td>
            <td>wdaw</td>
            <td>dwa</td>
            <td>9 juli 2000</td>
            
          </tr>
      </tbody>
    </table>

    


    </div>



  </section>
  <!-- /.content -->

@endsection
