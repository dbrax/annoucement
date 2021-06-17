<?php

namespace Epmnzava\Annoucement\Models;

use Illuminate\Database\Eloquent\Model;

class UserAnnoucement extends Model
{


    public $guarded = [];

    public function annoucement()
    {

        return $this->belongsTo(Annoucement::class, "annoucementid");
    }
}
