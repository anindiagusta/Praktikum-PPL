<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test for user registration.
     */
    public function testRegister(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register') // mengunjungi url halaman register
                ->assertSee('Name') // melihat teks 'Name'
                ->type('name', 'adminexample1') // mengisi input nama
                ->type('email', 'admin1@mail.com') // mengisi input email
                ->type('password', 'password') // mengisi input password
                ->type('password_confirmation', 'password') // mengisi input confirm password
                ->press('REGISTER') // menekan button REGISTER
                ;
        });
    }
}
