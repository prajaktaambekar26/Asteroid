<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AstroidController;


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

Route::get('/', [AstroidController::class, 'getneo'])->name('datepickerpg');

Route::post('/collectdate', [AstroidController::class, 'collectdate'])->name('collectdate');

Route::get('/getapidata', [AstroidController::class, 'getapidata'])->name('getapidata');


