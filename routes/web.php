<?php
use App\Http\Controllers\UserController;

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
//     //
// })->name('home');
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/login', 'App\Http\Controllers\PageController@getLogin')->middleware('App\Http\Middleware\AdminLoginMiddleware'); 
    
Route::get('/login/employee_dashboard',function(){
    return view('employee_dashboard');
});
Route::post('/login/employee_dashboard', 'App\Http\Controllers\PageController@postlogin');
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
 });
Route::get('/login/employee_profile', function(){
    return view('employee_profile');
});


Route::post('/register/admin','App\Http\Controllers\PageController@postregister');

