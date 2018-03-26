<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function type()
    {
        return $this->hasOne('App\PortfolioType');
    }
}
