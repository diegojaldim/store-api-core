<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Status;
use App\PedidoItem;

class Pedido extends Model
{
    
    protected $table = 'pedidos';
    
    public $fillable = [
        'id',
        'user_id',
        'status_id',
        'endereco_entrega'
    ];
    
    /**
     * Relação de usuários com os pedidos
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
       return $this->belongsTo(User::class, 'user_id'); 
    }
    
    /**
     * Relação do status do pedido com a tabela de status
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo;
     */
    public function status(){
        return $this->belongsTo(Status::class, 'status_id');
    }
    
    /**
     * Relação dos itens do pedido
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items(){
        return $this->hasMany(PedidoItem::class);
    }
    
}
