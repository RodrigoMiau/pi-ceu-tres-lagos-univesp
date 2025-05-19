<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index()
    {
        return Administrador::all();
    }

    public function show($id)
    {
        return Administrador::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Administrador::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $administrador = Administrador::findOrFail($id);
        $administrador->update($request->all());
        return $administrador;
    }

    public function destroy($id)
    {
        return Administrador::destroy($id);
    }
}
