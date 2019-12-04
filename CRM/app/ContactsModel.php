<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactsModel extends Model
{
    protected $table = "contacts";

    protected $fillable = ["nom", "prenom", "tel", "email", "poste"];

    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo(ClientsModel::class, 'id_client');
    }
}
