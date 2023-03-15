<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
    $vagas = App\Models\Vaga::all();
    $candidatos = App\Models\Candidato::all();
    return view('welcome', ['vagas' => $vagas, 'candidatos' => $candidatos]);
});

Route::get('/candidatos', function () {
    return view('candidatos.index');
})->name('candidatos.index');

Route::post('/candidatos', function (Request $request) {
    DB::table('candidatos')->insert([
        'nome' => $request->input('nome'),
        'habilidades' => $request->input('habilidades')
    ]);
    return redirect('/');
});

Route::get('/vagas', function () {
    return view('vagas.index');
})->name('vagas.index');

Route::get('/vagas/{id}', 'VagaController@show')->name('vagas.show');
Route::get('/vagas/{id}', 'VagasController@show');

Route::get('/vagas/show', function ($id) {
    return view('show');
});

Route::post('/vagas', function (Request $request) {
    DB::table('vagas')->insert([
        'nome_vaga' => $request->input('nome_vaga'),
        'requisitos' => $request->input('requisitos')
    ]);
    return redirect('/');
});

Route::delete('/vagas/{id}', 'VagasController@destroy')->name('vagas.destroy');
Route::delete('/candidatos/{id}', 'CandidatoController@destroy')->name('candidatos.destroy');

