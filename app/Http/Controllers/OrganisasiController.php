<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Struktur;
use App\Models\Yayasan;
use App\Models\Statistik;
use DataTables;

class OrganisasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profil(){
        $data['active'] = 2;
        $yayasan = Profil::findOrFail('1');
        $tk = Profil::findOrFail('2');
        $sd = Profil::findOrFail('3');
        $smp = Profil::findOrFail('4');
        $sma = Profil::findOrFail('5');
        return view('admin.organisasi.profil',$data, compact('yayasan','tk','sd','smp','sma'));
    }
    public function ubahprofilyayasan(Request $request){
        $data['active'] = 2;
        if($request->hasFile('foto_profil')) {
            $edit = Profil::findOrFail('1');
            $filelawas =  $edit->foto_profil;
            unlink(public_path("/dashboard/img/profil/").$filelawas);
            $filebaru = $request->file('foto_profil');
            $filename = $filebaru->getClientOriginalName();
            $filebaru->move(public_path()."/dashboard/img/profil", $filename);
            $edit ->foto_profil = $filename;
            $edit->save();
        }
        $ubah = Profil::findOrFail('1');
        $ubah->lembaga = $request->lembaga;
        $ubah->isi_profil = $request->isi_profil;
        $ubah->save();
        return redirect('profil_organisasi');
    }
    public function ubahprofiltk(Request $request){
        $data['active'] = 2;
        if($request->hasFile('foto_profil')) {
            $edit = Profil::findOrFail('2');
            $filelawas =  $edit->foto_profil;
            unlink(public_path("/dashboard/img/profil/").$filelawas);
            $filebaru = $request->file('foto_profil');
            $filename = $filebaru->getClientOriginalName();
            $filebaru->move(public_path()."/dashboard/img/profil", $filename);
            $edit ->foto_profil = $filename;
            $edit->save();
        }
        $ubah = Profil::findOrFail('2');
        $ubah->lembaga = $request->lembaga;
        $ubah->isi_profil = $request->isi_profil;
        $ubah->save();
        return redirect('profil_organisasi');
    }
    public function ubahprofilsd(Request $request){
        $data['active'] = 2;
        if($request->hasFile('foto_profil')) {
            $edit = Profil::findOrFail('3');
            $filelawas =  $edit->foto_profil;
            unlink(public_path("/dashboard/img/profil/").$filelawas);
            $filebaru = $request->file('foto_profil');
            $filename = $filebaru->getClientOriginalName();
            $filebaru->move(public_path()."/dashboard/img/profil", $filename);
            $edit ->foto_profil = $filename;
            $edit->save();
        }
        $ubah = Profil::findOrFail('3');
        $ubah->lembaga = $request->lembaga;
        $ubah->isi_profil = $request->isi_profil;
        $ubah->save();
        return redirect('profil_organisasi');
    }
    public function ubahprofilsmp(Request $request){
        $data['active'] = 2;
        if($request->hasFile('foto_profil')) {
            $edit = Profil::findOrFail('4');
            $filelawas =  $edit->foto_profil;
            unlink(public_path("/dashboard/img/profil/").$filelawas);
            $filebaru = $request->file('foto_profil');
            $filename = $filebaru->getClientOriginalName();
            $filebaru->move(public_path()."/dashboard/img/profil", $filename);
            $edit ->foto_profil = $filename;
            $edit->save();
        }
        $ubah = Profil::findOrFail('4');
        $ubah->lembaga = $request->lembaga;
        $ubah->isi_profil = $request->isi_profil;
        $ubah->save();
        return redirect('profil_organisasi');
    }
    public function ubahprofilsma(Request $request){
        $data['active'] = 2;
        if($request->hasFile('foto_profil')) {
            $edit = Profil::findOrFail('5');
            $filelawas =  $edit->foto_profil;
            unlink(public_path("/dashboard/img/profil/").$filelawas);
            $filebaru = $request->file('foto_profil');
            $filename = $filebaru->getClientOriginalName();
            $filebaru->move(public_path()."/dashboard/img/profil", $filename);
            $edit ->foto_profil = $filename;
            $edit->save();
        }
        $ubah = Profil::findOrFail('5');
        $ubah->lembaga = $request->lembaga;
        $ubah->isi_profil = $request->isi_profil;
        $ubah->save();
        return redirect('profil_organisasi');
    }
    public function struktur(){
        $data['active'] = 2;
        $yayasan = Profil::findOrFail('1');
        $tk = Profil::findOrFail('2');
        $sd = Profil::findOrFail('3');
        $smp = Profil::findOrFail('4');
        $sma = Profil::findOrFail('5');
        return view('admin.organisasi.struktur',$data, compact('yayasan','tk','sd','smp','sma'));
    }
    public function ubahstrukturyayasan(Request $request){
        $data['active'] = 2;
        $edit = Profil::findOrFail('1');
        $filelawas =  $edit->foto_struktur;
        unlink(public_path("/dashboard/img/struktur/").$filelawas);
        $filebaru = $request->file('foto_struktur');
        $filename = $filebaru->getClientOriginalName();
        $filebaru->move(public_path()."/dashboard/img/struktur", $filename);
        $edit ->foto_struktur = $filename;
        $edit->save();
        return redirect('struktur_organisasi');
    }
    public function ubahstrukturtk(Request $request){
        $data['active'] = 2;
        $edit = Profil::findOrFail('2');
        $filelawas =  $edit->foto_struktur;
        unlink(public_path("/dashboard/img/struktur/").$filelawas);
        $filebaru = $request->file('foto_struktur');
        $filename = $filebaru->getClientOriginalName();
        $filebaru->move(public_path()."/dashboard/img/struktur", $filename);
        $edit ->foto_struktur = $filename;
        $edit->save();
        return redirect('struktur_organisasi');
    }
    public function ubahstruktursd(Request $request){
        $data['active'] = 2;
        $edit = Profil::findOrFail('3');
        $filelawas =  $edit->foto_struktur;
        unlink(public_path("/dashboard/img/struktur/").$filelawas);
        $filebaru = $request->file('foto_struktur');
        $filename = $filebaru->getClientOriginalName();
        $filebaru->move(public_path()."/dashboard/img/struktur", $filename);
        $edit ->foto_struktur = $filename;
        $edit->save();
        return redirect('struktur_organisasi');
    }
    public function ubahstruktursmp(Request $request){
        $data['active'] = 2;
        $edit = Profil::findOrFail('4');
        $filelawas =  $edit->foto_struktur;
        unlink(public_path("/dashboard/img/struktur/").$filelawas);
        $filebaru = $request->file('foto_struktur');
        $filename = $filebaru->getClientOriginalName();
        $filebaru->move(public_path()."/dashboard/img/struktur", $filename);
        $edit ->foto_struktur = $filename;
        $edit->save();
        return redirect('struktur_organisasi');
    }
    public function ubahstruktursma(Request $request){
        $data['active'] = 2;
        $edit = Profil::findOrFail('5');
        $filelawas =  $edit->foto_struktur;
        unlink(public_path("/dashboard/img/struktur/").$filelawas);
        $filebaru = $request->file('foto_struktur');
        $filename = $filebaru->getClientOriginalName();
        $filebaru->move(public_path()."/dashboard/img/struktur", $filename);
        $edit ->foto_struktur = $filename;
        $edit->save();
        return redirect('struktur_organisasi');
    }
    public function sambutan(){
        $data['active'] = 2;
        $sambutan = Yayasan::findOrFail('1');
        return view('admin.organisasi.sambutan',$data, compact('sambutan'));
    }
    public function ubahsambutan(Request $request){
        $data['active'] = 2;
        if($request->hasFile('foto_kepala')) {
            $edit = Yayasan::findOrFail('1');
            $filelawas =  $edit->foto_kepala;
            unlink(public_path("/dashboard/img/profil/").$filelawas);
            $filebaru = $request->file('foto_kepala');
            $filename = time().$filebaru->getClientOriginalName();
            $filebaru->move(public_path()."/dashboard/img/profil", $filename);
            $edit ->foto_kepala = $filename;
            $edit->save();
        }
        $ubah = Yayasan::findOrFail('1');
        $ubah->nama_kepala = $request->nama_kepala;
        $ubah->sambutan = $request->sambutan;
        $ubah->save();
        return redirect('sambutan');
    }
    public function visimisi(){
        $data['active'] = 2;
        $visimisi = Yayasan::findOrFail('1');
        return view('admin.organisasi.visimisi',$data, compact('visimisi'));
    }
    public function ubahvisimisi(Request $request){
        $data['active'] = 2;
        if($request->hasFile('foto_sekolah')) {
            $edit = Yayasan::findOrFail('1');
            $filelawas =  $edit->foto_sekolah;
            unlink(public_path("/dashboard/img/profil/").$filelawas);
            $filebaru = $request->file('foto_sekolah');
            $filename = time().$filebaru->getClientOriginalName();
            $filebaru->move(public_path()."/dashboard/img/profil", $filename);
            $edit ->foto_sekolah = $filename;
            $edit->save();
        }
        $ubah = Yayasan::findOrFail('1');
        $ubah->visi = $request->visi;
        $ubah->misi = $request->misi;
        $ubah->save();
        return redirect('visimisi');
    }
    public function statistik(){
        $data['active'] = 2;
        $statistik = Statistik::findOrFail('1');
        return view('admin.organisasi.statistik',$data, compact('statistik'));
    }
    public function ubahstatistik(Request $request){
        $data['active'] = 2;
        $ubah = Statistik::findOrFail('1');
        $ubah->murid = $request->murid;
        $ubah->guru = $request->guru;
        $ubah->ekstra = $request->ekstra;
        $ubah->save();
        return redirect('statistik');
    }
}
