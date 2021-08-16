<?php

use App\Http\Controllers\Admin\RouteAdminController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Guest\HomeController;
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
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');



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
});


// --------------------------------------------------------------------------- //
// ---------------------------------USER ROUTE-------------------------------- //
// --------------------------------------------------------------------------- //
Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});

// --------------------------------------------------------------------------- //
// ---------------------------------API ROUTE--------------------------------- //
// --------------------------------------------------------------------------- //
Route::prefix('v1/api')->group(function () {
    Route::get('/', function () {
        return "a";
    });
});


require __DIR__ . '/auth.php';
