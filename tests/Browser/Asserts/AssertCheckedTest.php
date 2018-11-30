<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AssertCheckedTest extends DuskTestCase
{
    /**
     *
     * @return void
     * @throws \Exception
     * @throws \Throwable
     */
    public function testAssertChecked()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/test/checkbox')
                    ->assertChecked('test_checkbox');
        });
    }
}
