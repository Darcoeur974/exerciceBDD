<?php

namespace App\Http\Controllers;

use App\ClientsModel;
use App\Http\Resources\ClientsRessource;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    function index() {
        return view('accueil');
    }
}
