<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    protected $table = 'merchant';
    protected $fillable =  [
        'id_merchant',
        'merchant_name',
    ];

}
