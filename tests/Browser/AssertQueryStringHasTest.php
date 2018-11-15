<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertQueryStringHasTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testQueryStringHasTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/welcome?test=aaa')
                    ->assertQueryStringHas('test', 'aaa');
        });
    }
}
