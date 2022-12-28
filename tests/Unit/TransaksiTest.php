<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Seller;

class TransaksiTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_buyer_transaksi()
    {
        $user_id = 9;
        $user = User::where('id', $user_id)->first();
        $response = $this->actingAs($user)->post('/transaksi', [
            'product_id' => '1',
            'harga' => '25000000',
            'seller_id' => '1',
            'jumlah' => '1',
            'keranjang_id' => '3',
            'bukti' => new \Illuminate\Http\UploadedFile(public_path('bali.jpg'), 'bali.jpg', null, null, true),
        ]);

        $response->assertRedirect('/cart');
    }

    public function test_verifikasi_seller_transaksi()
    {
        $id = 5;
        $response = $this->get('/verifyTransaksi' . '/' . $id);

        $response->assertRedirect('/sellerTransaksi');
    }

    public function test_cek_admin_transaksi()
    {
        $id = '1';
        $user = User::where('id', $id)->first();
        $response = $this->actingAs($user)->get('/admin/transaksi');

        $response->assertStatus(200);
    }
}
