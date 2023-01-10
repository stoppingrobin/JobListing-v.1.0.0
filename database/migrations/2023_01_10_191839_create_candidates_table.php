<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->integer("id_user");
            $table->string("resume")->nullable();
            $table->string("cover_letter")->nullable();
            $table->string("recommendation_1")->nullable();
            $table->string("recommendation_2")->nullable();
            $table->string("recommendation_3")->nullable();
            $table->string("other_file")->nullable();
            $table->integer("year_experience")->nullable();
            $table->longText("experience")->nullable();
            $table->longText("education")->nullable();
            $table->string("websiteUrl")->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
