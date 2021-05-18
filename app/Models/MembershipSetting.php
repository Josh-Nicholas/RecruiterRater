<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipSetting extends Model
{
    use HasFactory;
    //
    protected $hidden = [
        'platform',
        'price1',
        'price3',
        'price6',
        'price12',
        'currecy',
        'is_active',
    ];
}
