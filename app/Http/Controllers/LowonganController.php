<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;
use DataTables;

class LowonganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data['active'] = 7;
        $show = Lowongan::findOrFail(1);
        return view('admin.lowongan.index',$data,compact('show'));
    }
    public function edit(){
        $data['active'] = 7;
        $show = Lowongan::findOrFail(1);
        return view('admin.lowongan.edit',$data, compact('show'));
    }
    public function update(Request $request){
        $edit = Lowongan::findOrFail(1);
        $edit ->membutuhkan = $request->membutuhkan;
        $edit ->kriteria = $request->kriteria;
        $edit ->nomor = $request->nomor;
        $edit ->status = $request->status;
        $edit->save();
        return redirect('lowongan_kerja');
    }
}
