<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\Translateable;

class Portfolio extends Model
{
    use Translateable;

    protected $fillable = ['published', 'image', 'started', 'finished'];

    public function translation($language = null)
    {
        if ($language == null){
            $language = App::getLocale();
        }
        return $this->hasMany('App\PortfolioTranslation')->where('language', '=', $language);
    }
}
