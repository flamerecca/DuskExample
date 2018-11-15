<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertTitleContainsTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertTitleContains()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/welcome')
                    ->assertTitleContains('rave');
        });
    }
}
