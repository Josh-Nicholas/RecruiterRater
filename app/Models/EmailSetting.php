<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailSetting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'reviews',
        'companies',
        'updates',
        'insparation',
        'new_features',
        'support',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
