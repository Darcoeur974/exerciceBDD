<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsModel extends Model
{
    protected $table = "clients";
    protected $fillable = ["nom"];

    public $timestamps = false;

    public function adresse()
    {
        return $this->belongsTo('App\AdressesModel', "id_adresse");
    }
    public function contacts()
    {
        return $this->hasMany('App\ContactsModel', 'id_client');
    }
}
