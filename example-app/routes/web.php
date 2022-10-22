<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;


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

Route::get('/', function (){
    return view('signup');
});
Route::get('/',[signupController::class,'index']);
Route::post('/',[signupController::class,'displayInfo']);