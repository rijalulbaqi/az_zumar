<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PPDBTK;
use App\Models\PPDBSD;
use App\Models\PPDBSMP;
use App\Models\PPDBSMA;
use App\Models\Syarat;
use DataTables;
use App\Exports\TKExport;
use App\Exports\SDExport;
use App\Exports\SMPExport;
use App\Exports\SMAExport;
use Maatwebsite\Excel\Facades\Excel;

class PPDBController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function syarat(){
        $data['active'] = 5;
        $syarat = Syarat::findOrFail(1);
        return view('admin.ppdb.syarat',$data, compact('syarat'));
    }
    public function ubahsyarat(Request $request){
        $data['active'] = 5;
        $ubah = Syarat::findOrFail('1');
        $ubah->syarat = $request->syarat;
        $ubah->status = $request->status;
        $ubah->save();
        return redirect('syarat');
    }
    public function tk(){
        $data['active'] = 5;
        return view('admin.ppdb.tk',$data);
    }
    public function exporttk()
    {
        return Excel::download(new TKExport, 'siswatk.xlsx');
    }
    public function exportsd()
    {
        return Excel::download(new SDExport, 'siswasd.xlsx');
    }
    public function exportsmp()
    {
        return Excel::download(new SMPExport, 'siswasmp.xlsx');
    }
    public function exportsma()
    {
        return Excel::download(new SMAExport, 'siswasma.xlsx');
    }
    public function showtk($id){
        $data['active'] = 5;
        $siswa = PPDBTK::findOrFail($id);
        return view('admin.ppdb.showtk',$data,compact('siswa'));
    }
    public function datatabletk(){
    $model = PPDBTK::query()->orderBy('id', 'desc');
    return DataTables::eloquent($model)
    ->addColumn('action', function($row){
                $urlShow = url('showtk',$row->id);
                $urlDelete = url('deletetk',$row->id);
                $btn = '
                <a href="'.$urlShow.'" class="btn btn-sm btn-success btn-round show">
                <i class="material-icons">visibility</i>
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
    public function storetk(Request $request){
        $data = PPDBTK::orderByDesc('id')->where('namalengkap','like',"$request->namalengkap")->where('tanggallahir','like',"$request->tanggallahir")->get();
        if (empty($data)) {
            $tambah = new PPDBTK;
            $tambah->namalengkap = $request->namalengkap;
            $tambah->namapanggilan = $request->namapanggilan;
            $tambah->tempatlahir = $request->tempatlahir;
            $tambah->tanggallahir = $request->tanggallahir;
            $tambah->jeniskelamin = $request->jeniskelamin;
            $tambah->agama = $request->agama;
            $tambah->anakke = $request->anakke;
            $tambah->jumlahsaudara = $request->jumlahsaudara;
            $tambah->alamat = $request->alamat;
            $tambah->nomortelepon = $request->nomortelepon;
            $tambah->namaayah = $request->namaayah;
            $tambah->tempatlahirayah = $request->tempatlahirayah;
            $tambah->tanggallahirayah = $request->tanggallahirayah;
            $tambah->agamaayah = $request->agamaayah;
            $tambah->pekerjaanayah = $request->pekerjaanayah;
            $tambah->pendidikanayah = $request->pendidikanayah;
            $tambah->namaibu = $request->namaibu;
            $tambah->tempatlahiribu = $request->tempatlahiribu;
            $tambah->tanggallahiribu = $request->tanggallahiribu;
            $tambah->agamaibu = $request->agamaibu;
            $tambah->pekerjaanibu = $request->pekerjaanibu;
            $tambah->pendidikanibu = $request->pendidikanibu;
            $tambah->save();
            return json_encode(1);
        }
        elseif($data){
            return json_encode(2);
        }
        else{
            return json_encode(0);
        }
    
    }
    public function deletetk($id){
        $data = PPDBTK::findOrFail($id);
        $data->delete();
        return json_encode(1);
    }
    public function sd(){
        $data['active'] = 5;
        return view('admin.ppdb.sd',$data);
    }
    public function showsd($id){
        $data['active'] = 5;
        $siswa = PPDBSD::findOrFail($id);
        return view('admin.ppdb.showsd',$data,compact('siswa'));
    }
    public function datatablesd(){
    $model = PPDBSD::query()->orderBy('id', 'desc');
    return DataTables::eloquent($model)
    ->addColumn('action', function($row){
                $urlShow = url('showsd',$row->id);
                $urlDelete = url('deletesd',$row->id);
                $btn = '
                <a href="'.$urlShow.'" class="btn btn-sm btn-success btn-round show">
                <i class="material-icons">visibility</i>
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
    public function storesd(Request $request){
        $data = PPDBSD::orderByDesc('id')->where('namalengkap','like',"$request->namalengkap")->where('tanggallahir','like',"$request->tanggallahir")->get();
        if (empty($data)) {
        $tambah = new PPDBSD;
        $tambah->namalengkap = $request->namalengkap;
        $tambah->namapanggilan = $request->namapanggilan;
        $tambah->tempatlahir = $request->tempatlahir;
        $tambah->tanggallahir = $request->tanggallahir;
        $tambah->jeniskelamin = $request->jeniskelamin;
        $tambah->agama = $request->agama;
        $tambah->anakke = $request->anakke;
        $tambah->jumlahsaudara = $request->jumlahsaudara;
        $tambah->alamat = $request->alamat;
        $tambah->nomortelepon = $request->nomortelepon;
        $tambah->namaayah = $request->namaayah;
        $tambah->tempatlahirayah = $request->tempatlahirayah;
        $tambah->tanggallahirayah = $request->tanggallahirayah;
        $tambah->agamaayah = $request->agamaayah;
        $tambah->pekerjaanayah = $request->pekerjaanayah;
        $tambah->pendidikanayah = $request->pendidikanayah;
        $tambah->namaibu = $request->namaibu;
        $tambah->tempatlahiribu = $request->tempatlahiribu;
        $tambah->tanggallahiribu = $request->tanggallahiribu;
        $tambah->agamaibu = $request->agamaibu;
        $tambah->pekerjaanibu = $request->pekerjaanibu;
        $tambah->pendidikanibu = $request->pendidikanibu;
        $tambah->save();
        return json_encode(1);
        }
        elseif($data){
            return json_encode(2);
        }
        else{
            return json_encode(0);
        }
    }
    public function deletesd($id){
        $data = PPDBSD::findOrFail($id);
        $data->delete();
        return json_encode(1);
    }
    public function smp(){
        $data['active'] = 5;
        return view('admin.ppdb.smp',$data);
    }
    public function showsmp($id){
        $data['active'] = 5;
        $siswa = PPDBSMP::findOrFail($id);
        return view('admin.ppdb.showsmp',$data,compact('siswa'));
    }
    public function datatablesmp(){
    $model = PPDBSMP::query()->orderBy('id', 'desc');
    return DataTables::eloquent($model)
    ->addColumn('action', function($row){
                $urlShow = url('showsmp',$row->id);
                $urlDelete = url('deletesmp',$row->id);
                $btn = '
                <a href="'.$urlShow.'" class="btn btn-sm btn-success btn-round show">
                <i class="material-icons">visibility</i>
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
    public function storesmp(Request $request){
        $data = PPDBSMP::orderByDesc('id')->where('namalengkap','like',"$request->namalengkap")->where('nisn','like',"$request->nisn")->get();
        if (empty($data)) {
        $tambah = new PPDBSMP;
        $tambah->namalengkap = $request->namalengkap;
        $tambah->namapanggilan = $request->namapanggilan;
        $tambah->nisn = $request->nisn;
        $tambah->tempatlahir = $request->tempatlahir;
        $tambah->tanggallahir = $request->tanggallahir;
        $tambah->jeniskelamin = $request->jeniskelamin;
        $tambah->agama = $request->agama;
        $tambah->anakke = $request->anakke;
        $tambah->jumlahsaudara = $request->jumlahsaudara;
        $tambah->alamat = $request->alamat;
        $tambah->nomortelepon = $request->nomortelepon;
        $tambah->namaayah = $request->namaayah;
        $tambah->tempatlahirayah = $request->tempatlahirayah;
        $tambah->tanggallahirayah = $request->tanggallahirayah;
        $tambah->agamaayah = $request->agamaayah;
        $tambah->pekerjaanayah = $request->pekerjaanayah;
        $tambah->pendidikanayah = $request->pendidikanayah;
        $tambah->namaibu = $request->namaibu;
        $tambah->tempatlahiribu = $request->tempatlahiribu;
        $tambah->tanggallahiribu = $request->tanggallahiribu;
        $tambah->agamaibu = $request->agamaibu;
        $tambah->pekerjaanibu = $request->pekerjaanibu;
        $tambah->pendidikanibu = $request->pendidikanibu;
        $tambah->save();
        return json_encode(1);
        }
        elseif($data){
            return json_encode(2);
        }
        else{
            return json_encode(0);
        }
    }
    public function deletesmp($id){
        $data = PPDBSMP::findOrFail($id);
        $data->delete();
        return json_encode(1);
    }
    public function sma(){
        $data['active'] = 5;
        return view('admin.ppdb.sma',$data);
    }
    public function showsma($id){
        $data['active'] = 5;
        $siswa = PPDBSMA::findOrFail($id);
        return view('admin.ppdb.showsma',$data,compact('siswa'));
    }
    public function datatablesma(){
    $model = PPDBSMA::query()->orderBy('id', 'desc');
    return DataTables::eloquent($model)
    ->addColumn('action', function($row){
                $urlShow = url('showsma',$row->id);
                $urlDelete = url('deletesma',$row->id);
                $btn = '
                <a href="'.$urlShow.'" class="btn btn-sm btn-success btn-round show">
                <i class="material-icons">visibility</i>
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
    public function storesma(Request $request){
        $data = PPDBSMA::orderByDesc('id')->where('namalengkap','like',"$request->namalengkap")->where('nisn','like',"$request->nisn")->get();
        if (empty($data)) {
        $tambah = new PPDBSMA;
        $tambah->namalengkap = $request->namalengkap;
        $tambah->namapanggilan = $request->namapanggilan;
        $tambah->nisn = $request->nisn;
        $tambah->tempatlahir = $request->tempatlahir;
        $tambah->tanggallahir = $request->tanggallahir;
        $tambah->jeniskelamin = $request->jeniskelamin;
        $tambah->agama = $request->agama;
        $tambah->anakke = $request->anakke;
        $tambah->jumlahsaudara = $request->jumlahsaudara;
        $tambah->alamat = $request->alamat;
        $tambah->nomortelepon = $request->nomortelepon;
        $tambah->namaayah = $request->namaayah;
        $tambah->tempatlahirayah = $request->tempatlahirayah;
        $tambah->tanggallahirayah = $request->tanggallahirayah;
        $tambah->agamaayah = $request->agamaayah;
        $tambah->pekerjaanayah = $request->pekerjaanayah;
        $tambah->pendidikanayah = $request->pendidikanayah;
        $tambah->namaibu = $request->namaibu;
        $tambah->tempatlahiribu = $request->tempatlahiribu;
        $tambah->tanggallahiribu = $request->tanggallahiribu;
        $tambah->agamaibu = $request->agamaibu;
        $tambah->pekerjaanibu = $request->pekerjaanibu;
        $tambah->pendidikanibu = $request->pendidikanibu;
        $tambah->save();
        return json_encode(1);
        }
        elseif($data){
            return json_encode(2);
        }
        else{
            return json_encode(0);
        }
    }
    public function deletesma($id){
        $data = PPDBSMA::findOrFail($id);
        $data->delete();
        return json_encode(1);
    }
}
