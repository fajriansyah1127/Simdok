@extends('layout.layout')
@section('content')
<div class="content-wrapper">


  <!-- Main content -->
  <section class="content">

    


   <div class="col-md-12 p-5 pt-2">
      <h3><i class="fas fa-list"></i> Kumpulan Dokumen</h3><hr>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Tanggal Upload</th>
                <th scope="col">Judul</th>
                <th scope="col">Unit</th>
                <th scope="col">File</th>

              </tr>
              
          </thead>
          <tbody>
              <tr>
                  <td>1</td>
                  <td>2021-08-15</td>
                  <td>salah</td>
                  <td>Sub Bagian Umum, Kepegawaian dan Hukum</td>
                  <td>
                      <a target="_blank" href="http://127.0.0.1:8000/storage/TemplatePdf//salah_20210815040848.pdf" class="btn btn-primary btn-sm">Unduh File</button>

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