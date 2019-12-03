<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdressesModel extends Model
{
    protected $table = "adresses";

    protected $fillable = ["adresse", "code_postal", "ville"];

    public $timestamps = false;

    public function client()
    {
        return $this->hasMany(ClientsModel::class, "id_adresse");
    }
}
