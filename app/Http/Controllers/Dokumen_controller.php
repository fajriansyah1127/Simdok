<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Dokumen_model;
use App\Models\asuransi_model;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class Dokumen_controller extends Controller
{
    public function __construct()
    {
        $this-> model = new Dokumen_model();
    }

    // public function admin_kumpulan()
    // {
    //     $data = [
    //         'datas' => $this -> Data -> alldata(),
    //     ];
    //     return view('admin_kumpulan_arsip',$data);
    // }
    public function download($id)
    {
        return  response()->download(public_path('file/'.$id));
        // return  response()->download(public_path('materisub/'.$id));

        // $file= public_path()."/file/Rini.pdf";

        // $headers = array(
        //           'Content-Type: application/pdf',
        //         );
    
        // return Response::download($file, 'filename.pdf', $headers);
        // $data = [
        //     'asuransi' => $this -> model -> id_asuransi(),
        // ];
        // return view('upload_dokumen',$data);
    }

    public function upload()
    {
        $data = [
            'asuransi' => $this -> model -> id_asuransi(),
        ];
        return view('dokumen.upload_dokumen',$data);
    }

    // public function download($filename)
    // {
    //     // if (Storage::disk('local')->exists("file/$id->file")){
    //     //     $path =  Storage::disk('local')->path("file/$id->file");
    //     //     $content = file_get_contents($path);
    //     //     return response($content)->withHeaders([
    //     //         'Content-Type'=>mime_content_type($path)
    //     //     ]);
    //     // }
    //     // return redirect('/404');
    //     $files = storage_path('public/'. $filename);

    //     return (new Response($files, 200))
    //           ->header('Content-Type', 'image/jpeg');
        
    //     // try{
    //     //     return Storage::download('public/file/');
    //     // } catch (\Exception $e) {
    //     //     return $e->getMessage();
    //     // }
    //     // $file=Storage::disk('public')->get($file);
 
	// 	// return (new Response($file, 200));
    // }

    public function kumpulan_dokumen()
    {
        $data = [
            'dokumen' => $this -> model -> dokumen(),
        ];
        return view('dokumen.dokumen',$data);
    }

    // public function tambah_dokumen()
    // {
    //     Request()->validate([
    //         'nama' => 'required',
    //         'unit' => 'required',
    //         'Nomor' =>'required',
    //         'tanggal_Upload' =>'required',
    //         'File'=>'required|mimes:jpg,pdf,bmp,png|max:10000',

    //     ]);

    //     $file = Request()-> File;
    //     $filename = Request()-> Nomor. '.' . $file->extension();
    //     $file->move(public_path('file'),$filename);
        
    //     $data = [
    //         'Nama'=> Request()->nama,
    //         'Id_asuransi'=> Request()->unit,
    //         'Nomor'=> Request()->Nomor,
    //         'Tanggal'=> Request ()->tanggal_Upload,
    //         'File'=> $filename,
    //     ];
        
    //     $this->model->add_dokumen($data);
    //     return redirect()->route('dokumen')->with('pesan','Data Berhasil Di Tambahkan !!!');
    // }

    public function tambah_dokumen(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'unit' => 'required',
            'Nomor' =>'required',
            'tanggal_Upload' =>'required',
            'File'=>'required|mimes:jpg,pdf,bmp,png|max:10000',

        ]);

        $file = Request()-> File;
        $filename = Request()-> nama. date('dmy'). '.' . $file->extension();
       $file->move(public_path('file'),$filename);
        
        $data = [
            'Nama'=> Request()->nama,
            'Id_asuransi'=> Request()->unit,
            'Nomor'=> Request()->Nomor,
            'Tanggal'=> Request ()->tanggal_Upload,
            'File'=> $filename,
        ];
        
        $this->model->add_dokumen($data);
        return redirect()->route('dokumen')->with('pesan','Data Berhasil Di Tambahkan !!!');
    }

    public function edit($id)
    {
        if (!$this->model->edit_dokumen($id)){
            abort(404);
        }
        $data = [
            'dokumen' => $this -> model -> edit_dokumen($id),
        ];

        $data1 = [
            'asuransi' => $this -> model -> id_asuransi(),
        ];

        return view('dokumen.edit',$data,$data1);
    }

    public function update($id)
    {
        Request()->validate([
            'nama' => 'required',
            'unit' => 'required',
            'Nomor' =>'required',
            'tanggal_Upload' =>'required',
            'File'=>'required|mimes:jpg,pdf,bmp,png|max:10000',

        ]);

        $file = Request()-> File;
        $filename = Request()-> Nomor. '.' . $file->extension();
        $file->move(public_path('file'),$filename);

        $data = [
            'Nama'=> Request()->nama,
            'Id_asuransi'=> Request()->unit,
            'Nomor'=> Request()->Nomor,
            'Tanggal'=> Request ()->tanggal_Upload,
            'File'=> $filename,
        ];
        
        $this->model->edit($id,$data);
        return redirect()->route('edit')->with('pesan','Data Berhasil Di Edit !!!');
    }

    public function delete($id)
    {
        $dokumen = $this->model->hapus_file($id);
        if ($dokumen->File <> "") {
            unlink(public_path('file').'/'.$dokumen->File);
        }
        $this->model->hapus($id);
        return redirect()->route('edit')->with('pesan','Data Berhasil Di Hapus !!!');
    }



}