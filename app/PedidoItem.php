<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pedido;
use App\Produto;

class PedidoItem extends Model
{
    
    protected $table = 'pedido_items';
    
    public $fillable = [
        'id',
        'pedido_id',
        'produto_id'
    ];
    
    /**
     * Relação dos items com o pedido
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pedido(){
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }
    
    /**
     * Relação dos produtos do pedido
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne;
     */
    public function produto(){
        return $this->hasOne(Produto::class, 'produto_id');
    }
    
}
