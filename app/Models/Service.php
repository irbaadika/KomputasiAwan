<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'seller_id',
        'type',
        'merk',
        'phone',
        'keterangan',
        'alamat_id',
        'photo'
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
    public function alamat()
    {
        return $this->belongsTo(Alamat::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
