<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class StatusResource extends Resource
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
            'nome' => $this->nome
        ];
    }
}
