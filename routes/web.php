<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/page/{mapage}', function ($mapage)
{
    return view('pages.'.$mapage);
});

Route::post('eleves', [App\Http\Controllers\ElevesController::class, 'save']);
Route::post('profs', [App\Http\Controllers\EnseignantsController::class, 'save']);
Route::post('evaluations', [App\Http\Controllers\EvaluationsController::class, 'save']);
Route::post('cours', [App\Http\Controllers\CoursController::class, 'save']);
Route::post('discipline', [App\Http\Controllers\DisciplinesController::class, 'save']);
Route::post('emploi', [App\Http\Controllers\EmploisController::class, 'save']);
Route::post('niveau', [App\Http\Controllers\NiveausController::class, 'save']);
Route::delete('/profs/{id}', [App\Http\Controllers\EnseignantsController::class, 'delete']);
Route::delete('/eleves/{id}', [App\Http\Controllers\ElevesController::class, 'delete']);
Route::delete('evaluations/{id}', [App\Http\Controllers\EvaluationsController::class, 'delete']);
Route::delete('discipline/{id}', [App\Http\Controllers\DisciplinesController::class, 'delete']);