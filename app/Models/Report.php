<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'subject',
        'seller_id',
        'content',
        'bukti'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
