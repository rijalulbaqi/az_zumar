<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use DataTables;

class JadwalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data['active'] = 3;
        return view('admin.jadwal.index',$data);
    }
    public function edit($id){
        $data['active'] = 3;
        $jadwal = Jadwal::findOrFail($id);
        return view('admin.jadwal.edit',$data, compact('jadwal'));
    }
    public function update($id, Request $request){
        $edit = Jadwal::findOrFail($id);
        $edit ->tanggal = $request->tanggal;
        $edit ->kegiatan = $request->kegiatan;
        $edit ->deskripsi = $request->deskripsi;
        $edit->save();
        return redirect('jadwal_kegiatan');
    }
    public function store(Request $request){
        $jadwal = new Jadwal;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->kegiatan = $request->kegiatan;
        $jadwal->deskripsi = $request->deskripsi;
        $jadwal->save();
        return json_encode(1);
    }
    public function datatable(){
    $model = Jadwal::query()->orderBy('tanggal', 'desc');
    return DataTables::eloquent($model)
    ->addColumn('action', function($row){
                $urlEdit = url('editjadwal',$row->id);
                $urlDelete = url('deletejadwal',$row->id);
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
    ->rawColumns(['action'])
    ->addIndexColumn()
    ->toJson();
    }
    public function delete($id){
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        return json_encode(1);
    }

}
