<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    //por padrao o laravel reconhece que nossa tabela se chama produtos 
    // declarando a class Produto ele reconhe que é minusculo e no plural
    public $timestamps = false;

    protected $fillable = array('nome', 'descricao', 'quantidade','tamanho', 'valor','categoria_id');
    

    public function categoria(){
       return $this->belongsTo('App\Categoria');
    }
}

