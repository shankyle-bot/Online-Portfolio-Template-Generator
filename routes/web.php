<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;


/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');


/*
|--------------------------------------------------------------------------
| Portfolio CRUD
|--------------------------------------------------------------------------
*/

Route::get(
    '/portfolios',
    [PortfolioController::class, 'index']
)->name('portfolios.index');


Route::get(
    '/portfolios/create',
    [PortfolioController::class, 'create']
)->name('portfolios.create');


Route::post(
    '/portfolios',
    [PortfolioController::class, 'store']
)->name('portfolios.store');


Route::get(
    '/portfolios/{portfolio}',
    [PortfolioController::class, 'show']
)->name('portfolios.show');


Route::get(
    '/portfolios/{portfolio}/edit',
    [PortfolioController::class, 'edit']
)->name('portfolios.edit');


Route::put(
    '/portfolios/{portfolio}',
    [PortfolioController::class, 'update']
)->name('portfolios.update');


Route::delete(
    '/portfolios/{portfolio}',
    [PortfolioController::class, 'destroy']
)->name('portfolios.destroy');


/*
|--------------------------------------------------------------------------
| Template Selection
|--------------------------------------------------------------------------
*/

Route::get(
    '/portfolios/{portfolio}/templates',
    [PortfolioController::class, 'templates']
)->name('portfolios.templates');


Route::patch(
    '/portfolios/{portfolio}/template',
    [PortfolioController::class, 'selectTemplate']
)->name('portfolios.selectTemplate');