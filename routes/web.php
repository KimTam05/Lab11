<?php

use App\Http\Controllers\KNTNhaCCController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=> 'nhacc'], function () {
    Route::get('/list',[KNTNhaCCController::class,'list'])->name('KNTNhaCC.list');
});
