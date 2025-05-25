<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HapusNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testNotesExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login') // mengunjungi url halaman login
                ->assertSee('Email') // melihat teks 'Email'
                ->type('email', 'admin@mail.com') // mengisi input email
                ->type('password', 'password') // mengisi input password
                ->press('LOG IN'); // menekan button LOG IN

            $browser->visit('/notes') // mengunjungi halaman daftar notes
            ->assertSee('notesbaru') // pastikan catatan ada dulu
            ->press('Delete') // memencet tombol delete
            ->assertDontSee('notes baru') // tidak melihat teks "notes baru"
            ->assertDontSee('notes baru 2'); // tidak melihat teks "notes baru 2"
            });
    }
}
