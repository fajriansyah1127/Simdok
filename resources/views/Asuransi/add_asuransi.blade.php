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
            <h4 style="text-align:center"><b>TAMBAH UNIT ASURANSI </b></h4>
          </div>
          <div class="card-body">

<!-- membuat formnya -->
<!-- bagian judul -->

          <form action="/create_asuransi" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="form-group row">
                  <label for="Judul" class="col-sm-2 col-form-label">Nama Asuransi </label>
                  <div class="col-sm-10">
                       <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Masukkan Nama "required>
                  </div>
                </div>
                
              <div class="form-group row">
                  <label for="Judul" class="col-sm-2 col-form-label">Email Asuransi </label>
                  <div class="col-sm-10">
                       <input type="email" id="Email" name="Email" class="form-control" placeholder="Masukkan Email" required>  
                  </div>
                </div>
               
                
<!-- bagian unit -->

<div class="form-group row">
  <label for="Kontak" class="col-sm-2 col-form-label">Kontak</label>
  <div class="col-sm-10">
    <input type="tel" id="Kontak" name="Kontak" class="form-control" placeholder="Contoh 0542"  required>
  </div>
</div>

<div class="form-group row">
  <label for="Judul" class="col-sm-2 col-form-label"> Alamat </label>
  <div class="col-sm-10">
       <input type="text" id="Alamat" name="Alamat" class="form-control" placeholder="Masukkan Alamat"required>  
  </div>
</div>

<div class="form-group row">
  <label for="Judul" class="col-sm-2 col-form-label">Status </label>
  <div class="col-sm-10">  
    <input type="radio" id="html" name="Status" value="Berlaku">
    <label for="html" class="col-sm-2 col-form-label">Berlaku</label>
    <input type="radio" id="css" name="Status" value="Tidak Berlaku">
    <label for="css">Tidak Berlaku</label><br>
  </div>
</div>

        

<!-- bagian tanggal -->
            <br>
             
                                

                <div class="card-footer text-muted">
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

 