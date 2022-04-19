<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Http\Middleware\AdminProtected;

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
Route::get('/logout', function (Request $request) {
    $request->session('userid')->flush();
    return redirect('/login');
 });
 Route::post('/validate_login', [AuthController::class,'index']);
 Route::group(['middleware'=>['AdminProtected']],function()
 {
    Route::get('/admin/dashboard', [AdminController::class,'Dashboard']);
 });

 Route::get('/', function () 
 {
   return redirect('/login');
 });

 Route::get('/login', function () {
     return view('login');
 });

