<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\OwnerController;
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

Route::get('/detail_pets', [AnimalController::class, 'detail_animals'])->name('pets.table');

Route::get('/', [OwnerController::class, 'index'])->name('home');
Route::get('/owner/{id}', [OwnerController::class, 'detail'])->name('owner.detail');
Route::get('/pet/{id}', [AnimalController::class, 'single_animal'])->name('animal.detail');
Route::put('/pet/{id}', [AnimalController::class, 'update'])->name('animal.update');

Route::get('/search', [OwnerController::class, 'search'])->name('owner.search');
Route::post('/update/{id}', [OwnerController::class, 'update'])->name('owner.update');
