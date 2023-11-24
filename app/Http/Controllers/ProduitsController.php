<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers;
class ProduitsController extends Controller
{
    function liste()
    {
        return response()->json(Produit::all());

    }
    //http://localhost/triki/api-demo/public/api/produits/2 il faut juste mettre id  et je peux mettre 1ou 2 dans l'url
    function detail($id){
        return response()->json(Produit::find($id));
    }
}
