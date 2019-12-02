<?php

namespace App\Http\Controllers;

use App\AdressesModel;
use App\ClientsModel;
use App\ContactsModel;
use App\Http\Resources\ClientsRessource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{
    function index()
    {
        $donnees = ClientsModel::with([
            'contacts' ,'adresse'
        ])
        ->orderBy('id', 'desc')
        ->get();

        return ClientsRessource::collection($donnees);
    }

    function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|max:255',
            'adresse' => 'required|max:255',
            'code_postal' => 'required|max:255',
            'ville' => 'required|max:255',
            'nomEntreprise' => 'required|max:255',
            'prenom' => 'required|max:255',
            'tel' => 'required|max:255',
            'email' => 'required|max:255',
            'poste' => 'required|max:255',
        ])->validate();

        //array clients
            $arrayClient = [
                'nom' => $validator['nomEntreprise']
            ];
        //
            $arrayAdresse = [
                'adresse' => $validator['adresse'], 
                'code_postal' => $validator['code_postal'], 
                'ville' => $validator['ville']
            ];

            $arrayContact = [
                'nomEntreprise' => $validator['nom'], 
                'prenom' => $validator['prenom'], 
                'tel' => $validator['tel'], 
                'email' => $validator['email'], 
                'poste' => $validator['poste']
            ];

            $insertionAdresse = AdressesModel::create(
                $arrayAdresse
            );
            $insertionClient = ClientsModel::create(
                $arrayClient
            );
            $insertionContact = ContactsModel::create(
                $arrayContact
            );

        return json_encode($validator);
    }
}
