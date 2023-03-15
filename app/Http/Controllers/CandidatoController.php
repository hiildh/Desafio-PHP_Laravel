<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $candidato = Candidato::all();
        return view('candidatos.index', ['candidato' => $candidato]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        //
        return view('candidatos.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $candidato = new Candidato();
        $candidato->nome = $request->nome;
        $candidato->habilidades = $request->habilidades;
        $candidato->save();
        return redirect()->route('candidatos.index')->with('success', 'Candidato created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        //
        $candidato = Candidato::find($id);
        return view('candidatos.show', ['candidato' => $candidato]);
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
        $candidato = Candidato::find($id);
        $candidato->nome = $request->nome;
        $candidato->habilidades = $request->habilidades;
        $candidato->save();
        return redirect()->route('candidatos.index')->with('success', 'Candidato updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
