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
        <?php $no=1; ?>  
        @foreach ( $riwayat as $data )
          <tr>
            <td>{{ $no++}}</td>
            <td>{{ $data->Nama }}</td>
            <td>{{ $data->Aktivitas }}</td>
            <td>{{ $data->created_at }}</td>
            @endforeach
            
          </tr>
      </tbody>
    </table>

    


    </div>



  </section>
  <!-- /.content -->

@endsection
