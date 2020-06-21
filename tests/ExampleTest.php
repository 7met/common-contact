<?php

namespace 7met\CommonContact\Tests;

use Orchestra\Testbench\TestCase;
use 7met\CommonContact\CommonContactServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [CommonContactServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
