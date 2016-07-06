<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;

class Portfolio extends Model
{
    use Translateable;

    public $translatedAttributes = ['name', 'text'];

    
}
