<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [ClienteController::class, 'index'])->name('client.index');
    Route::get('/clients', [ClienteController::class, 'index'])->name('client.index');
    Route::get('/clients/showAll', [ClienteController::class, 'showAll'])->name('client.showAll');
    Route::get('/clients/create', [ClienteController::class, 'create'])->name('client.create');
    Route::get('/clients/edit/{client}', [ClienteController::class, 'edit'])->name('client.edit');
    Route::resource('/clients', ClienteController::class, ['only' => ['show']]);


    Route::post('/clients/store', [ClienteController::class, 'store'])->name('client.store');
    Route::post('/clients/update/{client}', [ClienteController::class, 'update'])->name('client.update');

    Route::get('/clients/destroy/{client}', [ClienteController::class, 'destroy'])->name('client.destroy');
});
