<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login') // mengunjungi url halaman login
                ->assertSee('Email') // melihat teks 'Email'
                ->type('email', 'admin@mail.com') // mengisi input email
                ->type('password', 'password') // mengisi input password
                ->press('LOG IN'); // menekan button LOG IN

            $browser->visit('/create-note') // mengunjungi url halaman register
                ->assertSee('Title') // pastikan form Title terlihat
                ->assertSee('Description') // pastikan form Description terlihat
                ->type('title', 'notesbaru') // mengisi input
                ->type('description', 'notes baru 2') // mengisi input
                ->press('CREATE'); // menekan button Create
        });
    }
}
