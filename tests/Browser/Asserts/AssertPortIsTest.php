<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertPortIsTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertPortIs()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertPortIs('');
        });
    }
}
