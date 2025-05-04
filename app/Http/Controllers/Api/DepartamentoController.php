<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        return response()->json(Departamento::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|unique:departamentos,nome'
        ]);

        $departamento = Departamento::create($request->all());

        return response()->json($departamento, 201);
    }

    public function show($id)
    {
        $departamento = Departamento::find($id);

        if (!$departamento) {
            return response()->json(['message' => 'Departamento não encontrado'], 404);
        }

        return response()->json($departamento, 200);
    }

    public function update(Request $request, $id)
    {
        $departamento = Departamento::find($id);

        if (!$departamento) {
            return response()->json(['message' => 'Departamento não encontrado'], 404);
        }

        $departamento->update($request->all());

        return response()->json($departamento, 200);
    }

    public function destroy($id)
    {
        $departamento = Departamento::find($id);

        if (!$departamento) {
            return response()->json(['message' => 'Departamento não encontrado'], 404);
        }

        $departamento->delete();

        return response()->json(['message' => 'Departamento deletado com sucesso'], 200);
    }

    public function funcionariosDeDepartamento($id)
    {
        $departamento = Departamento::find($id);

        if (!$departamento) {
            return response()->json(['message' => 'Departamento não encontrado'], 404);
        }

        return response()->json($departamento->funcionarios, 200);
    }
}
