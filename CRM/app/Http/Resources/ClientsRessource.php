<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientsRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $donnee_addresse = new AdressesRessource($this->whenLoaded('adresse'));
        $donnee_contact = ContactsRessource::collection($this->whenLoaded('contacts'));
        $donnee_projet = ProjetsRessource::collection($this->whenLoaded('projets'));
        $donnee_commentaire = CommentairesClientsRessource::collection($this->whenLoaded('commentaires'));
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'adresse' => $donnee_addresse,
            'contact' => $donnee_contact,
            'projet' => $donnee_projet,
            'commentaire' => $donnee_commentaire
        ];
    }
}
