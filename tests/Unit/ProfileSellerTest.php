<?php

namespace Tests\Unit;

use Tests\TestCase;

use function Composer\Autoload\includeFile;

class ProfileSellerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_invalid_photo_update_seller()
    {
        $id = '1';
        $response = $this->put('admin/seller/' . $id, [
            'photo' => new \Illuminate\Http\UploadedFile(public_path('doc.pdf'), 'doc.pdf', null, null, true),
        ]);

        $response->assertStatus(302);
    }

    public function test_photo_update_seller()
    {
        $id = '1';
        $response = $this->put('admin/seller/' . $id, [
            'photo' => new \Illuminate\Http\UploadedFile(public_path('face14.jpg'), 'face14.jpg', null, null, true),
        ]);

        $response->assertRedirect('/dashboardSeller/profile' . '/' . $id);
    }

    public function test_nama_update_seller()
    {
        $user_id = '2';
        $id = '1';
        // $filePath = storage_path('public/images/faces/face5.jpg');
        $response = $this->put('admin/seller/' . $id, [
            'user_id' =>  $user_id,
            'name' => 'Auryno Nagata Adyatma'
        ]);

        $response->assertRedirect('/dashboardSeller/profile' . '/' . $id);
    }

    public function test_toko_update_seller()
    {
        $id = '1';
        // $filePath = storage_path('public/images/faces/face5.jpg');
        $response = $this->put('admin/seller/' . $id, [
            'toko' => 'Toko Keren'
        ]);

        $response->assertRedirect('/dashboardSeller/profile' . '/' . $id);
    }

    public function test_alamat_update_seller()
    {
        $id = '1';
        // $filePath = storage_path('public/images/faces/face5.jpg');
        $response = $this->put('admin/seller/' . $id, [
            'alamat' => 'Sidoarjo'
        ]);

        $response->assertRedirect('/dashboardSeller/profile' . '/' . $id);
    }

    public function test_invalid_phone_update_seller()
    {
        $user_id = '2';
        $id = '1';
        // $filePath = storage_path('public/images/faces/face5.jpg');
        $response = $this->put('admin/seller/' . $id, [
            'user_id' =>  $user_id,
            'phone' => 'nohp'
        ]);

        $response->assertStatus(302);
    }

    public function test_phone_update_seller()
    {
        $user_id = '2';
        $id = '1';
        // $filePath = storage_path('public/images/faces/face5.jpg');
        $response = $this->put('admin/seller/' . $id, [
            'user_id' =>  $user_id,
            'phone' => '08111111111'
        ]);

        $response->assertRedirect('/dashboardSeller/profile' . '/' . $id);
    }
}
