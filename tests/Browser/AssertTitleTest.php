<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class AssertTitleTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertTitle()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/welcome')
                ->assertTitle('Laravel');
        });
    }
}
