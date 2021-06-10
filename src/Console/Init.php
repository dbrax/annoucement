<?php

/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github:https://github.com/dbrax/annoucement
 * Email: epmnzava@gmail.com
 * 
 */

namespace Epmnzava\Annoucement\Console;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Init extends Command
{
    protected $signature = 'annoucement:init';


    protected $description = 'This command will initialize this library on your laravel application';

    public function handle()
    {
        $this->info('initiating annoucement package or library ...');

        ///  $this->info('Publishing configuration...');
        $this->call('vendor:publish', [
            '--provider' => "Epmnzava\Annoucement\AnnoucementServiceProvider"

        ]);

        Artisan::call('migrate');

        Artisan::call('annoucement:loadtypes');


    }
}
