<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertHasCookieTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertHasCookie()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/welcome')
                    ->assertHasCookie('laravel_session')
                    ->assertHasCookie('XSRF-TOKEN');
        });
    }
}
