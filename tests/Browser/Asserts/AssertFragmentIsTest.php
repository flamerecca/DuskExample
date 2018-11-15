<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertFragmentIsTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertFragmentIs()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/welcome#content')
                    ->assertFragmentIs('content');
        });
    }
}
