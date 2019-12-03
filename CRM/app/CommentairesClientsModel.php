<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentairesClientsModel extends Model
{
    protected $table = "commentaires_clients";
    protected $fillable = ["commentaire"];

    public $timestamps = false;

    public function type()
    {
        return $this->belongsTo(TypeCommentairesClientsModel::class, "id_type_commentaires");
    }
    public function client()
    {
        return $this->belongsTo(ClientsModel::class, 'id_client');
    }
}
