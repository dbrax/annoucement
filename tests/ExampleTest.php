<?php

namespace Epmnzava\Annoucement\Tests;

use Orchestra\Testbench\TestCase;
use Epmnzava\Annoucement\AnnoucementServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AnnoucementServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}