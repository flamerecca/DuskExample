<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertSourceHasTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertSourceHas()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSourceHas('<div class="title m-b-md">
                    Laravel
                </div>');
        });
    }
}
