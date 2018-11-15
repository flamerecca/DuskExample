<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertFragmentIsNotTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertFragmentIsNot()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/welcome#content')
                    ->assertFragmentIsNot('notContent');
        });
    }
}
