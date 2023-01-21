<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FirmaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Naziv - ' => $this->resource->naziv,
            'Adresa - ' => $this->resource->adresa,
            'Grad - ' => $this->resource->grad,
            'Država - ' => $this->resource->drzava,
        ];
    }
}
