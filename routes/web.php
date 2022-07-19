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

Route ::get('halaman-2', function(){
    return 'halaman 2';
});

Route ::get('halaman-3/{nama}/{jk} ', function($nama , $jk){
    return 'Halaman Profile '.$nama . '<br> dengan Jenis Kelamin '.$jk;
});


Route ::get('halaman-profile/{nama?}', function($nama = 'Muhamad Firza'){
    return 'Profile ' . $nama;
});

//Route ::get('profile', function(){
   // return view('Profile ');
//});

Route ::get('about/{nama}', function($nama){
    $umur = 10 + 7;
    return view ('about ' , compact('nama','umur'));
});

Route ::get('order/{var1}/{var2}/{param3}', function($a, $b, $c){
    return view ('pages.order ' , compact('a','b','c'));
});


Route ::get('pesan/{a?}/{b?}/{c?}', function($a = "Silahkan pesan ",$b=null,$c=null){
    return view ('pages.pesan ' , compact('a','b','c'));
});


route::get('hallo', 'NamaController@hallo');
route::get('profile', 'NamaController@profile');
route::get('facebook/{perkalian}-{nama}', 'NamaController@facebook');
route::get('nama', 'NamaController@siswa');

route::get('{berat}/{tinggi}', 'NamaController@berat');
Route::get('dosen','Namacontroller@dosen');
Route::get('mahasiswa','NamaController@mahasiswa');
Route::get('kelas','NamaController@kelas');
Route::get('belanja','NamaController@belanja');
Route::get('post', [PostController::class, 'tampil']);
Route::get('post/{id}', [PostController::class, 'search']);
Route::get('post/judul/{title}', [PostController::class, 'search_title']);
Route::get('post/edit/{id}/{title}/{content}', [PostController::class, 'edit']);
Route::get('post/tambah/{title}/{content}', [PostController::class, 'tambah']);
Route::get('post/delete/{id}', [PostController::class, 'hapus']);
Route::get('siswa', 'SiswaController@tampil');



