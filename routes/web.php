<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addproject', [ProjectController::class, 'index']);
Route::post('/submitproject', [ProjectController::class, 'store']);

// viewprojects
Route::get('/viewprojects', [ProjectController::class, 'show']);
Route::delete('/viewprojects/{id}', ['as' => 'viewprojects.destroy', 'uses' => 'ProjectController@destroy', 'middleware' => ['auth']]);
