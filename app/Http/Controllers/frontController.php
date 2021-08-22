<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
        $data['active'] = 1;
        return view('index', $data);
    }

    public function profilYayasan(){
        $data['active'] = 2;
        return view('profilYayasan', $data);
    }

    public function profilTK(){
        $data['active'] = 3;
        return view('profilTK', $data);
    }

    public function profilSD(){
        $data['active'] = 3;
        return view('profilSD', $data);
    }

    public function profilSMP(){
        $data['active'] = 3;
        return view('profilSMP', $data);
    }

    public function profilSMA(){
        $data['active'] = 3;
        return view('profilSMA', $data);
    }

    public function fotoKegiatan(){
        $data['active'] = 4;
        return view('fotoKegiatan', $data);
    }

    public function videoKegiatan(){
        $data['active'] = 4;
        return view('videoKegiatan', $data);
    }

    public function laporanKeuangan(){
        $data['active'] = 5;
        return view('laporanKeuangan', $data);
    }

    public function donasi(){
        $data['active'] = 5;
        return view('donasi', $data);
    }

    public function infoPPDB(){
        $data['active'] = 6;
        return view('infoPPDB', $data);
    }

    public function jadwalKegiatan(){
        $data['active'] = 7;
        return view('jadwalKegiatan', $data);
    }

    public function lowonganPekerjaan(){
        $data['active'] = 7;
        return view('lowonganPekerjaan', $data);
    }

}
