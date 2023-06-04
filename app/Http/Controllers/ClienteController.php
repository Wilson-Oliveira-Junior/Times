<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        // Filtragem por final de placa
        $numeroPlaca = $request->input('placa');
        if ($numeroPlaca) {
            $clientes = Cliente::whereRaw("RIGHT(placa, 1) = ?", [$numeroPlaca])->get();
        } else {
            $clientes = Cliente::all();
        }
        
        return response()->json($clientes);
    }

    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());

        return response()->json($cliente, 201);
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);

        return response()->json($cliente);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        return response()->json($cliente);
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return response()->json(null, 204);
    }
    public function ConsultaView()
{
    return view('consulta');
}
}

