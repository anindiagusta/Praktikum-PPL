<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testNotesExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login') // mengunjungi url halaman login
                    ->assertSee('Email') //melihat teks 'Email' 
                    ->type('email', 'admin@mail.com') //mengisi input email
                    ->type('password', 'password') // mengisi input password
                    ->press('LOG IN'); // menekan button LOG UIN

            $browser->visit('/create-note') // mengunjungi url halaman register
                    ->type('title', 'notesbaru') //mengisi input
                    ->type('description', 'notes baru 2') //mengisi input
                    ->press('CREATE'); // menekan button Create
        });
    }
}
