<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    function ajoutercommande(Request $request)
    {
        $commande = new Commande();
        $commande->id_client = $request-> id_client;
        $commande->id_produit = $request-> id_produit;
        $commande->quantite = $request-> quantite;
        $commande->date = $request-> date;

        $commande->save();

        return response()->json(['status' => "Commande ajoutée", 'data' => $commande]);
    }

}
