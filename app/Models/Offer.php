<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;


    protected $fillable = [
        'id_recruiter',
        'id-company',
        'numberOfPlaces',
        'name',
        'city',
        'wantedStudyLevel',
        'wantedExperience',
        'domain',
        'salaryRange',
        'typeOfWorking',
        'offer-title',
        'offer-description',
        'recruiter-website',
        'questions'
    ];
}
