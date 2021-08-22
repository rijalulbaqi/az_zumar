<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use DataTables;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        $data['active'] = 1;
        return view('dashboard',$data);
    }
    public function ubahpassword(){
        $data['active'] = 8;
        return view('admin.ubahpassword',$data);
    }
    public function slide_foto(){
        $data['active'] = 4;
        return view('admin.slider.index',$data);
    }
    public function editslider($id){
        $data['active'] = 4;
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit',$data, compact('slider'));
    }
    public function updateslider($id, Request $request){
            $edit = Slider::findOrFail($id);
            $filelawas =  $edit->foto;
            unlink(public_path("/dashboard/img/slider/").$filelawas);
            $filebaru       = $request->file('foto');
            $foto       = $filebaru->getClientOriginalName();
            $filebaru->move(\public_path() ."/dashboard/img/slider", $foto);
            $namafoto = Slider::findOrFail($id);
            $namafoto ->foto = $foto;
            $namafoto->save();
        return redirect('slide_foto');
    }
    public function datatableslider(){
    $model = Slider::query()->orderBy('id', 'asc');
    return DataTables::eloquent($model)
    ->addColumn('foto',function($row){
        $foto = $row->foto;
        return '<img width="60" src="'.url("dashboard/img/slider/".$foto).'"/>'; 
    })
    ->addColumn('action', function($row){
                $urlEdit = url('editslider',$row->id);
                $btn = '
                <a href="'.$urlEdit.'" class="btn btn-sm btn-success btn-round edit">
                <i class="material-icons">edit</i>
                </a>
                ';
              
                return $btn;

        })
    ->rawColumns(['action','foto'])
    ->addIndexColumn()
    ->toJson();
    }
}
