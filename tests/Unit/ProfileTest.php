<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProfileTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_invalid_photo_buyer()
    {
        $id = '9';
        $response = $this->put('admin/buyer/' . $id, [
            'photo' => new \Illuminate\Http\UploadedFile(public_path('doc.pdf'), 'doc.pdf', null, null, true),
        ]);

        $response->assertStatus(302);
    }

    public function test_photo_buyer()
    {
        $id = '9';
        $response = $this->put('admin/buyer/' . $id, [
            'photo' => new \Illuminate\Http\UploadedFile(public_path('face15.jpg'), 'face15.jpg', null, null, true),
        ]);

        $response->assertRedirect('/profile' . '/' . $id);
    }

    public function test_name_buyer()
    {
        $id = '9';
        $response = $this->put('admin/buyer/' . $id, [
            'name' => 'Irba Adika Jaya',
        ]);

        $response->assertRedirect('/profile' . '/' . $id);
    }

    public function test_username_buyer()
    {
        $id = '9';
        $response = $this->put('admin/buyer/' . $id, [
            'username' => 'irbaadika',
        ]);

        $response->assertRedirect('/profile' . '/' . $id);
    }

    public function test_invalid_alamat_buyer()
    {
        $id = '9';
        $response = $this->post('/alamat', [
            'user_id' => $id,
            'jalan' => 'Ngidod2',
            'kelurahan' => 'Kedungkandangku',
            'kecamatan' => 'Bululawangaja',
            'kota' => 'Surabaya',
            'provinsi' => 'Jawa Timur',
            'kodePos' => 'kodepos',
        ]);

        $response->assertStatus(302);
    }

    public function test_alamat_buyer()
    {
        $id = '9';
        $response = $this->post('/alamat', [
            'user_id' => $id,
            'jalan' => 'Ngidod2',
            'kelurahan' => 'Kedungkandangku',
            'kecamatan' => 'Bululawangaja',
            'kota' => 'Surabaya',
            'provinsi' => 'Jawa Timur',
            'kodePos' => '65555',
        ]);

        $response->assertRedirect('/profile' . '/' . $id);
    }

    public function test_pilih_alamat_buyer()
    {
        $id = '9';
        $response = $this->put('admin/buyer/' . $id, [
            'alamat_id' => '2',
        ]);

        $response->assertRedirect('/profile' . '/' . $id);
    }

    public function test_invalid_phone_buyer()
    {
        $id = '9';
        $response = $this->put('admin/buyer/' . $id, [
            'phone' => 'phone',
        ]);

        $response->assertStatus(302);
    }

    public function test_phone_buyer()
    {
        $id = '9';
        $response = $this->put('admin/buyer/' . $id, [
            'phone' => '082222225555',
        ]);

        $response->assertRedirect('/profile' . '/' . $id);
    }
}
