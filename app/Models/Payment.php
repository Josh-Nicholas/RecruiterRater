<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'sdk',
        'payment_method',
        'price',
        'quantity',
        'firstname',
        'lastname',
        'email',
        'address',
        'city',
        'zip',
        'country',
        'phone',
        'package_name',
        'bundle_id',
        'expire_date',
        'is_expired',
        'expired_at',
        'details',
    ];
}
