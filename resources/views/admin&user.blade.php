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
  <h3><i class="fas fa-users mr-2"></i></i>USER
    <div class="float-right mb-3">
      <a href="/create" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah User</a>
  </div></h3>
  
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Action</th>
          </tr>
          
        </thead>
        <tbody> @foreach($pengguna as $data)
          <tr> 
           
            <td>{{ $data->ID }}</td>
            <td>{{ $data->Nama }}</td>
            <td>{{ $data->Email }}</td>
            <td>{{ $data->Jabatan }}</td>
            
            <td>
              <a href="/detail_admin&user/{{ $data->ID }}"class="btn btn-sm btn-success">Detail</a>
              <a href="/edit_admin&user/{{ $data->ID }}"class="btn btn-sm btn-warning">Edit</a>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop{{ $data->ID }}">
                Delete
              </button>
            </td>
            <div class="modal fade" id="staticBackdrop{{ $data->ID }}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content bg-danger">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{ $data->Nama }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Ingin menghapus ?
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <a href="/delete/{{ $data->ID }}" class="btn btn-outline-light">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            </tr>
            @endforeach
                    </tbody>
      </table>

</div>
</div>


  </section>
  <!-- /.content -->
</div>
{{-- 
@foreach ($pengguna as $data)
    

@endforeach --}}
    
@endsection

{{-- </body>
</html> --}}
