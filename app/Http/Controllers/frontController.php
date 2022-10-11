<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\GaleriFoto;
use App\Models\Profil;
use App\Models\Jadwal;
use App\Models\Lowongan;
use App\Models\Keuangan;
use App\Models\Slider;
use App\Models\GaleriVideo;
use App\Models\Yayasan;
use App\Models\Statistik;
use App\Models\Syarat;
use App\Models\PPDBTK;
use App\Models\PPDBSD;
use App\Models\PPDBSMP;
use App\Models\PPDBSMA;
use App\Models\NomorDonasi;

class frontController extends Controller
{
    public function notfound(){
        
    }
    public function index(){
        $data['active'] = 1;
        $sliderHero = Slider::all();
        $profilTK = Profil::findOrFail(2);
        $profilSD = Profil::findOrFail(3);
        $profilSMP = Profil::findOrFail(4);
        $profilSMA = Profil::findOrFail(5);
        $galeri_list = GaleriFoto::orderBy('id', 'desc')->take(3)->get();
        $statistik = Statistik::findOrFail(1);
        $lowonganPekerjaan = Lowongan::findOrFail(1);
        return view('index', $data, compact('sliderHero', 'profilTK', 'profilSD', 'profilSMP', 'profilSMA', 'galeri_list','statistik','lowonganPekerjaan'));
    }

    // public function profilYayasan(){
    //     $data['active'] = 2;
    //     $profilYayasan = Profil::findOrFail(1);
    //     return view('profilYayasan', $data, compact('profilYayasan'));
    // }

    public function sejarahSingkat(){
        $data['active'] = 2;
        $sejarahSingkat = Profil::findOrFail(1);
        return view('sejarahSingkat', $data, compact('sejarahSingkat'));
    }

    public function sambutanKepala(){
        $data['active'] = 2;
        $sambutan = Yayasan::findOrFail(1);
        return view('sambutanKepala', $data, compact('sambutan'));
    }

    public function visiDanMisi(){
        $data['active'] = 2;
        $visimisi = Yayasan::findOrFail(1);
        return view('visiDanMisi', $data, compact('visimisi'));
    }

    public function profilTK(){
        $data['active'] = 3;
        $profilTK = Profil::findOrFail(2);
        return view('profilTK', $data, compact('profilTK'));
    }

    public function profilSD(){
        $data['active'] = 3;
        $profilSD = Profil::findOrFail(3);
        return view('profilSD', $data, compact('profilSD'));
    }

    public function profilSMP(){
        $data['active'] = 3;
        $profilSMP = Profil::findOrFail(4);
        return view('profilSMP', $data, compact('profilSMP'));
    }

    public function profilSMA(){
        $data['active'] = 3;
        $profilSMA = Profil::findOrFail(5);
        return view('profilSMA', $data, compact('profilSMA'));
    }

    public function fotoKegiatan(Request $request){
        $data['active'] = 4;
        $galeri_list = GaleriFoto::orderByDesc('id')->when($request->cari, function ($query) use ($request) {
        $query->where('judul', 'like', "%{$request->cari}%")
            ->orWhere('deskripsi', 'like', "%{$request->cari}%");
        })->paginate(6);
        $galeri_list->appends($request->only('cari'));
        return view('fotoKegiatan', $data, compact('galeri_list'));
    }

    public function readFoto($id){
        $data['active'] = 4;
        $read = GaleriFoto::findOrFail($id);
        return view('readFoto', $data, compact('read'));
    }

    public function videoKegiatan(Request $request){
        $data['active'] = 4;
        $galeri_video = GaleriVideo::orderByDesc('id')->when($request->cari, function ($query) use ($request) {
        $query->where('judul', 'like', "%{$request->cari}%")
            ->orWhere('deskripsi', 'like', "%{$request->cari}%");
        })->paginate(6);
        $galeri_video->appends($request->only('cari'));
        return view('videoKegiatan', $data, compact('galeri_video'));
    }

    public function laporanKeuangan(){
        $data['active'] = 5;
        $laporanKeuangan = Keuangan::orderBy('id', 'desc')->get();
        return view('laporanKeuangan', $data, compact('laporanKeuangan'));
    }

    public function donasi(){
        $data['active'] = 5;
        $donasi = NomorDonasi::findOrFail(1);
        return view('donasi', $data, compact('donasi'));
    }

    public function infoPPDB(){
        $data['active'] = 6;
        $syarat = Syarat::findOrFail(1);
        return view('infoPPDB', $data, compact('syarat'));
    }

    public function jadwalKegiatan(){
        $data['active'] = 7;
        $jadwal_list = Jadwal::orderBy('id','desc')->get();
        return view('jadwalKegiatan', $data, compact('jadwal_list'));
    }

    public function lowonganPekerjaan(){
        $data['active'] = 7;
        $lowonganPekerjaan = Lowongan::findOrFail(1);
        return view('lowonganPekerjaan', $data, compact('lowonganPekerjaan'));
    }
    public function storetk(Request $request){
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
        $data['active'] = 6;
        return view('sukses',$data);
    }
    public function storesd(Request $request){
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
        $data['active'] = 6;
        return view('sukses',$data);
    }
    public function storesmp(Request $request){
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
        $data['active'] = 6;
        return view('sukses',$data);
    }
    public function storesma(Request $request){
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
        $data['active'] = 6;
        return view('sukses',$data);
    }

}
