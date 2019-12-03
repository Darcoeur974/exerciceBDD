<?php

namespace App\Http\Controllers;

use App\ProjetsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = ProjetsModel::all();
        return $projets;
    }
    public function getByClients($id)
    {
        $donnee = ProjetsModel::whereHas('client', function ($q) use ($id)
        {
            $q->where('id', $id);

        })->get();

        return $donnee;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nomProjet' => 'required|max:255',
            'commentaire' => 'required'
        ])->validate();

        $projet = [
            'nom' => $validator['nom'],
            'id_client' => $id
        ];
        $commentaire = [
            'commentaire' => $validator['commentaire']
        ];

        return json_encode($validator);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
