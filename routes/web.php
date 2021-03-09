<?php

use App\Http\Controllers\VideoController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/video/store', [App\Http\Controllers\VideoController::class, 'store'])->name('saveVid');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->name('profile');
Route::get('/delete/{id}', [App\Http\Controllers\VideoController::class, 'delete'])->name('delete/');
Route::post('/edited', [App\Http\Controllers\VideoController::class, 'edit'])->name('edited');
Route::get('/edit/{id}', [App\Http\Controllers\VideoController::class, 'show4edit'])->name('edit/');
Route::get('/video/video-page', function (){
    return view('video-page');
})->name('videoPage');
Route::get('/video/add', function (){
    return view('video');
})->name('addVideo');
Route::resources(['video'=>VideoController::class]);
