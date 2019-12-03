<?php

namespace App\Http\Controllers;

use App\AdressesModel;
use App\ClientsModel;
use App\ContactsModel;
use App\Http\Resources\ClientsRessource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{
    function index()
    {
        $donnees = ClientsModel::with([
            'contacts',
            'adresse',
            'projets',
            'commentaires' => function($q){
                $q->with('type');
            }
        ])
        ->orderBy('id')
        ->get();

        return ClientsRessource::collection($donnees);
    }

    function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|max:255', // table client
            'adresse' => 'required|max:255', // table adresse
            'code_postal' => 'required|max:255',
            'ville' => 'required|max:255',
            'nomEntreprise' => 'required|max:255', // table contact
            'prenom' => 'required|max:255',
            'tel' => 'required|numeric',
            'email' => 'required|max:255',
            'poste' => 'required|max:255',
        ])->validate();


        $adresse = [
            'adresse' => $validator['adresse'],
            'code_postal' => $validator['code_postal'],
            'ville' => $validator['ville']
        ];
        $client = [
            'nom' => $validator['nom']
        ];
        $contact = [
            'nomEntreprise' => $validator['nomEntreprise'],
            'prenom' => $validator['prenom'],
            'tel' => $validator['tel'],
            'email' => $validator['email'],
            'poste' => $validator['poste']
        ];

        DB::transaction(function ()  use ($adresse, $client, $contact) {
            $adresseRetour = AdressesModel::create($adresse);
            $clientRetour = $adresseRetour->client()->create($client);
            $contactRetour = $clientRetour->contacts()->create($contact);
        });

        return json_encode($validator);
    }
}
