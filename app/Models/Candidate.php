<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'resume',
        'cover_letter',
        'recommendation_1',
        'recommendation_2',
        'recommendation_3',
        'other_file',
        'year_experience',
        'experience',
        'education',
        'websiteUrl',
    ];
}
