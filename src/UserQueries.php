<?php

namespace Epmnzava\Annoucement;

use Epmnzava\Annoucement\Models\Annoucement;
use Epmnzava\Annoucement\Models\UserAnnoucement;

class UserQueries{

    public function __construct()
    {
        
    }

    public function TotalUserAnnoucements($userid){

        return UserAnnoucement::where("userid",$userid)->count();
    }

    public function TotalUnreadUserAnnoucements($userid){

        return UserAnnoucement::where("userid",$userid)->where("read",0)->count();
    }


    public function TotalreadUserAnnoucements($userid){

        return UserAnnoucement::where("userid",$userid)->where("read",1)->count();
    }


    public function getAllUserAnnoucements($userid){

        return UserAnnoucement::where("userid",$userid)->get();
    }


    public function getUnreadUserAnnoucements($userid){

        return UserAnnoucement::where("userid",$userid)->where("read",0)->get();
    }


    public function getreadUserAnnoucements($userid){

        return UserAnnoucement::where("userid",$userid)->where("read",1)->get();
    }
}