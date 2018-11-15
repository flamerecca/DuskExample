<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertPortIsNotTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertPortIsNot()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertPortIsNot('8080');
        });
    }
}
