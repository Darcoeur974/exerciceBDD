<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjetsModel extends Model
{
    protected $table = "projets";

    protected $fillable = ["nomProjet"];

    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo(ClientsModel::class, 'id_client');
    }
}
