<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertDontSeeTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertDontSee()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertDontSee('John Cena');
        });
    }
}
