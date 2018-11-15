<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertQueryStringMissingTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertQueryStringMissing()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/welcome?test=aaa')
                ->assertQueryStringMissing('notTest');
        });
    }
}
