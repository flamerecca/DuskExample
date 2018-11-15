<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertCookieMissingTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertCookieMissing()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertCookieMissing('no_cookie');
        });
    }
}
