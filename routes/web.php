<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OrganController;
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
    return  redirect()->route('Admin');
});

Route::group(['prefix'=>'Admin'],function(){
    Route::get('/', function () {
        return view('Admin.index');
    })->name('admin');

    Route::get('/Admin',[AdminController::class,'demo'])->name('admin.demo');
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/Table',[DonorController::class,'donor'])->name('admin.donor');
    Route::get('/patient',[PatientController::class,'patient'])->name('admin.patient');
    Route::get('/contact',[AdminController::class,'contact'])->name('admin.contact');

    //post
    Route::get('/create',[AdminController::class,'postCreate'])->name('admin.postCreate');
    Route::get('/post',[PostController::class,'post5'])->name('admin.dpost5');
    Route::post('/store',[AdminController::class,'store'])->name('admin.store');

    //stock
    Route::get('/stock',[StockController::class,'stock'])->name('admin.stock');
    Route::get('/stock/addstock',[StockController::class,'addstock'])->name('admin.stock.addstock');
    Route::post('/add',[StockController::class,'add'])->name('stock.add');

    // organ
        Route::get('/category',[OrganController::class,'list'])->name('admin.category');
        Route::get('category/form',[OrganController::class,'form'])->name('category.form');
        Route::post('/category/add',[OrganController::class,'add'])->name('category.add');
});
