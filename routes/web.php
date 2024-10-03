<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;

Route::get('/cadastro', [CadastroController::class, 'create']);
Route::post('/cadastro', [CadastroController::class, 'store']);
Route::get('/', [CadastroController::class, 'home']);
Route::get('/mostrar', [CadastroController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
