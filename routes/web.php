<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VocabularController;
use App\Http\Controllers\DictionaryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [VocabularController::class, 'showAllWords']);
Route::get('/', [DictionaryController::class, 'index']);
// Route::get('/vocabular',function(){
//     return 'vocabular will be here';
// });