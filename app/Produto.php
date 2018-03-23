<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
   
    protected $table = 'produtos';
    
    public $fillable = [
        'nome',
        'descricao',
        'preco',
        'imagem'
    ];
    
    /**
     * Categorias dos produtos
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categorias(){
        return $this->belongsToMany('App\Categoria');
    }
    
}
