<?php

namespace App\Http\Resources;

use App\Models\Niveau;

use Illuminate\Http\Resources\Json\JsonResource;

class listeResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $niveau = Niveau::find($this->niveau_id);
        return [
            'id' => $this->id,
            'img' => $this->img,
            'ecole' => $this->ecole_id,
            'niveau' => $niveau->classe,
        ];
    }
}
