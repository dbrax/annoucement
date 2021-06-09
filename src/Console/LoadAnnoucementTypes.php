<?php

/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github:https://github.com/dbrax/annoucement
 * Email: epmnzava@gmail.com
 * 
 */

namespace Epmnzava\Annoucement\Console;

use Epmnzava\Annoucement\Models\AnnoucementType;
use Illuminate\Support\Facades\Artisan;


use Illuminate\Console\Command;

class Init extends Command
{
    protected $signature = 'annoucement:loadtypes ';


    protected $description = 'This command will load annoucement types';

    public function handle()
    {
        $this->info('loading annoucement types of the library ...');

        ///  $this->info('Publishing configuration...');


        $types = [
            "broadcast",
            "individual"
        ];

        foreach ($types as $type) {

            $annoucementtype = new AnnoucementType;
            $annoucementtype->type = $type;
            $annoucementtype->save();
        }
    }
}
