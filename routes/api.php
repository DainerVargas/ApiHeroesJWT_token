<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanionController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\SuperheroeMissionController;
use App\Http\Controllers\SuperheroesController;
use App\Http\Controllers\SuperheroeSuperpowerController;
use App\Http\Controllers\SuperpowerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamMissionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', [AuthController::class,'store']);
Route::post('login', [AuthController::class,'login']);

Route::middleware('JWT.Verify')->group(function (){

    Route::get('users', [AuthController::class,'index']);

    Route::resource('Heroes', SuperheroesController::class);

    Route::resource('Teams', TeamController::class);

    Route::resource('HeroeTeams', SuperheroesController::class);

    Route::resource('Missions', MissionController::class);

    Route::resource('TeamMissions', TeamMissionController::class);

    Route::resource('Powers', SuperpowerController::class);

    Route::resource('Companions', CompanionController::class);

    Route::resource('HeroePowers', SuperheroeSuperpowerController::class);

    Route::resource('HeroeMissions', SuperheroeMissionController::class);

    Route::post('Auth/logout', [AuthController::class,'logout']);

});
