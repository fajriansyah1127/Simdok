@extends('layout.layout')

@section('content')
<div class="content-wrapper">


  <!-- Main content -->
  <section class="content">

    <div class="col-md-12 p-5 pt-2">
  <h3><i class="fas fa-users mr-2"></i></i>USER
    <div class="float-right mb-3">
      <a href="/add_asuransi" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah Unit Asuransi</a>
  </div></h3>
  
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">nama</th>
            <th scope="col">email</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Action</th>
          </tr>
          
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Fajriansyah</td>
            <td>fajriansyah573@gmail.com</td>
            <td>1</td>
            <td>
              <a href="/detail_asuransi"class="btn btn-sm btn-success">Detail</a>
              <a href=""class="btn btn-sm btn-warning">Edit</a>
              <a href=""class="btn btn-sm btn-danger">Delete</a>
            </td>
            </tr>

                    </tbody>
      </table>

</div>
</div>


  </section>
  <!-- /.content -->
</div>

    
@endsection

{{-- </body>
</html> --}}
