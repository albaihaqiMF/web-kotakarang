<?php

use App\Http\Controllers\Admin\RouteAdminController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\JSON\ApiController;
use App\Http\Controllers\ServiceController;
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
// --------------------------------------------------------------------------- //
// --------------------------------GUEST ROUTE-------------------------------- //
// --------------------------------------------------------------------------- //
Route::get('/', [HomeController::class, 'beranda'])->name('welcome');
Route::get('/pengumuman', [HomeController::class, 'pengumuman'])->name('pengumuman');
Route::get('/pengumuman/{pengumuman:slug}', [HomeController::class, 'pengumumanShow'])->name('pengumuman.show');
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('/event/{event:slug}', [HomeController::class, 'eventShow'])->name('event.show');
Route::prefix('service')->group(function () {
    Route::get('/', [HomeController::class, 'service'])->name('service');

    // --- KTP ---//
    Route::get('/ktp', [ServiceController::class, 'create_ktp'])->name('ktp');
    Route::post('/ktp', [ServiceController::class, 'store_ktp'])->name('store.ktp');

    // --- KK ---//
    Route::get('/kk', [ServiceController::class, 'create_kk'])->name('kk');
    Route::post('/kk', [ServiceController::class, 'store_kk'])->name('store.kk');

    // --- SK Kematian ---//
    Route::get('/sk-kematian', [ServiceController::class, 'create_skKematian'])->name('sk-kematian');
    Route::post('/sk-kematian', [ServiceController::class, 'store_skKematian'])->name('store.sk-kematian');

    // --- SK Kelahiran ---//
    Route::get('/sk-kelahiran', [ServiceController::class, 'create_skKelahiran'])->name('sk-kelahiran');
    Route::post('/sk-kelahiran', [ServiceController::class, 'store_skKelahiran'])->name('store.sk-kelahiran');

    Route::post('search', [ServiceController::class, 'search'])->name('service.search');
});
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/map', [HomeController::class, 'map'])->name('map');



// --------------------------------------------------------------------------- //
// --------------------------------ADMIN ROUTE-------------------------------- //
// --------------------------------------------------------------------------- //
Route::group(['prefix' => 'admin',  'middleware' => ['auth']], function () {
    Route::get('/', [RouteAdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/data-penduduk', [RouteAdminController::class, 'dataPenduduk'])->name('admin.data-penduduk');
    Route::get('/data-penduduk/create', [AdminController::class, 'createPenduduk'])->name('admin.penduduk.create');
    Route::post('/data-penduduk/store', [AdminController::class, 'storePenduduk'])->name('admin.penduduk.store');
    Route::get('/data-keluarga', [RouteAdminController::class, 'dataKeluarga'])->name('admin.data-keluarga');
    Route::get('/data-keluarga/create', [AdminController::class, 'createKeluarga'])->name('admin.keluarga.create');
    Route::post('/data-keluarga/store', [AdminController::class, 'storeKeluarga'])->name('admin.keluarga.store');
    Route::get('/map', [RouteAdminController::class, 'map'])->name('admin.map');

    // --------------------------------------------------------------------------- //
    // ------------------------------ADMIN SERVICES------------------------------- //
    // --------------------------------------------------------------------------- //
    Route::get('/daftar-ktp', [AdminServiceController::class, 'daftar_ktp'])->name('admin.daftar-ktp');
    Route::patch('/verify-ktp/{id}', [AdminServiceController::class, 'verify_ktp'])->name('admin.daftar-ktp.verify');
    Route::patch('/delete-ktp/{id}', [AdminServiceController::class, 'delete_ktp'])->name('admin.daftar-ktp.delete');


    Route::get('/sk-kelahiran', [AdminServiceController::class, 'sk_kelahiran'])->name('admin.sk-kelahiran');
    Route::get('/sk-kelahiran/{kelahiran:id}', [AdminServiceController::class, 'kelahiranShow'])->name('admin.sk-kelahiran.detail');
    Route::patch('/sk-kelahiran/verify/{kelahiran:id}', [AdminServiceController::class, 'verify_kelahiran'])->name('admin.sk-kelahiran.detail.verify');
    Route::patch('/sk-kelahiran/delete/{kelahiran:id}', [AdminServiceController::class, 'delete_kelahiran'])->name('admin.sk-kelahiran.detail.delete');

    // ---
    Route::get('/sk-kematian', [AdminServiceController::class, 'sk_kematian'])->name('admin.sk-kematian');
    Route::get('/sk-kematian/{kematian:id}', [AdminServiceController::class, 'kematianShow'])->name('admin.sk-kematian.detail');
});


// --------------------------------------------------------------------------- //
// ---------------------------------USER ROUTE-------------------------------- //
// --------------------------------------------------------------------------- //
Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');



    // --------------------------------------------------------------------------- //
    // ---------------------------------API ROUTE--------------------------------- //
    // --------------------------------------------------------------------------- //
    Route::prefix('v1/api')->group(function () {
        Route::get('/', [ApiController::class, 'index']);
        Route::get('gender', [ApiController::class, 'gender']);
        Route::get('penduduk', [ApiController::class, 'penduduk']);
        Route::get('keluarga', [ApiController::class, 'keluarga']);
    });
});



require __DIR__ . '/auth.php';
