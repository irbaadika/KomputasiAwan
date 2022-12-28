<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_read_buyer()
    {
        $id = '15';
        $user_id = '1';
        $user = User::where('id', $user_id)->first();
        $response = $this->actingAs($user)->get('/admin/buyer' . '/' . $id);
        $response->assertStatus(200);
    }

    public function test_delete_buyer()
    {
        $id = '15';
        $response = $this->delete('/admin/buyer' . '/' . $id);
        $response->assertRedirect('/admin/buyer');
    }

    public function test_read_seller()
    {
        $id = '7';
        $user_id = '1';
        $user = User::where('id', $user_id)->first();
        $response = $this->actingAs($user)->get('/admin/seller' . '/' . $id);
        $response->assertStatus(200);
    }

    public function test_delete_seller()
    {
        $id = '6';
        $response = $this->delete('/admin/seller' . '/' . $id,[
            'user_id' => '7'
        ]);
        $response->assertRedirect('/admin/seller');
    }

}
