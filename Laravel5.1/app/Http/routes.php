<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');

Route::group(['middleware'=>'autadmin'], function(){
Route::group(['middleware'=>'level:admin'], function(){
Route::get('/sesiadmin', function () {
    return view('admin');
});


Route::get('pemilik', 'PemilikController@awal');
Route::get('pemilik/tambah', 'PemilikController@tambah');
Route::get('pemilik/lihat/{pemilik}','PemilikController@lihat');
Route::post('pemilik/simpan', 'PemilikController@simpan');
Route::get('pemilik/edit/{pemilik}', 'PemilikController@edit');
Route::post('pemilik/edit/{pemilik}', 'PemilikController@update');
Route::get('pemilik/hapus/{pemilik}', 'PemilikController@hapus');

Route::get('kendaraan', 'kendaraanController@awal');
Route::get('kendaraan/tambah', 'kendaraanController@tambah');
Route::get('kendaraan/lihat/{kendaraan}','kendaraanController@lihat');
Route::post('kendaraan/simpan', 'kendaraanController@simpan');
Route::get('kendaraan/edit/{kendaraan}', 'kendaraanController@edit');
Route::post('kendaraan/edit/{kendaraan}', 'kendaraanController@update');
Route::get('kendaraan/hapus/{kendaraan}', 'kendaraanController@hapus');

Route::get('operator', 'operatorController@awal');
Route::get('operator/tambah', 'operatorController@tambah');
Route::get('operator/lihat/{operator}','operatorController@lihat');
Route::post('operator/simpan', 'operatorController@simpan');
Route::get('operator/edit/{operator}', 'operatorController@edit');
Route::post('operator/edit/{operator}', 'operatorController@update');
Route::get('operator/hapus/{operator}', 'operatorController@hapus');




Route::get('petugas', 'petugasController@awal');
Route::get('petugas/tambah', 'petugasController@tambah');
Route::get('petugas/lihat/{petugas}','petugasController@lihat');
Route::post('petugas/simpan', 'petugasController@simpan');
Route::get('petugas/edit/{petugas}', 'petugasController@edit');
Route::post('petugas/edit/{petugas}', 'petugasController@update');
Route::get('petugas/hapus/{petugas}', 'petugasController@hapus');

Route::get('stnk', 'stnkController@awal');
Route::get('stnk/tambah', 'stnkController@tambah');
Route::get('stnk/lihat/{stnk}','stnkController@lihat');
Route::post('stnk/simpan', 'stnkController@simpan');
Route::get('stnk/edit/{stnk}', 'stnkController@edit');
Route::post('stnk/edit/{stnk}', 'stnkController@update');
Route::get('stnk/hapus/{stnk}', 'stnkController@hapus');

});

Route::group(['middleware'=>'level:user'], function(){	
	Route::get('/sesipetugas', function () {
    return view('petugas');
});
Route::get('pajak', 'pajakController@awal');
Route::get('pajak/tambah', 'pajakController@tambah');
Route::get('pajak/lihat/{pajak}','pajakController@lihat');
Route::post('pajak/simpan', 'pajakController@simpan');
Route::get('pajak/edit/{pajak}', 'pajakController@edit');
Route::post('pajak/edit/{pajak}', 'pajakController@update');
Route::get('pajak/hapus/{pajak}', 'pajakController@hapus');



Route::get('denda', 'dendaController@awal');
Route::get('denda/tambah', 'dendaController@tambah');
Route::get('denda/lihat/{denda}','dendaController@lihat');
Route::post('denda/simpan', 'dendaController@simpan');
Route::get('denda/edit/{denda}', 'dendaController@edit');
Route::post('denda/edit/{denda}', 'dendaController@update');
Route::get('denda/hapus/{denda}', 'dendaController@hapus');
});



});

Route::get('/tes', function () {
    return view('login');
});


// Route::get('/home', 'HomeController@index');
