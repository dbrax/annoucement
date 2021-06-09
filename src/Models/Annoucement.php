<?php

namespace Epmnzava\Annoucement\Models;

use Illuminate\Database\Eloquent\Model;

class Annoucement extends Model
{


    public $guarded = [];


    public function user()
    {

        return $this->hasMany(UserAnnoucement::class, "annoucementid");
    }
}
