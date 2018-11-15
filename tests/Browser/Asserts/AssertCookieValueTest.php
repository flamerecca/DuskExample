<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertCookieValueTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertCookieValue()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/test/cookie')
                    ->assertCookieValue('test_cookie', 'hi');
        });
    }
}
