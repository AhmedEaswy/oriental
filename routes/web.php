<?php

use App\Http\Controllers\FrontendController;
use App\Models\Project;
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


Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/switch_lang', [FrontendController::class, 'switch_lang'])->name('switch_lang');
Route::post('/contact', [FrontendController::class, 'contactStore'])->name('contactStore');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
