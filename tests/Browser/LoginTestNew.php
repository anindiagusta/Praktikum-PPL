<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTestNew extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testLogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login') // mengunjungi url halaman login
                ->assertSee('Email') // memastikan teks 'Login' muncul
                ->type('email', 'admin@mail.com') // mengisi input email
                ->type('password', 'password') // mengisi input password
                ->press('LOG IN') // menekan tombol LOGIN
                ->assertPathIs('/dashboard'); // memverifikasi bahwa diarahkan ke halaman /dashboard
        });
    }
}
