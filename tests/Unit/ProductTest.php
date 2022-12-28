<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Product;
use App\Models\User;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_product()
    {
        $response = $this->post('/sellerProduct',[
            'merk_id' => '2',
            'type' => 'Asus Zenbook Fold',
            'category_id' => '1',
            'seller_id' => '1',
            'deskripsi' => 'laptop',
            'harga' => '50000000',
            'stok' => '4',
            'photo' => new \Illuminate\Http\UploadedFile(public_path('2.png'), 'doc.pdf', null, null, true),
        ]);

        $response->assertRedirect('/sellerProduct');
    }

    public function test_read_product()
    {
        $id = '10';
        $user_id = '2';
        $user = User::where('id', $user_id)->first();
        $response = $this->actingAs($user)->get('/sellerProduct' . '/' . $id);
        $response->assertStatus(200);
    }

    public function test_edit_product()
    {
        $id = '10';
        $response = $this->put('/sellerProduct' . '/' . $id,[
            'merk_id' => '2',
            'type' => 'Asus Zenbook Fold',
            'category_id' => '1',
            'seller_id' => '1',
            'deskripsi' => 'laptop',
            'harga' => '40000000',
            'stok' => '3',
            'photo' => new \Illuminate\Http\UploadedFile(public_path('2.png'), 'doc.pdf', null, null, true),
        ]);

        $response->assertRedirect('/sellerProduct');
    }

    public function test_delete_product()
    {
        $id = '10';
        $response = $this->delete('/sellerProduct' . '/' . $id);

        $response->assertRedirect('/sellerProduct');
    }
}
