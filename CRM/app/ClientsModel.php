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
        return $this->belongsTo(AdressesModel::class, "id_adresse");
    }
    public function contacts()
    {
        return $this->hasMany(ContactsModel::class, 'id_client');
    }
    public function commentaires()
    {
        return $this->hasMany(CommentairesClientsModel::class, 'id_client');
    }
    public function projets()
    {
        return $this->hasMany(ProjetsModel::class, 'id_client');
    }
}
