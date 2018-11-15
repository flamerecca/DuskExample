<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertSeeInTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertSeeIn()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSeeIn('.content > .title', 'Laravel');
        });
    }
}
