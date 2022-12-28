<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = 'sellers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'toko',
        'npwp',
        'alamat',
        'password',
        'verify',
        'user_id',
        'photo',
        'doc'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
