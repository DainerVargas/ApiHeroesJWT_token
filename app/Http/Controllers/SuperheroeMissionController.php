<?php

namespace App\Http\Controllers;

use App\Models\SuperheroeMission;
use Illuminate\Http\Request;

class SuperheroeMissionController extends Controller
{
    public function index()
    {
        $superheroes = SuperheroeMission::all();
        return response()->json($superheroes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "superheroe_id"=> "required",
            "mission_id" => "required",
        ]) ;

        if ($validate) {
            $superheroes = SuperheroeMission::create($request->all());
            return response()->json($superheroes);
        }else{
            return response()->json(["message"=> "No guardado"]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superheroes = SuperheroeMission::findOrFail($id);

        if ($superheroes) {
            return response()->json([
                'message' => 'ok',
                'data' => $superheroes
            ],200);
        }else{
            return response()->json(['message' => 'Not found'],401);
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $superheroes = SuperheroeMission::findOrFail($id);
        $superheroes->update($request->all());
        if ($superheroes) {
            return response()->json([$superheroes],200);
        }else{
            return response()->json(['message'=> 'No actulizado'],401);
        }

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $superheroes = SuperheroeMission::findOrFail($id);
        $superheroes->delete();
        return response()->json(['message'=> 'Eliminado'],200);
    }
}
