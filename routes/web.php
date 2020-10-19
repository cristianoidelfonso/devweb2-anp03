<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('admin.layout.template.index');
});

Route::get('/contato', function(){
    return view('admin.layout.contato');
})->name('contato');

Route::get('/sobre', function(){
    return view('admin.layout.sobre');
})->name('sobre');

// Route::resource('/cursos', CursoController::class);

Route::resources([

    'alunos' => AlunoController::class,
    'professores' => ProfessorController::class,
    'cursos' => CursoController::class,
    'matriculas' => MatriculaController::class,
]);
