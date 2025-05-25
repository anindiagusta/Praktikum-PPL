<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogOutTest extends DuskTestCase
{
    /**
     * Test logout from the dropdown menu
     */
    public function testLogout(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login') // mengunjungi url halaman login
                ->assertSee('Email') // melihat teks 'Email'
                ->type('email', 'admin@mail.com') // mengisi input email
                ->type('password', 'password') // mengisi input password
                ->press('LOG IN'); // menekan button LOG IN
                
            $browser->visit('/dashboard')
                ->click('#click-dropdown') // Menyesuaikan dengan id di elemen dropdown
                ->click('a[href$="/logout"]'); // Klik tombol Log Out, tidak bisa pakai ->clickLink('Log Out') karena dalam html pakai onclick
        });
    }
}
