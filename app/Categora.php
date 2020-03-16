<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categora extends Model
{
    use SoftDeletes;
    public $fillable =['nome'];
    public $timestamps=false;// isso desativa a procura pelos campos de timestamp 

}
