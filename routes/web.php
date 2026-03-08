<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartenaireController;

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
    return view('index');
});

Route::get('/partenaire', function () {
    return view('partenaire');
});
Route::get('/partenaire', function () {
    return view('partenaire');
})->name('partenaire.form');

Route::post('/partenaire', [PartenaireController::class, 'send'])
     ->name('partenaire.send');

//      Route::get('/apropos', function () {
//     return view('apropos');
// });
