<?php

namespace App\Modeles;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{


    protected $table = 'tracking';


    
    public function tracteur()
    {
        return $this->belongsTo('App\Tracteurs');
    }

}
