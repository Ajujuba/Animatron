<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anime extends Model
{

    use SoftDeletes;
   
    public $fillable = ['nome','qtd_temp', 'sinopse', 'criadores_id']; // declara quais colunas do bd vamos usar/trabalhar
    public function criadores(){ 
        return $this->belongsTo(\App\Criadores::class); // belongsTo - como se fosse 1
        
    }
}
