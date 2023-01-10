<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->integer("id_candidat");
            $table->integer("id_recruteur");
            $table->integer("id_offre");
            $table->longText("answers")->nullable();
            $table->longText("message_motivation")->nullable();
            $table->string("status");
            $table->string("resume");
            $table->string("cover_letter");
            $table->string("other_file")->nullable();
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
        Schema::dropIfExists('applications');
    }
}
