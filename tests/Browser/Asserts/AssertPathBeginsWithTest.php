<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertPathBeginsWithTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertPathBeginsWith()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/welcome')
                    ->assertPathBeginsWith('/');
        });
    }
}
