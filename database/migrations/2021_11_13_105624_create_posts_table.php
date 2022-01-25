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
            $table->string('username');
            $table->integer('user_id');
            $table->date('date_of_birth');
            $table->string('blood_group');
            $table->string('Hospital_Name');
            $table->string('Hospital_Bed_No');
            $table->integer('contact');
            $table->string('email');
            $table->bigInteger('nid');
            $table->string('address');
            $table->integer('organ_id');
           // $table->string('Organ_Needed');
            $table->string('Case');
            $table->string('image');
            $table->date('Post_Date');
            $table->string('status')->default('pending');
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
