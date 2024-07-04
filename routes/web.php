<?php

use App\Http\Controllers\AnimaisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicial');
}) ->name('index');

Route:: get('/animais', [AnimaisController::class, 'index']) ->name('animais');


Route:: get('/animais/cadastrar', [AnimaisController::class, 'cadastrar'])->name('animais.cadastrar');


Route:: post('/animais/cadastrar', [AnimaisController::class, 'gravar'])->name('animais.gravar');

Route:: get('/animais/apagar/{animal}', [AnimaisController::class, 'apagar'])->name('animais.apagar');

Route:: delete('/animais/apagar/{animal}', [AnimaisController::class, 'deletar']);

Route::get('/animais/editar/{animal}', [AnimaisController::class, 'editar'])->name('animais.editar');

Route::put('/animais/editar/{animal}', [AnimaisController::class, 'editarGravar']);


Route:: get('/usuarios', [UsuarioController::class, 'index']) ->name('usuario');


Route:: get('/usuario/cadastrar', [UsuarioController::class, 'cadastrar'])->name('usuario.cadastrar');

Route:: post('/usuario/cadastrar', [UsuarioController::class, 'gravar'])->name('usuario.gravar');

Route:: get('/usuario/apagar/{usuario}', [UsuarioController::class, 'apagar'])->name('usuario.apagar');

Route:: delete('/usuario/apagar/{usuario}', [UsuarioController::class, 'deletar']);

Route::get('/usuario/editar/{usuario}', [UsuarioController::class, 'editar'])->name('usuario.editar');

Route::put('/usuario/editar/{usuario}', [UsuarioController::class, 'editarGravar']);


