<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Auth\Middleware\Authorize;
use App\Http\Controllers\DeclarationController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('home');
})  ->name('home');

Route::middleware(['auth:sanctum', 'verified', 'role:fournisseur'])
    ->get('/declaration', [DeclarationController::class, 'show'])
    ->name('declaration');

Route::middleware(['auth:sanctum', 'verified', 'role:fournisseur'])->get('/importer', function () {
    return view('importer');
})  ->name('importer');

Route::middleware(['auth:sanctum', 'verified', 'role:fournisseur'])->get('/faq', function () {
    return view('faq');
})  ->name('faq');

