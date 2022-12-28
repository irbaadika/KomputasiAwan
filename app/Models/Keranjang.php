<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjangs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'product_id',
        'jumlah',
        'harga'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // public function seller()
    // {
    //     return $this->belongsTo(Seller::class);
    // }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
