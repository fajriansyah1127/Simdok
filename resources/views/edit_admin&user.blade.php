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
            <h4 style="text-align:center"><b>TAMBAH ADMIN & USER </b></h4>
          </div>
          <div class="card-body">

  <!-- membuat formnya -->
  <!-- bagian judul -->

          <form action="/update/{{ $pengguna->ID }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="form-group row">
                  <label for="Judul" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                       <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Masukkan Nama " value="{{ $pengguna->Nama }}">
                       <div class ="text-danger">
                        @error('Nama')
                        {{ $message }}
                        @enderror
                      </div>
                  </div>
                </div>
                
              <div class="form-group row">
                  <label for="Judul" class="col-sm-2 col-form-label">Email </label>
                  <div class="col-sm-10">
                       <input type="text" id="Email" name="Email" class="form-control " placeholder="Masukkan Email" value="{{ $pengguna->Email }}">  
                       <div class ="text-danger">
                        @error('Email')
                        {{ $message }}
                        @enderror
                      </div>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="Judul" class="col-sm-2 col-form-label">Jabatan </label>
                  <div class="col-sm-10">
                       <input type="text" id="Jabatan" name="Jabatan" class="form-control" placeholder="Masukkan Jabatan ex Magang, Kadep Gadai" value="{{ $pengguna->Jabatan }}">  
                       <div class ="text-danger">
                        @error('Jabatan')
                        {{ $message }}
                        @enderror
                      </div>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="Judul" class="col-sm-2 col-form-label"> Kontak </label>
                  <div class="col-sm-10">
                        <input type="text" id="Kontak" name="Kontak" class="form-control " placeholder="Masukkan Nomor telephone" value="{{ $pengguna->Kontak }}">  
                        <div class ="text-danger">
                          @error('Kontak')
                          {{ $message }}
                          @enderror
                        </div>
                      </div>
              </div>

              <div class="form-group row">
                  <label for="Judul" class="col-sm-2 col-form-label"> Alamat </label>
                  <div class="col-sm-10">
                        <input type="text" id="Alamat" name="Alamat" class="form-control " placeholder="Masukkan Alamat" value="{{ $pengguna->Alamat }}">  
                        <div class ="text-danger">
                          @error('Alamat')
                          {{ $message }}
                          @enderror
                        </div>
                      </div>
              </div>

              <div class="form-group row">
                  <label for="Judul" class="col-sm-2 col-form-label">Role </label>
                  <div class="col-sm-10">  
                        <input type="radio" id="Admin" name="Role" value="ADMIN">
                        <label for="Admin" class="col-sm-2 col-form-label">ADMIN</label>
                        <input type="radio" id="User" name="Role" value="USER">
                        <label for="User">USER</label><br>

                  </div>
              </div>

            
            <div class = "col-sm-12">
                <div class="col-sm-4">
                  <img src="{{ url('foto/'.$pengguna->Foto) }}" width="100px">
                </div>
              <div class="col-sm-8">
                  <div class="form-group">
                      <label>Masukkan Foto</label>
                      <input type="file" name="Foto" class="form-control">
                      <div class ="text-danger">
                        @error('Foto')
                        {{ $message }}
                        @enderror
                      </div>
                  </div>
              </div>             
            </div>

              <div class="card-footer text-muted">
                <button type="submit" class="btn btn-danger mb-3">Submit</button>
              </div>
            </form>
        
  </div>


  </div>
</div>





    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    @endsection

 