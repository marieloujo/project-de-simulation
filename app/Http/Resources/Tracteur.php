<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Tracteur extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'modele' => $this->modele,
            'marque' => $this->marque,
            'type' => $this->type,
            'proprietaire' => $this->users_add,
            //'locataire' => $this->users_louer,
        ];
    }
}
