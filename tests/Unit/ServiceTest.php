<?php

namespace Tests\Unit;

use Tests\TestCase;


class ServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

     public function test_empty_type_service()
     {
         $response = $this->post('/service',[
             'user_id' => '9',
             'seller_id' => '1',
             'type' => '',
             'merk' => 'Asus',
             'phone' => '088888883333',
             'keterangan' => 'Blue Screen',
             'alamat_id' => '1',
             'photo' => new \Illuminate\Http\UploadedFile(public_path('2.png'), 'doc.pdf', null, null, true),
         ]);
 
         $response->assertStatus(302);
     }

     public function test_empty_merk_service()
     {

         $response = $this->post('/service',[
             'user_id' => '9',
             'seller_id' => '1',
             'type' => 'ROG',
             'merk' => '',
             'phone' => '088888883333',
             'keterangan' => 'Blue Screen',
             'alamat_id' => '1',
             'photo' => new \Illuminate\Http\UploadedFile(public_path('2.png'), 'doc.pdf', null, null, true),
         ]);
 
         $response->assertStatus(302);
     }

     public function test_empty_phone_service()
     {

         $response = $this->post('/service',[
             'user_id' => '9',
             'seller_id' => '1',
             'type' => 'ROG',
             'merk' => 'Asus',
             'phone' => '',
             'keterangan' => 'Blue Screen',
             'alamat_id' => '1',
             'photo' => new \Illuminate\Http\UploadedFile(public_path('2.png'), 'doc.pdf', null, null, true),
         ]);
 
         $response->assertStatus(302);
     }

     public function test_empty_keterangan_service()
     {

         $response = $this->post('/service',[
             'user_id' => '9',
             'seller_id' => '1',
             'type' => 'ROG',
             'merk' => 'Asus',
             'phone' => '088888883333',
             'keterangan' => '',
             'alamat_id' => '1',
             'photo' => new \Illuminate\Http\UploadedFile(public_path('2.png'), 'doc.pdf', null, null, true),
         ]);
 
         $response->assertStatus(302);
     }

     public function test_empty_photo_service()
     {

         $response = $this->post('/service',[
             'user_id' => '9',
             'seller_id' => '1',
             'type' => 'ROG',
             'merk' => 'Asus',
             'phone' => '088888883333',
             'keterangan' => 'Blue Screen',
             'alamat_id' => '1',
             'photo' => ''
         ]);
 
         $response->assertStatus(302);
     }

     public function test_success_service()
     {
         $seller_id = 1;
         $response = $this->post('/service',[
             'user_id' => '9',
             'seller_id' => $seller_id,
             'type' => 'ROG',
             'merk' => 'Asus',
             'phone' => '088888883333',
             'keterangan' => 'Blue Screen',
             'alamat_id' => '1',
             'photo' => new \Illuminate\Http\UploadedFile(public_path('2.png'), 'doc.pdf', null, null, true),
         ]);
 
         $response->assertRedirect('/toko' . '/' . $seller_id);
     }
}
