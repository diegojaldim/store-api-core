<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Produto;

class PedidoItemResource extends Resource
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
            'pedido_id' => $this->pedido_id,
            'produto' => new ProdutoResource(Produto::find($this->produto_id))
        ];
    }
}
