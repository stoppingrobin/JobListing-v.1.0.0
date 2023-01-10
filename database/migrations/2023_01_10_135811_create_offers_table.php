<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_recruiter');
            $table->foreignId('id_company');
            $table->string('numberOfPlaces');
            $table->string('name');
            $table->string('city');
            $table->string('wantedStudyLevel');
            $table->string('wantedExperience');
            $table->string('domain');
            $table->string('salaryRange');
            $table->string('typeOfWorking');
            $table->string('offer_title');
            $table->longText('offer_description');
            $table->string('recruiter_website');
            $table->string('questions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
