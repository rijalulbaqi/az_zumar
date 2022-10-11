<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\frontController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth:sanctum', 'verified'])->get('/home', [DashboardController::class,'dashboard']);
Route::middleware(['auth:sanctum', 'verified'])->get('/ubahpassword', [DashboardController::class,'ubahpassword']);
Route::get('register', [frontController::class,'notfound']);

Route::get('jadwal_kegiatan', [JadwalController::class,'index']);
Route::post('tambahjadwal', [JadwalController::class,'store']);
Route::get('datajadwal', [JadwalController::class,'datatable']);
Route::post('deletejadwal/{delete}', [JadwalController::class,'delete']);
Route::get('editjadwal/{edit}', [JadwalController::class,'edit']);
Route::post('editjadwal/{edit}/update', [JadwalController::class,'update']);

Route::get('profil_organisasi', [OrganisasiController::class,'profil']);
Route::post('ubahprofilyayasan', [OrganisasiController::class,'ubahprofilyayasan']);
Route::post('ubahprofiltk', [OrganisasiController::class,'ubahprofiltk']);
Route::post('ubahprofilsd', [OrganisasiController::class,'ubahprofilsd']);
Route::post('ubahprofilsmp', [OrganisasiController::class,'ubahprofilsmp']);
Route::post('ubahprofilsma', [OrganisasiController::class,'ubahprofilsma']);
Route::get('struktur_organisasi', [OrganisasiController::class,'struktur']);
Route::post('ubahstrukturyayasan', [OrganisasiController::class,'ubahstrukturyayasan']);
Route::post('ubahstrukturtk', [OrganisasiController::class,'ubahstrukturtk']);
Route::post('ubahstruktursd', [OrganisasiController::class,'ubahstruktursd']);
Route::post('ubahstruktursmp', [OrganisasiController::class,'ubahstruktursmp']);
Route::post('ubahstruktursma', [OrganisasiController::class,'ubahstruktursma']);
Route::get('sambutan', [OrganisasiController::class,'sambutan']);
Route::post('ubahsambutan', [OrganisasiController::class,'ubahsambutan']);
Route::get('visimisi', [OrganisasiController::class,'visimisi']);
Route::post('ubahvisimisi', [OrganisasiController::class,'ubahvisimisi']);
Route::get('statistik', [OrganisasiController::class,'statistik']);
Route::post('ubahstatistik', [OrganisasiController::class,'ubahstatistik']);

Route::get('foto', [GaleriController::class,'foto']);
Route::get('datafoto', [GaleriController::class,'datatablefoto']);
Route::post('tambahfoto', [GaleriController::class,'storefoto']);
Route::post('deletefoto/{delete}', [GaleriController::class,'deletefoto']);
Route::get('editfoto/{edit}', [GaleriController::class,'editfoto']);
Route::post('editfoto/{edit}/update', [GaleriController::class,'updatefoto']);
Route::get('video', [GaleriController::class,'video']);
Route::get('datavideo', [GaleriController::class,'datatablevideo']);
Route::post('tambahvideo', [GaleriController::class,'storevideo']);
Route::post('deletevideo/{delete}', [GaleriController::class,'deletevideo']);
Route::get('editvideo/{edit}', [GaleriController::class,'editvideo']);
Route::post('editvideo/{edit}/update', [GaleriController::class,'updatevideo']);

Route::get('slide_foto', [DashboardController::class,'slide_foto']);
Route::get('dataslider', [DashboardController::class,'datatableslider']);
Route::get('editslider/{edit}', [DashboardController::class,'editslider']);
Route::post('editslider/{edit}/update', [DashboardController::class,'updateslider']);

Route::get('syarat', [PPDBController::class,'syarat']);
Route::post('ubahsyarat', [PPDBController::class,'ubahsyarat']);

Route::get('tk', [PPDBController::class,'tk']);
Route::get('cetaktk', [PPDBController::class,'cetaktk']);
Route::get('datatk', [PPDBController::class,'datatabletk']);
Route::post('tambahtk', [PPDBController::class,'storetk']);
Route::post('deletetk/{delete}', [PPDBController::class,'deletetk']);
Route::get('showtk/{id}', [PPDBController::class,'showtk']);
Route::get('tk/exporttk', [PPDBController::class,'exporttk']);

