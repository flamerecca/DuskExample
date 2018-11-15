<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertSchemeIsTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertSchemeIs()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSchemeIs('http');
        });
    }
}
