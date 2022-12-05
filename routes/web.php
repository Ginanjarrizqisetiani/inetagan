<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Home\HomeSlideController;
use App\Http\Controllers\datapelanggan;
use App\Http\Controllers\daftarController;



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
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('Dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');});

//Admin All route
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');

});

//Home Slide all route
Route::controller(HomeSlideController::class)->group(function () {
    Route::get('/home/slide', 'HomeSlide')->name('home.slide');

});
//End group Middleware

//Admin Category All Routes
Route::get('/categories', [CategoryController::class,'index'])->name('categories');

//daftar Routes
Route::get('/daftar', [daftarController::class,'index'])->name('daftar');


require __DIR__ . '/auth.php';
