<?php

namespace Epmnzava\Annoucement;

use Epmnzava\Annoucement\Models\Annoucement as AnnoucementModel;
use Epmnzava\Annoucement\Models\UserAnnoucement;

class Annoucement extends UserQueries
{

          
    public function create_annoucement($title, $message, $type, $userid = null, $users = null)
    {

        if (config("annoucement.individual_annoucement_tag") == $type) {

            $res = $this->createIndividualAnnoucement($title, $message, $type, $userid);
        } else {

            $res = $this->createBroadCastAnnoucement($title, $message, $type, $users);
        }


        return $res;
    }


    public function createIndividualAnnoucement($title, $message, $type, $userid)
    {
        $annoucement = AnnoucementModel::create([
            "title" => $title,
            "message" => $message,
            "annoucementtype" => $type,


        ]);


        $userannoucement = UserAnnoucement::create([
            "annoucementid" => $annoucement->id,
            "userid" => $userid
        ]);


        return ["status" => 1, "message" => "Annoucement Created Successfully"];
    }

    public function createBroadCastAnnoucement($title, $message, $type, $users = null)
    {
        $annoucement = AnnoucementModel::create([
            "title" => $title,
            "message" => $message,
            "annoucementtype" => $type,


        ]);


        foreach ($users as $user) {
            $userannoucement = UserAnnoucement::create([
                "annoucementid" => $annoucement->id,
                "userid" => $user->id
            ]);
        }


        return ["status" => 1, "message" => "Annoucement Created Successfully"];
    }
}
