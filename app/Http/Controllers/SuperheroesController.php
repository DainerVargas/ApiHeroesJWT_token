<?php

namespace App\Http\Controllers;

use App\Models\Superheroe;
use Illuminate\Http\Request;

class SuperheroesController extends Controller
{
    public function index()
    {
        $superheroes = Superheroe::all();
        return response()->json([$superheroes],200);
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validate = $request->validate([
            "name" => "required|unique:superheroes,name",
            "year" => "required",
            "planetOrigin" => "required",
        ], [
            "required" => "Este campo es requerido",
            "unique" => "Este nombre ya existe",
        ]);

        if ($validate) {
            $superheroes = new Superheroe();
            $superheroes->name = $request->name;
            $superheroes->year = $request->year;
            $superheroes->planetOrigin = $request->planetOrigin;
            $superheroes->save();


            return response()->json(
                [
                    "data" =>   $superheroes,
                ],
                200
            );
        }
        return json_encode(["message" => "No guardado"], 400);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superheroes = Superheroe::findOrFail($id);

        if ($superheroes) {
            return response()->json([
                'message' => 'ok',
                'data' => $superheroes
            ], 200);
        } else {
            return json_encode(['message' => 'Not found'], 401);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $superheroes = Superheroe::findOrFail($id);
        $superheroes->update($request->all());
        if ($superheroes) {
            return response()->json([$superheroes], 200);
        } else {
            return json_encode(['message' => 'No actulizado'], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $superheroes = Superheroe::findOrFail($id);
        if ($superheroes) {
            $superheroes->delete();
            return json_encode(['message' => 'Eliminado'], 200);
        }
        return json_encode(['message' => 'No encontrado'], 401);
    }
}
