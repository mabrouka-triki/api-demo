<?php

namespace App\Http\Controllers;

use App\Models\Client;
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
//http://localhost/triki/api-demo/public/api/commande/5
    function commandesClient($idClient){
        return response()->json(Commande::where('id_client', $idClient)->with('produit')->get());
    }



    public function supprimerCommande($idCommande)
    {
// Recherche de la commande par son ID
        $commande = Commande::find($idCommande);

        if (!$commande) {
            return response()->json(['status' => 'Commande introuvable'], 404);
        }
// Suppression de la commande
        $commande->delete();

        return response()->json(['status' => 'Commande supprimée']);

    }

}
