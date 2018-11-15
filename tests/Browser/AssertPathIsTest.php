<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertPathIsTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertPathIs()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/welcome')
                    ->assertPathIs('/welcome');
        });
    }
}
