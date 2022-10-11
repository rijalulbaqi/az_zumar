<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriFoto;
use App\Models\GaleriVideo;
use DataTables;
use Illuminate\Support\Facades\Validator;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function foto(){
        $data['active'] = 4;
        return view('admin.galeri.foto',$data);
    }
    public function video(){
        $data['active'] = 4;
        return view('admin.galeri.video',$data);
    }
    public function storefoto(Request $request){
       
        $msgFile = "File Kebesaran";
        $file       = $request->file('foto');
        if($file->getSize() > 2000000){
            $data = array( 'msg' => $msgFile , 'status' => 2 );
            return json_encode($data);
            die();
        };
        $foto = time().$file->getClientOriginalName();
        $file->move(\public_path() ."/dashboard/img/foto", $foto);
        $tambah = new GaleriFoto;
        $tambah ->foto = $foto;
        $tambah ->judul = $request->judul;
        $tambah ->deskripsi = $request->deskripsi;
        $tambah->save();
        $data = array( 'msg' => "" , 'status' => 1 ); // contohe
        return json_encode($data);
    }
    public function editfoto($id){
        $data['active'] = 4;
        $foto = GaleriFoto::findOrFail($id);
        return view('admin.galeri.editfoto',$data, compact('foto'));
    }
    public function updatefoto($id, Request $request){
        if($request->hasFile('foto')) {
            $edit = GaleriFoto::findOrFail($id);
            $filelawas =  $edit->foto;
            unlink(public_path("/dashboard/img/foto/").$filelawas);
            $filebaru       = $request->file('foto');
            $foto       = time().$filebaru->getClientOriginalName();
            $filebaru->move(\public_path() ."/dashboard/img/foto", $foto);
            $namafoto = GaleriFoto::findOrFail($id);
            $namafoto ->foto = $foto;
            $namafoto->save();
        }
        $editfoto = GaleriFoto::findOrFail($id);
        $editfoto ->judul = $request->judul;
        $editfoto ->deskripsi = $request->deskripsi;
        $editfoto->save();
        return redirect('foto');
    }
    public function datatablefoto(){
    $model = GaleriFoto::query()->orderBy('id', 'desc');
    return DataTables::eloquent($model)
    ->addColumn('foto',function($row){
        $foto = $row->foto;
        return '<img width="60" src="'.url("dashboard/img/foto/".$foto).'"/>'; 
    })
    ->addColumn('action', function($row){
                $urlEdit = url('editfoto',$row->id);
                $urlDelete = url('deletefoto',$row->id);
                $btn = '
                <a href="'.$urlEdit.'" class="btn btn-sm btn-success btn-round edit">
                <i class="material-icons">edit</i>
                </a>
                <a href="'.$urlDelete.'" class="btn btn-sm btn-danger btn-round delete">
                <i class="material-icons">close</i>
                </a>
                ';
              
                return $btn;

        })
    ->rawColumns(['action','foto'])
    ->addIndexColumn()
    ->toJson();
    }
    public function deletefoto($id){
        $foto = GaleriFoto::findOrFail($id);
        $filelawas = $foto->foto;
        unlink(public_path("/dashboard/img/foto/").$filelawas);
        $foto->delete();
        return json_encode(1);
    }

    public function storevideo(Request $request){
        $tambah = new GaleriVideo;
        $tambah ->video = $request->video;
        $tambah ->judul = $request->judul;
        $tambah ->deskripsi = $request->deskripsi;
        $tambah->save();

        $data = array( 'msg' => "" , 'status' => 1 ); //iki kok kosong msg e
        return json_encode($data);
    }
    public function editvideo($id){
        $data['active'] = 4;
        $video = GaleriVideo::findOrFail($id);
        return view('admin.galeri.editvideo',$data, compact('video'));
    }
    public function updatevideo($id, Request $request){
        $editvideo = GaleriVideo::findOrFail($id);
        $editvideo ->video = $request->video;
        $editvideo ->judul = $request->judul;
        $editvideo ->deskripsi = $request->deskripsi;
        $editvideo->save();
        return redirect('video');
    }
    public function datatablevideo(){
    $model = GaleriVideo::query()->orderBy('id', 'desc');
    return DataTables::eloquent($model)
    ->addColumn('video',function($row){
        $video = $row->video;
        return '
        <iframe width="100" height="100" src="'.$video.'"></iframe>'; 
    })
    ->addColumn('action', function($row){
                $urlEdit = url('editvideo',$row->id);
                $urlDelete = url('deletevideo',$row->id);
                $btn = '
                <a href="'.$urlEdit.'" class="btn btn-sm btn-success btn-round edit">
                <i class="material-icons">edit</i>
                </a>
                <a href="'.$urlDelete.'" class="btn btn-sm btn-danger btn-round delete">
                <i class="material-icons">close</i>
                </a>
                ';
              
                return $btn;

        })
    ->rawColumns(['action','video'])
    ->addIndexColumn()
    ->toJson();
    }
    public function deletevideo($id){
        $video = GaleriVideo::findOrFail($id);
        $video->delete();
        return json_encode(1);
    }

}
