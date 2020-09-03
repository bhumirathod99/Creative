<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelancerLangKnowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancer_lang_knows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('f_id');
            $table->foreign('f_id')->references('id')->on('freelancers')->onDelete('cascade');
            $table->string('Language_Proficiency');
            $table->string('language');
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
        Schema::dropIfExists('freelancer_lang_knows');
    }
}
