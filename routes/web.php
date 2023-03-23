<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerzoekController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentController;

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

Route::get('/', [Controller::class, 'index']);

Route::get('/verzoeken', [VerzoekController::class, 'index']);
Route::get('/verzoek/{verzoek}', [VerzoekController::class, 'view']);
Route::get('/verzoeksturen', [VerzoekController::class, 'sturen']);
Route::post('/verzoeken/submit', [VerzoekController::class, 'store']);

Route::get('/login', [StudentController::class, 'login']);
Route::get('/registratie', [StudentController::class, 'register']);
Route::get('/studenten', [StudentController::class, 'view']);

Route::post('/student/register', [StudentController::class, 'store']);
Route::post('/student/login', [StudentController::class, 'loggingin']);

Route::get('/contact', [Controller::class, 'contact']);