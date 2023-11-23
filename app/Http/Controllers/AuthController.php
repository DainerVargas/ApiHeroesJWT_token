<?php

namespace App\Http\Controllers;

use App\Models\User;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return response()->json([$user], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json([
            "data"=>$user,
            "token"=> $token,
        ], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::where('email' , $request->email)->first();
            try {
                $token = JWTAuth::fromUser($user);
                return response()->json([
                    'data' => $user,
                    'token' => $token
                ], 200);
            } catch (Error $error) {

                return response()->json([
                    'message' => $error->getMessage()
                ], 401);
            }
        }else{
            return response()->json([
                'message'=> 'no identificado'
            ]);
        }
    }
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            "message" => "Session eliminada correctamente",
            "status" => 200
        ], 200);
    }

}
