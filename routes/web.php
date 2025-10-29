<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PublicacaoController;

Route::get('/', [PublicacaoController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('empresas', EmpresaController::class);
    Route::resource('publicacoes', PublicacaoController::class);

    Route::post('/publicacao/{id}/like', [PublicacaoController::class, 'like'])->name('like')->middleware('auth');
    Route::post('/publicacao/{id}/dislike', [PublicacaoController::class, 'dislike'])->name('dislike')->middleware('auth');
    
});

Route::get('/publicacoes', [PublicacaoController::class, 'index'])->name('publicacoes.index');


require __DIR__.'/auth.php';
