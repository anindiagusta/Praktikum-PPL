<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TampilTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login') // mengunjungi url halaman login
                    ->assertSee('Email') //melihat teks 'Email' 
                    ->type('email', 'admin@mail.com') //mengisi input email
                    ->type('password', 'password') // mengisi input password
                    ->press('LOG IN'); // menekan button LOG UIN

            $browser->visit('/notes') // mengunjungi url halaman register
                    ->assertSee('notesbaru') //melihat text
                    ->assertSee('notes baru 2'); //melihat text
        });
    }
}
