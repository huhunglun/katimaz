<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioType extends Model
{
    public function portfolio()
    {
        return $this->belongsTo('App\Portfolio');
    }
}
