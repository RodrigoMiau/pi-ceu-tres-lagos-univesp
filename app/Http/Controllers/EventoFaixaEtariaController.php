<?php

namespace App\Http\Controllers;

use App\Models\EventoFaixaEtaria;
use Illuminate\Http\Request;

class EventoFaixaEtariaController extends Controller
{
    public function index()
    {
        return EventoFaixaEtaria::all();
    }

    public function show($id)
    {
        return EventoFaixaEtaria::findOrFail($id);
    }

    public function store(Request $request)
    {
        return EventoFaixaEtaria::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $faixa = EventoFaixaEtaria::findOrFail($id);
        $faixa->update($request->all());
        return $faixa;
    }

    public function destroy($id)
    {
        return EventoFaixaEtaria::destroy($id);
    }
}
