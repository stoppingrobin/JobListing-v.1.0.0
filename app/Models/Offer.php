<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;


    protected $fillable = [
        'numberOfPlaces',
        'name',
        'city',
        'wantedStudyLevel',
        'wantedExperience',
        'domain',
        'salaryRange',
        'typeOfWorking',
        'offer_title',
        'offer_description',
        'recruiter_website',
        'questions'
    ];
}
