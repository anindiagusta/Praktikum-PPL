<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TampilNotesTest extends DuskTestCase
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

            $browser->visit('/notes') // mengunjungi halaman daftar notes
            ->assertSee('notesbaru') // memastikan judul terlihat
            ->assertSee('notes baru 2') // memastikan deskripsi terlihat
            ->assertSee('adminexample') // memastikan nama author terlihat
            ->press('Delete') // jika tombol adalah <button>
            ->clickLink('Edit'); // klik tombol/link edit pertama yang ditemukan
        });
    }
}
