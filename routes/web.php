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

Route::get('/', [UserController::class,'index']);

                /*/register é o nome que eu quero chamar na url*/                                   
Route::get('/register', [UserController::class, 'create']);
                                                /*create é o nome do metodo no Controller*/ 

Route::post('/register', [UserController::class, 'store']);
Route::get('/consult', [UserController::class, 'showAll']);
Route::get('/consultSingle/{id}', [UserController::class, 'showSingle']);
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::post('/edit/{id}', [UserController::class, 'update']);

Route::delete('consult/{id}', [UserController::class, 'destroy']);
