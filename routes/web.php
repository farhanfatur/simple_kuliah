<?php

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
    return view('home');
});

Auth::routes();

Route::post('/login', 'UserController@doLogin')->name('Login');
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function() {
	Route::get('/home', function() {
		return view('admin.home');
	})->name('adminHome');

	// Siswa Route
	Route::get('/siswa', "admin\UserController@index")->name('indexSiswa');
	Route::get('/siswa/add', function() {
		return view('admin.siswa-add');
	});
	Route::get('/siswa/edit/{id}', 'admin\SiswaController@edit');
	Route::get('/siswa/delete/{id}', 'admin\SiswaController@delete');
	Route::post('/siswa/store', 'admin\SiswaController@store')->name('storeSiswa');
	Route::post('/siswa/update', 'admin\SiswaController@update')->name('updateSiswa');

	// Dosen Route
	Route::get('/dosen', 'admin\DosenController@index')->name('indexDosen');
	Route::get('/dosen/add', function() {
		return view('admin.dosen-add');
	});
	Route::post('/dosen/store', 'admin\DosenController@store')->name('storeDosen');
	Route::post('/dosen/update', 'admin\DosenController@update')->name('updateDosen');
	Route::get('/dosen/edit/{id}', 'admin\DosenController@edit');
	Route::get('/dosen/delete/{id}', 'admin\DosenController@delete');

	// Matkul Route
	Route::get('/matkul', "admin\MatkulController@index")->name('indexMatkul');
	Route::get('/matkul/add', function() {
		return view('admin.matkul-add');
	});
	Route::post('/matkul/store', 'admin\MatkulController@store')->name('storeMatkul');
	Route::post('/matkul/update', 'admin\MatkulController@update')->name('updateMatkul');
	Route::get('/matkul/edit/{id}', "admin\MatkulController@edit");
	Route::get('/matkul/delete/{id}', "admin\MatkulController@delete");

	// Kelas Route
	Route::get('/kelas', 'admin\KelasController@index')->name('indexKelas');
	Route::get('/kelas/add', 'admin\KelasController@add');
	Route::post('/kelas/store', 'admin\KelasController@store')->name('storeKelas');
	Route::post('/kelas/update', 'admin\KelasController@update')->name('updateKelas');
	Route::get('/kelas/edit/{id}', 'admin\KelasController@edit');
	Route::get('/kelas/delete/{id}', 'admin\KelasController@delete');

	// Siswa Kelas Route
	Route::get('/siswakelas', 'admin\SiswaKelasController@index')->name('indexSiswaKelas');
	Route::get('/siswakelas/add', 'admin\SiswaKelasController@add')->name('addSiswaKelas');
	Route::post('/siswakelas/store', 'admin\SiswaKelasController@store')->name('storeSiswaKelas');
});