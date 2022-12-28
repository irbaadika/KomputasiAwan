<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_duplicate_username_register()
    {
        $response = $this->post('/register',[
            'name' => 'auryno nagata',
            'username' => 'auryno19',
            'phone' => '082232323232',
            'email' => 'auryno19@gmail.com',
            'password' => 'password'
        ]);

        $response->assertStatus(302);
    }

    public function test_duplicate_email_register()
    {
        $response = $this->post('/register',[
            'name' => 'auryno nagata',
            'username' => 'auryno',
            'phone' => '082232323232',
            'email' => 'auryno@gmail.com',
            'password' => 'password'
        ]);

        $response->assertStatus(302);
    }

    public function test_invalid_nohp_register()
    {
        $response = $this->post('/register',[
            'name' => 'auryno nagata',
            'username' => 'auryno',
            'phone' => 'nohp',
            'email' => 'auryno19@gmail.com',
            'password' => 'password'
        ]);

        $response->assertStatus(302);
    }

    public function test_invalid_password_register()
    {
        $response = $this->post('/register',[
            'name' => 'auryno nagata',
            'username' => 'auryno',
            'phone' => '082232323232',
            'email' => 'auryno19@gmail.com',
            'password' => 'pass'
        ]);

        $response->assertStatus(302);
    }

    public function test_empty_field_register()
    {
        $response = $this->post('/register',[
            'name' => '',
            'username' => '',
            'phone' => '',
            'email' => '',
            'password' => ''
        ]);

        $response->assertStatus(302);
    }

    public function test_success_register_buyer()
    {
        $response = $this->post('/register',[
            'name' => 'auryno nagata',
            'username' => 'nagata',
            'phone' => '082232323232',
            'email' => 'nagata@gmail.com',
            'password' => 'password'
        ]);

        $response->assertRedirect(route('login'));
    }

    public function test_verify_buyer()
    {
        $response = $this->get('/verify',[
            'request' => '18'
        ]);

        $response->assertRedirect(route('buyer.index'));
    }
}
