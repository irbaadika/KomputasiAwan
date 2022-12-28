<?php

namespace Tests\Unit;

use Tests\TestCase;

class PengaduanTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_empty_subject_report()
    {
        $seller_id = 1;
        $response = $this->post('/report',[
            'user_id' => '3',
            'seller_id' => $seller_id,
            'content' => 'Saya sudah beli namun barang tidak datang',
            'subject' => '',
            'bukti' => new \Illuminate\Http\UploadedFile(public_path('1.png'), 'doc.pdf', null, null, true),
        ]);

        $response->assertStatus(302);
    }

    public function test_empty_content_report()
    {
        $seller_id = 1;
        $response = $this->post('/report',[
            'user_id' => '3',
            'seller_id' => $seller_id,
            'content' => 'Saya sudah beli namun barang tidak datang',
            'subject' => 'Penipuan',
            'bukti' => new \Illuminate\Http\UploadedFile(public_path('1.png'), 'doc.pdf', null, null, true),
        ]);

        $response->assertStatus(302);
    }

    public function test_empty_photo_report()
    {
        $seller_id = 1;
        $response = $this->post('/report',[
            'user_id' => '3',
            'seller_id' => $seller_id,
            'content' => 'Saya sudah beli namun barang tidak datang',
            'subject' => 'Penipuan',
            'bukti' => '',
        ]);

        $response->assertStatus(302);
    }

    public function test_success_report()
    {
        $seller_id = 1;
        $response = $this->post('/report',[
            'user_id' => '3',
            'seller_id' => $seller_id,
            'content' => 'Saya sudah beli namun barang tidak datang',
            'subject' => 'Penipuan',
            'bukti' => new \Illuminate\Http\UploadedFile(public_path('1.png'), 'doc.pdf', null, null, true),
        ]);

        $response->assertRedirect('/toko' . '/' . $seller_id);
    }
}
