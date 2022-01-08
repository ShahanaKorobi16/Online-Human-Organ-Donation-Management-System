<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('Patient_Name');
            $table->integer('user_id');
            $table->date('Date_of_Birth');
            $table->string('Blood_group');
            $table->string('Hospital_Name');
            $table->string('Hospital_Bed_No');
            $table->integer('Contact');
            $table->string('Email');
            $table->string('NID_Number');
            $table->string('Address');
            $table->string('Organ_Needed');
            $table->string('Case');
            $table->string('image');
            $table->date('Post_Date');
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
        Schema::dropIfExists('posts');
    }
}
