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
<h3><i class="fas fa-upload"></i> KUMPULAN ARSIP</h3><hr>
    <!-- <a href="http://127.0.0.1:8000/user_add_upload_laporan_kinerja" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Unggah</a> -->
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Tanggal Upload</th>
          <th scope="col">Nama</th>
          <th scope="col">Nomor Surat</th>
          <th colspan="2" scope="col">Aksi</th>
        </tr>
        
      </thead>
      <tbody>
          <tr>@foreach($dokumen as $data)
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->File }}</td>
            <td>{{ $data->Nama }}</td>
            <td>{{ $data->Nama_asuransi }}</td>
            <td>
              {{-- <a href="{{ route('download', $data->File) }}"class="btn btn-sm btn-success">Download</a> --}}
              <a href="/download/{{$data->File}}" class="btn btn-primary btn-sm">Unduh File</a>
              <a href="/edit_dokumen/{{$data->id}}"class="btn btn-sm btn-warning">Edit</a>
              <a href="/hapus/{{$data->id}}"class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>@endforeach
      </tbody>
    </table>

    


</div>
</div>


  </section>
  <!-- /.content -->
</div>
@endsection