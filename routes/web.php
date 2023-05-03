<?php

use App\Http\Controllers\teste\testecontroller;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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



Route::prefix('/grupos')->group(function () {
    Route::get('/teste/{id?}', [testecontroller::class, 'test'])->name('testView')->where(['id' => '[0-9]+']);
    Route::get('/redirect', [testecontroller::class, 'test'])->name('redi');
});

Route::redirect('/rota','/grupos/redirect');
