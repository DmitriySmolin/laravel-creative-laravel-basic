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

Route::get('/workers', [WorkerController::class, 'index'])->name('worker.index');
Route::get('/workers/show/{worker?}', [WorkerController::class, 'show'])->name('worker.show');
Route::post('/workers', [WorkerController::class, 'store'])->name('worker.store');
Route::get('/workers/create', [WorkerController::class, 'create'])->name('worker.create');
Route::get('/workers/edit/{worker?}', [WorkerController::class, 'edit'])->name('worker.edit');
Route::patch('/workers/update/{worker?}', [WorkerController::class, 'update'])->name('worker.update');
Route::delete('/workers/delete/{worker?}', [WorkerController::class, 'delete'])->name('worker.delete');

