<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/register') // mengunjungi url halaman register
                    ->assertSee('Name') //melihat teks 'Name' 
                    ->type('name', 'adminexample') //mengisi input nama
                    ->type('email', 'admin@mail.com') //mengisi input email
                    ->type('password', 'password') // mengisi input password
                    ->type('password_confirmation', 'password') // mengisi input confirm password
                    ->press('REGISTER'); // menekan button REGISTER
        });
    }
}
