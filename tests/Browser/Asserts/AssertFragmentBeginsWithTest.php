<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertFragmentBeginsWithTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertFragmentBeginsWith()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/welcome#content')
                    ->assertFragmentBeginsWith('c');
        });
    }
}
