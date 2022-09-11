<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentsController;


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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('', [HomeController::class, 'EmptyRoute'])->name('empty.route');

Route::prefix('/students')->group(function () {
    Route::get('/add', [StudentsController::class, 'index'])->name('students.add');
    Route::post('/store', [StudentsController::class, 'store'])->name('add.store');
    Route::get('/view', [StudentsController::class, 'view'])->name('students.view');
    Route::get('/edit', [StudentsController::class, 'edit'])->name('students.edit');
    Route::get('/{id}/delete', [StudentsController::class, 'delete'])->name('students.delete');
    Route::get('{id}/update', [StudentsController::class, 'ViewUpdate'])->name('view.update');
    Route::post('/update', [StudentsController::class, 'update'])->name('students.update');
    Route::get('/{id}/active', [StudentsController::class, 'active'])->name('student.active');
});
