@extends('layout.layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">

      
<div class="col-md-12 p-5 pt-2">

  <!-- membuat form -->
  <div class="container">
              <div class="card mt-2">
          <div class="card-header">
            <h4 style="text-align:center"><b>FORM UNGGAH DOKUMEN </b></h4>
          </div>
          <div class="card-body">

<!-- membuat formnya -->
<!-- bagian judul -->

          <form action="/admin_upload_file" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="form-group row">
                  <label for="Judul" class="col-sm-2 col-form-label">Nama Pengupload</label>
                  <div class="col-sm-10">
                       <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama pengupload">
                  </div>
              </div>
<!-- bagian unit -->
                <div class="form-group row">
                  <label for="disabledSelect" class="col-sm-2 col-form-label">Unit Asuransi</label>
                  <div class="col-sm-10">
                 <select id="disabledSelect" name="unit" class="form-control @error('unit') is-invalid @enderror" >
                  <option value="1">Jamsar</option>
                  <option value="2">Jamkrindo</option>
                  <option value="3">Askrindo</option>
                  <option value="4">Jasa Raharja</option>
                 </select>
                  </div>
                </div>
               
<!-- bagian tanggal -->
            <br>
              <label for="Tanggal_Upload">Tanggal Upload : </label>
                 <input type="date" name="tanggal_Upload" id="tanggal_Upload"/>

                <div class="card-footer text-muted">
                    <!-- bagian upload template -->
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Masukkan File</label>
                            <input type="file" name="pdfFile" class="form-control-file">
                                                    </div>
                    </form>
                    <!-- bagian submit -->
                    <button type="submit" class="btn btn-danger mb-3">Submit</button>
                </div>
            </form>
        </div>
  </div>


  </div>
</div>





    </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->

    @endsection

 