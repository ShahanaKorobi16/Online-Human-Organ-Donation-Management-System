<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OrganController;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Website\DonateController;
use App\Http\Controllers\Website\RegistrationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Website\LoginController;
use App\Http\Controllers\Website\AddPostController;
use App\Http\Controllers\Website\DonorPostController;
use App\Models\Post;
use App\Models\Donorpost;
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

// Route::get('/', function () {
//     return view('Admin.index');
// });

Route::get('/', function () {
        return view('website.index');
     });

     
Route::get('/home',[WebsiteController::class,'home'])->name('website.home');
Route::get('/donate',[DonateController::class,'donate'])->name('website.donar-reg');
Route::get('/reg',[RegistrationController::class,'reg'])->name('website.patient-reg');

//website post
Route::get('/create',[AddPostController::class,'create'])->name('website.create-post');
Route::get('/post',[AddPostController::class,'post'])->name('website.post');
Route::post('/store',[AddPostController::class,'store'])->name('website.store');
Route::get('post/view/{post_id}',[AddPostController::class,'postDetails'])->name('website.post.details');
Route::get('post/delete/{post_id}',[AddPostController::class,'postDelete'])->name('website.post.delete');

//website donor post
Route::get('/dcreate',[DonorPostController::class,'dcreate'])->name('website.donor-post-create');
Route::get('/dpost',[DonorPostController::class,'dpost'])->name('website.donor-post');
Route::post('/dstore',[DonorPostController::class,'dstore'])->name('website.dstore');

//website login
Route::get('/user/registration',[LoginController::class,'registration'])->name('user.registration');
Route::post('/user/registration/post',[LoginController::class,'registrationPost'])->name('user.registration.post');
Route::get('/user/login',[LoginController::class,'login'])->name('user.login');
Route::post('/user/do/login',[LoginController::class,'doLogin'])->name('user.do.login');
Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');




Route::group(['prefix'=>'Admin'],function(){
    Route::get('/', function () {
        return view('Admin.index');
    })->name('admin');

    Route::get('/Admin',[AdminController::class,'demo'])->name('admin.demo');
    Route::get('/Admin',[AdminController::class,'adminn'])->name('admin.adminn');
    Route::get('/contact',[AdminController::class,'contact'])->name('admin.contact');
    Route::get('/user/list',[UserController::class,'userList'])->name('admin.user.list');
    Route::get('user/view/{user_id}',[UserController::class,'userDetails'])->name('admin.user.details');
    Route::get('user/delete/{user_id}',[UserController::class,'userDelete'])->name('admin.user.delete');

    //dashboard
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
    
    //patient
    Route::get('/patient',[PatientController::class,'patient'])->name('admin.patient');
    Route::get('/patient/reg',[PatientController::class,'reg'])->name('patient.reg-patient');
    Route::post('/patient/add',[PatientController::class,'add'])->name('patient.add');

    //donor
    Route::get('/Table',[DonorController::class,'donor'])->name('admin.donor');
    Route::get('/donor/reg',[DonorController::class,'reg'])->name('donor.reg-donor');
    Route::post('/donor/add',[DonorController::class,'add'])->name('donor.add');

 

    //stock
    Route::get('/stock',[StockController::class,'stock'])->name('admin.stock');
    Route::get('/stock/addstock',[StockController::class,'addstock'])->name('admin.stock.addstock');
    Route::post('/add',[StockController::class,'add'])->name('stock.add');

    // organ
        Route::get('/category',[OrganController::class,'list'])->name('admin.category');
        Route::get('category/form',[OrganController::class,'form'])->name('category.form');
        Route::post('/category/add',[OrganController::class,'add'])->name('category.add');
});
