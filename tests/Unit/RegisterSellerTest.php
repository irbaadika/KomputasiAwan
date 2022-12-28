<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class RegisterSellerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_success_register_seller()
    {
        $user_id = 7;
        $user = User::where('id', $user_id)->first();
        $response = $this->actingAs($user)->post('/seller',[
            'toko' => 'Nododik',
            'alamat' => 'arjowinangun',
            'npwp' => '1234567890123456',
            'doc' => new \Illuminate\Http\UploadedFile(public_path('integrity_pact.pdf'), 'integrity_pact.pdf', null, null, true),
        ]);

        $response->assertRedirect('/');
    }

    public function test_verify_register_seller()
    {
        $id = 7;
        // $user = User::where('id', $user_id)->first();
        $response = $this->get('/verifySeller' . '/' . $id);

        $response->assertRedirect('/admin/seller');
    }

    public function test_invalid_npwp_register_seller()
    {
        $user_id = 7;
        $user = User::where('id', $user_id)->first();
        $response = $this->actingAs($user)->post('/seller',[
            'toko' => 'Nododik',
            'alamat' => 'arjowinangun',
            'npwp' => '12345678901236',
            'doc' => new \Illuminate\Http\UploadedFile(public_path('integrity_pact.pdf'), 'integrity_pact.pdf', null, null, true),
        ]);

        $response->assertStatus(302);
    }

    public function test_empty_doc_register_seller()
    {
        $user_id = 7;
        $user = User::where('id', $user_id)->first();
        $response = $this->actingAs($user)->post('/seller',[
            'toko' => 'Nododik',
            'alamat' => 'arjowinangun',
            'npwp' => '1234567890123456',
            'doc' => '',
        ]);

        $response->assertStatus(302);
    }

    public function test_empty_form_register_seller()
    {
        $user_id = 7;
        $user = User::where('id', $user_id)->first();
        $response = $this->actingAs($user)->post('/seller',[
            'toko' => '',
            'alamat' => '',
            'npwp' => '',
            'doc' => '',
        ]);

        $response->assertStatus(302);
    }
}
