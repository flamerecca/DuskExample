<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertHostIsTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertHostIs()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertHostIs('127.0.0.1');
        });
    }
}
