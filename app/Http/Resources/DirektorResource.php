<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Firma;

class DirektorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'direktor';
    public function toArray($request)
    {

        $firma = Firma::find($this->resource->firma_id);

        return [
            'Ime i prezime - ' => $this->resource->imeprezime,
            'Sektor - ' => $this->resource->sektor,
            'Email - ' => $this->resource->email,
            'Firma - ' => new FirmaResource($firma)
        ];
    }
}
