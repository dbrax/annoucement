<?php

namespace Epmnzava\Annoucement;

class Annoucement
{


    public function create_annoucement($title, $message, $type, $to = null, $queryRule = null)
    {

        if (config("annoucement.individual_annoucement_tag") == $type) {

            $this->createIndividualAnnoucement($title, $message, $type, $to);
        } else {

            if (config("annoucement.withQueryRule"))
                $this->createBroadCastAnnoucement($title, $message, $type, $queryRule);
            else
                $this->createBroadCastAnnoucement($title, $message, $type);
        }
    }


    public function createIndividualAnnoucement($title, $message, $type, $to)
    {
    }

    public function createBroadCastAnnoucement($title, $message, $type, $query = null)
    {
    }
}