Route::get('sd', [PPDBController::class,'sd']);
Route::get('datasd', [PPDBController::class,'datatablesd']);
Route::post('tambahsd', [PPDBController::class,'storesd']);
Route::post('deletesd/{delete}', [PPDBController::class,'deletesd']);
Route::get('showsd/{id}', [PPDBController::class,'showsd']);
Route::get('sd/exportsd', [PPDBController::class,'exportsd']);

Route::get('smp', [PPDBController::class,'smp']);
Route::get('datasmp', [PPDBController::class,'datatablesmp']);
Route::post('tambahsmp', [PPDBController::class,'storesmp']);
Route::post('deletesmp/{delete}', [PPDBController::class,'deletesmp']);
Route::get('showsmp/{id}', [PPDBController::class,'showsmp']);
Route::get('smp/exportsmp', [PPDBController::class,'exportsmp']);

Route::get('sma', [PPDBController::class,'sma']);
Route::get('datasma', [PPDBController::class,'datatablesma']);
Route::post('tambahsma', [PPDBController::class,'storesma']);
Route::post('deletesma/{delete}', [PPDBController::class,'deletesma']);
Route::get('showsma/{id}', [PPDBController::class,'showsma']);
Route::get('sma/exportsma', [PPDBController::class,'exportsma']);

Route::get('laporan_keuangan', [KeuanganController::class,'laporankeuangan']);
Route::get('datakeuangan', [KeuanganController::class,'datatable']);
Route::get('cetakkeuangan', [KeuanganController::class,'cetakkeuangan']);
Route::get('resetkeuangan', [KeuanganController::class,'resetkeuangan']);
Route::post('tambahpemasukan', [KeuanganController::class,'storepemasukan']);
Route::post('tambahpengeluaran', [KeuanganController::class,'storepengeluaran']);
Route::post('deletekeuangan/{delete}', [KeuanganController::class,'delete']);

Route::get('ddonasi', [KeuanganController::class,'donasi']);
Route::get('datadonasi', [KeuanganController::class,'datatabledonasi']);
Route::post('tambahdonasi', [KeuanganController::class,'storedonasi']);
Route::post('deletedonasi/{delete}', [KeuanganController::class,'deletedonasi']);
Route::post('editnomor', [KeuanganController::class,'gantinomor']);

Route::get('lowongan_kerja', [LowonganController::class,'index']);
Route::get('editlowongan', [LowonganController::class,'edit']);
Route::post('updatelowongan', [LowonganController::class,'update']);

// end backend

// frontend
Route::get('/', [frontController::class,'index']);
Route::get('/sejarahSingkat', [frontController::class,'sejarahSingkat']);
Route::get('/sambutanKepala', [frontController::class,'sambutanKepala']);
Route::get('/visiDanMisi', [frontController::class,'visiDanMisi']);
Route::get('/profilTK', [frontController::class,'profilTK']);
Route::get('/profilSD', [frontController::class,'profilSD']);
Route::get('/profilSMP', [frontController::class,'profilSMP']);
Route::get('/profilSMA', [frontController::class,'profilSMA']);
Route::get('/fotoKegiatan', [frontController::class,'fotoKegiatan']);
Route::get('/fotoKegiatan/read/{id}', [frontController::class,'readFoto']);
Route::get('/videoKegiatan', [frontController::class,'videoKegiatan']);
Route::get('/laporanKeuangan', [frontController::class,'laporanKeuangan']);
Route::get('/donasi', [frontController::class,'donasi']);
Route::get('/infoPPDB', [frontController::class,'infoPPDB']);
Route::get('/jadwalKegiatan', [frontController::class,'jadwalKegiatan']);
Route::get('/lowonganPekerjaan', [frontController::class,'lowonganPekerjaan']);
Route::post('ppdbtk', [frontController::class,'storetk']);
Route::post('ppdbsd', [frontController::class,'storesd']);
Route::post('ppdbsmp', [frontController::class,'storesmp']);
Route::post('ppdbsma', [frontController::class,'storesma']);
