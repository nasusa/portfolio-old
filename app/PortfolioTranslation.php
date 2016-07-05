<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioTranslation extends Model
{
    protected $fillable = ['language', 'title', 'description', 'content', 'portfolio_id'];

    public function portfolio()
    {
        return $this->belongsTo('App\Portfolio');
    }
}
