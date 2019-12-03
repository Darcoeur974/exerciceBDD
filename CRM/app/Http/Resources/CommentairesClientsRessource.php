<?php

namespace App\Http\Resources;

use App\CommentairesCLientsModel;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentairesClientsRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $donnee_type = new TypeCommentairesClientsRessource($this->whenLoaded('type'));
        $donnee_client = new ClientsRessource($this->whenLoaded('client'));
        return [
            'id' => $this->id,
            'commentaire' => $this->commentaire,
            'client' => $donnee_client,
            'type' => $donnee_type
        ];
    }
}
