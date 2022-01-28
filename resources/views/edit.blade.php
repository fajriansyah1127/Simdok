@extends('layout.layout')
@section('content')


   


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">

      
<div class="col-md-12 p-5 pt-2">

  <!-- membuat form -->
  <div class="container"
              <div class="card mt-2">
          <div class="card-header">
            <h4 style="text-align:center"><b>FORM UNGGAH ARSIP </b></h4>
          </div>
          <div class="card-body">

<!-- membuat formnya -->
<!-- bagian judul -->

          <form action="user_simpan_add_laporan_kinerja_bulanan" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="ujl6dQHN1O7joJokcJyUhJzieHHZzfoTfMrPIcUM">
              <div class="form-group row">
                  <label for="Judul" class="col-sm-2 col-form-label">Nama Pengupload</label>
                  <div class="col-sm-10">
                       <input type="text" id="Judul" name="Judul" class="form-control" placeholder="Masukkan Nama pengupload">
                       
                  </div>
              </div>
<!-- bagian unit -->
              <div class="form-group">
                  <label for="disabledSelect">Unit Asuransi</label>
                 <select id="disabledSelect" name="Unit" class="form-control">

                  <option>Sub Bagian Program</option>
                  <option>Sub Bagian Umum, Kepegawaian dan Hukum</option>
                  <option>Sub Bagian Keuangan</option>
                  <option>Bidang Fasilitasi Pendaftaran Penduduk dan Pencatatan Sipil</option>
                  <option>Bidang Kelembagaan dan Informasi Administrasi Kependudukan</option>
                  <option>Bidang Pengendalian Penduduk</option>
                  <option>Bidang Keluarga Berencana</option>
                  <option>Bidang Ketahanan dan Kesejahteraan Keluarga</option>
                  <option>Seksi Fasilitasi Dan Pendaftaran Dukcapil</option>
                  <option>Seksi Fasilitasi Bina Aparatur Pendaftaran Dukcapil</option>
                  <option>Seksi Monitoring, Evaluasi dan Dokumentasi PendaftaranDukcapi</option>
                  <option>Seksi Fasilitasi Sarana dan Prasarana Pengelolaan Informasi Adminduk Bina Administrator Database, dan Kerja Sama</option>
                  <option>Seksi Pengolahan Penyajian dan Pemanfaatan Data dan Dokumen Kependudukan</option>
                  <option>Seksi Monitoring dan Evaluasi Kelembagaan dan Informasi Administrasi Kependudukan</option>
                  <option>Seksi Pemanduan dan Sinkronisasi Kebijakan</option>
                  <option>Seksi Data, Informasi dan Pemetaan</option>
                  <option>Seksi Analisis dan Pengendalian Penduduk</option>
                  <option>Seksi Advokasi, Komunikasi, Informasi, Edukasi, dan Penggerakan Program</option>
                  <option>Seksi Pembinaan dan Peningkatan Kesertaan Keluarga Berencana</option>
                  <option>Seksi Fasilitasi Pengelolaan Pelayanan Keluarga Berencana</option>
                  <option>Seksi Bina Ketahanan Keluarga</option>
                  <option>Seksi Pembinaan Kesejahteraan Keluarga</option>
                  <option>Seksi Kemitraan Antar Lembaga</option>
               </select>
               

<!-- bagian tanggal -->
            <br>
              <label for="Tanggal_Upload">Tanggal Upload : </label>
                 <input type="date" name="Tanggal_Upload" id="Tanggal_Upload"/>
                                 </div>

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

 