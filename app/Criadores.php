<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Criadores extends Model
{
    use SoftDeletes;
    public $fillable = ['nome'];
     public $timestamps=false; // isso desativa a procura pelos campos de timestamp 
     public function animes()
     {
         return $this->hasMany(\App\Anime::class); // hasmany - muitos
         
     }
    
}
