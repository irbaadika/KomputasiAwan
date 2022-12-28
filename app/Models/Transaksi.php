<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $primaryKey='id';

    protected $fillable = [
        'bukti',
        'user_id',
        'seller_id',
        'product_id',
        'jumlah',
        'harga',
        'verify'
    ];

    public function product(){
        return $this->belongsTo(Product::class,);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function seller(){
        return $this->belongsTo(Seller::class);
    }

}
