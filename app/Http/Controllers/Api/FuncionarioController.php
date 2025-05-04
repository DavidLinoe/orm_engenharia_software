<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        return response()->json(Funcionario::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email|unique:funcionarios,email',
            'cargo' => 'required|string',
            'departamento_id' => 'required|exists:departamentos,id'
        ]);

        $funcionario = Funcionario::create($request->all());

        return response()->json($funcionario, 201);
    }

    public function show($id)
    {
        $funcionario = Funcionario::find($id);

        if (!$funcionario) {
            return response()->json(['message' => 'Funcionario não encontrado'], 404);
        }

        return response()->json($funcionario, 200);
    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::find($id);

        if (!$funcionario) {
            return response()->json(['message' => 'Funcionario não encontrado'], 404);
        }

        $funcionario->update($request->all());

        return response()->json($funcionario, 200);
    }

    public function destroy($id)
    {
        $funcionario = Funcionario::find($id);

        if (!$funcionario) {
            return response()->json(['message' => 'Funcionario não encontrado'], 404);
        }

        $funcionario->delete();

        return response()->json(['message' => 'Funcionario deletado com sucesso'], 200);
    }

    public function departamento($id)
    {
        $funcionario = Funcionario::find($id);

        if (!$funcionario) {
            return response()->json(['message' => 'Funcionario não encontrado'], 404);
        }

        return response()->json($funcionario->departamento, 200);
    }
}
