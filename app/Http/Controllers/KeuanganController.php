<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keuangan;
use App\Models\Donasi;
use App\Models\NomorDonasi;
use DataTables;

class KeuanganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function laporankeuangan(){
        $data['active'] = 6;
        return view('admin.keuangan.laporankeuangan',$data);
    }
    public function storepemasukan(Request $request){
        $data = new Keuangan;
        $data->tanggal = $request->tanggal;
        $data->uraian = $request->uraian;
        $data->pemasukan = $request->pemasukan;
        $data->pengeluaran = "-";

        $keuangan = Keuangan::orderBy('id','desc')->limit(1)->get();
        foreach($keuangan as $item) {
        $saldolama = $item->saldo;;
        }
        $data->saldo = $saldolama + ($request->pemasukan);
 
        $data->save();
        return json_encode(1);
    }
    public function storepengeluaran(Request $request){
        $data = new Keuangan;
        $data->tanggal = $request->tanggal;
        $data->uraian = $request->uraian;
        $data->pemasukan = "-";
        $data->pengeluaran = $request->pengeluaran;

        $keuangan = Keuangan::orderBy('id','desc')->limit(1)->get();
        foreach($keuangan as $item) {
        $saldolama = $item->saldo;
        }
        $data->saldo = $saldolama - ($request->pengeluaran);
 
        $data->save();
        return json_encode(1);
    }
    public function datatable(){
    $model = Keuangan::query()->orderBy('id', 'desc');
    return DataTables::eloquent($model)
    ->addColumn('action', function($row){
                $urlDelete = url('deletekeuangan',$row->id);
                $btn = '
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
        $data = Keuangan::findOrFail($id);
        $data->delete();
        return json_encode(1);
    }
    public function donasi(){
        $data['active'] = 6;
        $nomor = NomorDonasi::findOrFail(1);
        return view('admin.keuangan.donasi',$data,compact('nomor'));
    }
    public function storedonasi(Request $request){
        $data = new Donasi;
        $data->tanggal = $request->tanggal;
        $data->dari = $request->dari;
        $data->jumlah = $request->jumlah;
        $data->keterangan = $request->keterangan;
        $data->save();

        $data = new Keuangan;
        $data->tanggal = $request->tanggal;
        $data->uraian = "Donasi ".$request->dari."";
        $data->pemasukan = $request->jumlah;
        $data->pengeluaran = "-";

        $keuangan = Keuangan::orderBy('id','desc')->limit(1)->get();
        foreach($keuangan as $item) {
        $saldolama = $item->saldo;
        }
        $data->saldo = $saldolama + ($request->jumlah);
 
        $data->save();

        return json_encode(1);
    }
    public function datatabledonasi(){
    $model = Donasi::query()->orderBy('id', 'desc');
    return DataTables::eloquent($model)
    ->addColumn('action', function($row){
                $urlDelete = url('deletekeuangan',$row->id);
                $btn = '
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
    public function deletedonasi($id){
        $data = Donasi::findOrFail($id);
        $data->delete();
        return json_encode(1);
    }
    public function gantinomor(Request $request){
        $edit = NomorDonasi::findOrFail(1);
        $edit ->nomor_whatsapp = $request->nomor_whatsapp;
        $edit->save();
        return redirect('donasi');
    }
}
