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

    Route::post('/publicacao/{publicacao}/like', [PublicacaoController::class, 'like'])->name('publicacao.like');
    Route::post('/publicacao/{publicacao}/deslike', [PublicacaoController::class, 'deslike'])->name('publicacao.deslike');

});


Route::get('/publicacoes', [PublicacaoController::class, 'index'])->name('publicacoes.index');


require __DIR__.'/auth.php';
