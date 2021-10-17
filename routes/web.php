<?php

use App\Http\Controllers\vistasdeinmo;
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

/*Route::get('/', function () {
    return view('home1');
});*/

Route::get('/',[vistasdeinmo::class,'vista1']);
Route::get('/about.php',[vistasdeinmo::class,'vista2']);
Route::get('/agents.php',[vistasdeinmo::class,'vista3']);
Route::get('/blog.php',[vistasdeinmo::class,'vista4']);
Route::get('/contact.php',[vistasdeinmo::class,'vista5']);
Route::get('/buysalerent.php',[vistasdeinmo::class,'vista6']);
Route::get('/property-detail.php',[vistasdeinmo::class,'vista7']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
