<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;

class VagasController extends Controller{
    /**
     * Display a listing of the resource.
     */

    public function index(){
        $vagas = Vaga::all();
        return view('vagas.index')->with('vagas', $vagas);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        //
        $vaga = new Vaga();
        $vaga->nome_vaga = $request->titulo_vaga;
        $vaga->requisito = $request->requisitos;
        $vaga->save();
        return redirect()->route('vagas.index')->with('success', 'Vaga created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        //
        $vaga = Vaga::find($id);
        return view('vagas.show', ['vaga' => $vaga]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        //
        $vaga = Vaga::find($id);
        $vaga->nome_vaga = $request->titulo_vaga;
        $vaga->requisito = $request->requisitos;
        $vaga->save();
        return redirect()->route('vagas.index')->with('success', 'Vaga updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        $vaga = Vaga::find($id);
        $vaga->delete();
        return redirect()->route('vagas.index');
    }

    public function vagasDisponiveis(){
        $vagas = Vaga::with('candidatos')->get();
        return view('vagas_disponiveis', compact('vagas'));
    }

}
