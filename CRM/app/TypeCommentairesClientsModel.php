<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCommentairesClientsModel extends Model
{
    protected $table = "type_commentaires_clients";

    protected $fillable = ["type"];

    public $timestamps = false;

    public function commentaires()
    {
        return $this->hasMany(CommentairesClientsModel::class, "id_type_commentaires");
    }
}
