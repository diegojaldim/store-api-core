<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProdutoResource extends Resource
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
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'imagem' => $this->imagem,
            'categorias' => CategoriaResource::collection($this->whenLoaded('categorias'))
        ];
    }
}
