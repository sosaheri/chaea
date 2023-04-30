<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProviderController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/step0', function () {
    return view('step0');
})->name('step0');

Route::get('/step1', function () {
    return view('step1');
})->name('step1');

Route::get('/step2', function () {
    return view('step2');
})->name('step2');

Route::get('/step3', function () {
    return view('step3');
})->name('step3');

Route::get('/step4', function () {
    return view('step4');
})->name('step4');

Route::get('/step5', function () {
    return view('step5');
})->name('step5');

Route::get('/step6', function () {
    return view('step6');
})->name('step6');

Route::get('/step7', function () {
    return view('step7');
})->name('step7');

Route::get('/step8', function () {
    return view('step8');
})->name('step8');

Route::get('/step9', function () {
    return view('step9');
})->name('step9');

Route::get('/step10', function () {
    return view('step10');
})->name('step10');

Route::post('/form/store', [FormController::class, 'store'])->name('form.store');
Route::get('/chart/{id}', [FormController::class, 'show'])->name('chart.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/getUsers', [UserController::class, 'getUsers'])->name('getUsers');

});

require __DIR__.'/auth.php';
