<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Evento;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = \App\Models\Evento::all();

        return view('/', compact('eventos'));


        // return dd($eventos);
    }

    public function show($id)
    {
        return 'DESCRIÇÃO: '.$id;//Evento::with(['administrador', 'faixaEtaria'])->findOrFail($id);
    }

    public function store(Request $request)
    {
        return Evento::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $evento = Evento::findOrFail($id);
        $evento->update($request->all());
        return $evento;
    }

    public function destroy($id)
    {
        return Evento::destroy($id);
    }
}
