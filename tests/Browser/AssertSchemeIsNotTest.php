<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertSchemeIsNotTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertSchemeIsNot()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSchemeIsNot('https');
        });
    }
}
