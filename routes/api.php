<?php

use App\Http\Controllers\ClientsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\CommandesController;
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
Route::get('/produits', [ProduitsController::class, "liste"]);
Route::get('/produits/{id}', [ProduitsController::class, "detail"]);
Route::post('/ajoutcommande', [CommandesController::class, "ajoutercommande"]);

Route::get('/clients', [ClientsController::class, "liste"]);
Route::get('/clients/{id}', [ClientsController::class, "detail"]);




Route::get('/commande/{id}', [CommandesController::class, "commandesClient"]);

Route::delete('/commande/{idCommande}', [CommandesController::class, "supprimerCommande"]);

