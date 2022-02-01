@extends('layout.layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
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

  <!-- membuat form -->
  <div class="container">
              <div class="card mt-2">
          <div class="card-header">
            <h4 style="text-align:center"><b>FORM UNGGAH DOKUMEN </b></h4>
          </div>
          <div class="card-body">

<!-- membuat formnya -->
<!-- bagian judul -->
          <form action="{{ route('dokumen.update', $datas->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT') 
              <div class="form-group row">
                  <label for="Judul" class="col-sm-2 col-form-label">Nama Nasabah</label>
                  <div class="col-sm-10">
                       <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $datas->Nama }}"required placeholder="Masukkan Nama pengupload">
                  </div>
              </div>
<!-- bagian unit -->
                <div class="form-group row">
                  <label for="disabledSelect" class="col-sm-2 col-form-label">Unit Asuransi</label>
                  <div class="col-sm-10"> 
                 <select id="disabledSelect" name="unit" class="form-control @error('unit') is-invalid @enderror" >
                 @foreach($asuransi as $data)
                 <option value="{{ $data->ID }}">{{ $data->Nama_asuransi }}</option>
                 @endforeach
                  {{-- <!-- <option value="2">Jamkrindo</option>
                  <option value="3">Askrindo</option> value="{{ $dokumen->Nama }}"required
                  <option value="4">Jasa Raharja</option> --> --}}
                 </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="Nomor" class="col-sm-2 col-form-label">Nomor Surat</label>
                  <div class="col-sm-10">
                    <input type="text" id="Nomor" name="Nomor" value="{{ $datas->Nomor }}"required    class="form-control" placeholder="Contoh 0542"  required>
                  </div>
                </div>
               
<!-- bagian tanggal -->
<div class="form-group row">
              <label for="Tanggal_Upload"  class="col-sm-2 col-form-label" >Tanggal Upload  </label>
              <div class="col-sm-10">
                 <input type="date" name="tanggal_Upload" id="tanggal_Upload"/>
                </div>
              </div>
                <div class="card-footer text-muted">
                    <!-- bagian upload template -->
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Masukkan File</label>
                            <input type="file" name="File" value="{{ $datas->File }}" class="form-control-file">
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

 