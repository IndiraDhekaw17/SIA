<?php

use App\Http\Controllers\KlienController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\Aruskascontroller;
use App\Http\Controllers\Beranda;
use App\Http\Controllers\BukubesarController;
use App\Http\Controllers\Kasir;
use App\Http\Controllers\LabarugiController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\PerubahanmodalController;
use App\Http\Controllers\MemorialController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PenutupController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('login',[LoginController::class, 'index'])->name('login');

Route::get('/', [LayoutController::class, 'index'])->middleware('auth');
Route::get('/home', [LayoutController::class, 'index'])->middleware('auth');


Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout','logout');

});
Route::group(['middleware' => ['auth']],function(){
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('Beranda', Beranda::class);
    });

    Route::group(['middleware' => ['cekUserLogin:2']],function () {
        Route::resource('kasir', Kasir::class);
    });
});

Route::group(['middleware' => ['auth','cekUserLogin:admin,karyawan']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('Beranda', Beranda::class);
        Route::resource('AkunController', AkunController::class);
        Route::resource('KlienController', KlienController::class);
        Route::resource('PenerimaanController', PenerimaanController::class);
        Route::resource('PengeluaranController', PengeluaranController::class);
        Route::resource('MemorialController', MemorialController::class);
    });

    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::resource('Beranda', Beranda::class);
        Route::resource('AkunController', AkunController::class);
        Route::resource('KlienController', KlienController::class);
        Route::resource('PenerimaanController', PenerimaanController::class);
        Route::resource('PengeluaranController', PengeluaranController::class);
        Route::resource('MemorialController', MemorialController::class);
        Route::resource('BukubesarController', BukubesarController::class);
        Route::resource('KeuanganController', KeuanganController::class);
        Route::resource('LabarugiController', LabarugiController::class);
        Route::resource('PerubahanmodalController', PerubahanmodalController::class);
        Route::resource('AruskasController', AruskasController::class);
    });
});

Route::controller(KlienController::class)->group(function(){
    Route::get('/kliens/index', 'index');
    Route::get('/kliens/create', 'create');
});

Route::resource('kliens', KlienController::class);

Route::controller(AkunController::class)->group(function(){
    Route::get('/akuns/index', [\App\Http\Controllers\AkunController::class, 'index']);
    Route::get('/akuns/create', [\App\Http\Controllers\AkunController::class, 'create']);
    Route::delete('/akuns/{id}', [\App\Http\Controllers\AkunController::class, 'destroy']);
});

Route::resource('akuns', AkunController::class);

Route::controller(PenerimaanController::class)->group(function(){
    Route::get('/penerimaans/index', 'index');
    Route::get('/penerimaans/create', 'create');
});

Route::resource('penerimaans', PenerimaanController::class);


Route::controller(PengeluaranController::class)->group(function(){
    Route::get('/pengeluarans/index', 'index');
    Route::post('/pengeluarans/create', 'create');
});

Route::resource('pengeluarans', PengeluaranController::class);

Route::controller(LabarugiController::class)->group(function(){
    Route::get('/labarugis/index',  [\App\Http\Controllers\LabarugiController::class, 'index']);
});

Route::controller(PerubahanmodalController::class)->group(function(){
    Route::get('/perubahanmodal/index', 'index');
    Route::get('/perubahanmodal/create', 'create');
});

Route::resource('perubahanmodal', PerubahanmodalController::class);

Route::controller(BukubesarController::class)->group(function(){
    Route::get('/bukubesar/index', 'index');
    Route::get('/bukubesar/create', 'create');
});

Route::resource('bukubesar', BukubesarController::class);

Route::controller(MemorialController::class)->group(function(){
    Route::get('/memorials/index', [\App\Http\Controllers\MemorialController::class, 'index']);
    Route::post('/memorials/create', [\App\Http\Controllers\MemorialController::class, 'create']);
});

Route::resource('memorials', MemorialController::class);

Route::controller(KeuanganController::class)->group(function(){
    Route::get('/keuangans/index',  [\App\Http\Controllers\KeuanganController::class, 'index']);
});
Route::post('keuangans', function(){
    return view('/keuangans/index');
});

Route::controller(AruskasController::class)->group(function(){
    Route::get('/aruskass/index',  [\App\Http\Controllers\AruskasController::class, 'index']);
});
Route::post('aruskass', function(){
    return view('/aruskass/index');
});

Route::controller(PenutupController::class)->group(function(){
    Route::get('/penutups/index', [\App\Http\Controllers\PenutupController::class, 'index']);
    Route::post('/penutups/create', [\App\Http\Controllers\PenutupController::class, 'create']);
});

Route::resource('penutups', PenutupController::class);