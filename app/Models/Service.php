<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    			
    protected $fillable = [
        'barang_id',
        'user_id',
        'biaya',
        'onkos',
    ];

    public function barang(){
        return $this->belongsTo(Barang::class);
    }

}
