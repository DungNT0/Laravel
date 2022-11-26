<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\signupController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;




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
//     return view('welcome');
// });

// Route::get('/', function (){
//     return view('sum');
// });
// Route::post('/',[CongController::class,'tinhtong']);

// Route::get('/', function (){
//     return view('signup');
// });
// Route::get('/',[signupController::class,'index']);
// Route::post('/',[signupController::class,'displayInfo']);

// Route::get('/index',[PageController::class,'getIndex']);
Route::get('/',[PageController::class, 'getIndex']);
Route::get('/type/{id}',[PageController::class, 'getProTy']);
Route::get('/product_details',[PageController::class, 'getProDe']);
Route::get('/contact',[PageController::class, 'getContact']);
Route::get('/about',[PageController::class, 'getAbout']);

Route::get('add-to-cart/{id}',[PageController::class, 'getAddToCart'])->name('themgiohang');
Route::get('del-cart/{id}',[PageController::class, 'getDelItemCart'])->name('xoagiohang');
Route::get('/admin', [PageController::class, 'getIndexAdmin']);
Route::get('/admin-add-form', [PageController::class, 'getAdminAdd'])->name('add-product');	
Route::post('/admin-add-form', [PageController::class, 'postAdminAdd']);	
Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);	
Route::get('/admin-edit', [PageController::class, 'postAdminEdit']);	
Route::post('/admin-delete/{id}', [PageController::class, 'postAdminDelete']);

Route::get('/register', function () { 
    return view('users.register');
});				
Route::post('/register', [UserController::class, 'Register']);

Route::get('/login', function(){
    return view('users.login');
});
Route::post('/login', [UserController::class, 'Login']);
Route::get('/logout', [UserController::class, 'Logout']);