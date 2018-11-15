<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertPlainCookieValueTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertPlainCookieValue()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/test/cookie')
                ->assertPlainCookieValue('plain_cookie', 'plain_hi');
        });
    }
}
