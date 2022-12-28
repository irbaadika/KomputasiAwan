<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'merk_id',
        'type',
        'category_id',
        'seller_id',
        'deskripsi',
        'harga',
        'stok',
        'photo'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function merk()
    {
        return $this->belongsTo(Merk::class);
    }
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
