<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'team',
        'firm',
        'employer',
        'successful',
        'recruitment',
        'regarding_data',
        'experience_stars',
        'recommend_emoj',
        'review_title',
        'review_content',
        'communication_stars',
        'feedback_stars',
        'efficiency_stars',
        'information_stars',
        'throughout_stars',
        'treated_stars',
        'added_value',
        'interview_preparation',
        'better_support',
        'review_rating',
    ];
}
