<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('beranda', function () {
    return view('beranda');
});

Route::get('bukuspmi', function () {
    return view('bukuspmi');
});

Route::get('siami', function () {
    return view('siami');
});

Route::get('akreditasi', function () {
    return view('akreditasi');
});

Route::get('unduhan', function () {
    return view('unduhan');
});

Route::get('profil', function () {
    return view('profil');
});

Route::get('pengembanganpembelajaran', function () {
    return view('pengembanganpembelajaran');
});

Route::get('galeri', function () {
    return view('galeri');
});




//akreditasi

Route::get('akreditasi/akreditasiperguruantinggi', function () {
    return view('akreditasi/akreditasiperguruantinggi');
});

Route::get('akreditasi/akreditasiprodi', function () {
    return view('akreditasi/akreditasiprodi');
});

Route::get('akreditasi/peraturanbanpt', function () {
    return view('akreditasi/peraturanbanpt');
});



//profil

Route::get('profil/latarbelakangp4mp', function () {
    return view('profil/latarbelakangp4mp');
});

Route::get('profil/visimisip4mp', function () {
    return view('profil/visimisip4mp');
});

Route::get('profil/tupoksip4mp', function () {
    return view('profil/tupoksip4mp');
});

Route::get('profil/strukturorganisasip4mp', function () {
    return view('profil/strukturorganisasip4mp');
});




//buku spmi

Route::get('bukuspmi/kebijakanmutu', function () {
    return view('bukuspmi/kebijakanmutu');
});

Route::get('bukuspmi/manualstandarppepp', function () {
    return view('bukuspmi/manualstandarppepp');
});

Route::get('bukuspmi/sop', function () {
    return view('bukuspmi/sop');
});

Route::get('bukuspmi/standarmelampauisndikti', function () {
    return view('bukuspmi/standarmelampauisndikti');
});

Route::get('bukuspmi/standarpendidikan', function () {
    return view('bukuspmi/standarpendidikan');
});

Route::get('bukuspmi/standarpenelitian', function () {
    return view('bukuspmi/standarpenelitian');
});

Route::get('bukuspmi/standarpkm', function () {
    return view('bukuspmi/standarpkm');
});



//siami

Route::get('siami/informasiauditmutuinternal', function () {
    return view('siami/informasiauditmutuinternal');
});

Route::get('siami/laporanauditmutuinternal', function () {
    return view('siami/laporanauditmutuinternal');
});

Route::get('siami/pedomanauditmutuinternal', function () {
    return view('siami/pedomanauditmutuinternal');
});

Route::get('siami/pelaksanaanauditmutuinternal', function () {
    return view('siami/pelaksanaanauditmutuinternal');
});



//pengembangan pembelajaran

Route::get('pengembanganpembelajaran/kalenderakademik', function () {
    return view('pengembanganpembelajaran/kalenderakademik');
});

Route::get('pengembanganpembelajaran/monitoringdanevaluasi', function () {
    return view('pengembanganpembelajaran/monitoringdanevaluasi');
});

Route::get('pengembanganpembelajaran/pengembangandosen', function () {
    return view('pengembanganpembelajaran/pengembangandosen');
});

Route::get('pengembanganpembelajaran/pengembangantendik', function () {
    return view('pengembanganpembelajaran/pengembangantendik');
});




//unduhan

Route::get('unduhan/pedoman', function () {
    return view('unduhan/pedoman');
});

Route::get('unduhan/peraturanperaturan', function () {
    return view('unduhan/peraturanperaturan');
});

Route::get('unduhan/renstrapolitap', function () {
    return view('unduhan/renstrapolitap');
});

Route::get('unduhan/sotkpolitap', function () {
    return view('unduhan/sotkpolitap');
});

Route::get('unduhan/statutapolitap', function () {
    return view('unduhan/statutapolitap');
});


//galeri

Route::get('galeri', function () {
    return view('galeri');
});


//kontak

Route::get('kontak', function () {
    return view('kontak');
});