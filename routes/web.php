<?php

use App\Http\Controllers\main;
use App\Http\Controllers\students;
use App\Http\Controllers\deferment;
use App\Http\Controllers\transcript;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\transcripts;
use App\Http\Controllers\userAuth;
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

Route::get('/', [main::class, 'index']);

// students
Route::get('/students/deferment/application', [students::class, 'deferment']);
Route::post('/students/deferment/apply', [deferment::class, 'applyDeferment'])->name('d.apply');

Route::get('/students/transcript/application', [students::class, 'transcript']);
Route::post('/students/transcript/apply', [transcripts::class, 'applyTranscript'])->name('t.apply');


Route::post('/login', [userAuth::class, 'login'])->name('login');
