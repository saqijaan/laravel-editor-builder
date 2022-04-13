<?php

use App\Http\Controllers\PageController;
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


Route::get('pages/{page}/edit', [PageController::class,'index'])->name('pages.edit');
Route::post('pages/{page}/store', [PageController::class,'store'])->name('pages.store');
Route::get('pages/templates', [PageController::class,'templates'])->name('pages.templates');