<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    
    public $fillable = ['id', 'nome'];
    
    /**
     * Retorna os produtos da categoria
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function produtos(){
        return $this->belongsToMany('App\Produto');
    }
    
}
