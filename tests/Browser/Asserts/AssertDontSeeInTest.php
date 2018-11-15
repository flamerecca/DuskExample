<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertDontSeeInTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertDontSeeIn()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertDontSeeIn('.content > .title', 'John Cena');
        });
    }
}
