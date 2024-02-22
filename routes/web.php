<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;
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

// Route::get('/workers', function () {
//   dd('dfgdfgdfg'); //die dump
//   return 'this workers is from routes';
// });

// CRUD create-read-update-delete

Route::get('/workers', [WorkerController::class, 'index']);
Route::get('/workers/show', [WorkerController::class, 'show']);
Route::get('/workers/create', [WorkerController::class, 'create']);
Route::get('/workers/update', [WorkerController::class, 'update']);
Route::get('/workers/delete', [WorkerController::class, 'delete']);