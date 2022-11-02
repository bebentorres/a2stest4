<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseeker_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('user_address');
            $table->date('user_bday');
            $table->string('user_num');
            $table->string('user_experience');
            $table->text('user_bio');
            $table->string('user_resume');
            $table->string('user_photo');
            $table->text('user_skills');
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
        Schema::dropIfExists('jobseeker_profiles');
    }
};
