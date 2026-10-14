
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
| Everyone can view the home page.
*/

Route::get('/', function () {
    return view('home');
})->name('home');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
| Only guests can access login and registration.
*/

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.store');

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.store');
});

/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
| Only authenticated users can log out.
*/

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Protected Portfolio Routes
|--------------------------------------------------------------------------
| Users must log in before accessing portfolio features.
*/

Route::middleware('auth')->group(function () {
    Route::get('/portfolios', [PortfolioController::class, 'index'])
        ->name('portfolios.index');

    Route::get('/portfolios/create', [PortfolioController::class, 'create'])
        ->name('portfolios.create');

    Route::post('/portfolios', [PortfolioController::class, 'store'])
        ->name('portfolios.store');

    Route::get('/portfolios/{portfolio}', [PortfolioController::class, 'show'])
        ->name('portfolios.show');

    Route::get('/portfolios/{portfolio}/edit', [PortfolioController::class, 'edit'])
        ->name('portfolios.edit');

    Route::put('/portfolios/{portfolio}', [PortfolioController::class, 'update'])
        ->name('portfolios.update');

    Route::delete('/portfolios/{portfolio}', [PortfolioController::class, 'destroy'])
        ->name('portfolios.destroy');

    Route::get('/portfolios/{portfolio}/templates', [PortfolioController::class, 'templates'])
        ->name('portfolios.templates');

    Route::patch('/portfolios/{portfolio}/template', [PortfolioController::class, 'selectTemplate'])
        ->name('portfolios.selectTemplate');
});
