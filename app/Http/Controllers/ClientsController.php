<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Produit;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    function liste()
    {
        return response()->json(Client::all());

    }
    //http://localhost/triki/api-demo/public/api/produits/2 il faut juste mettre id  et je peux mettre 1ou 2 dans l'url
    function detail($id){
        return response()->json(Client::find($id));
    }
}
