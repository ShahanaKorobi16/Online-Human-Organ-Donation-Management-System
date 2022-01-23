<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donorposts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('username');
            $table->integer('user_id');
            $table->date('date_of_birth');
            $table->string('blood_group');
            $table->integer('contact');
            $table->string('email');
            $table->bigInteger('nid');
            $table->string('address');
            $table->integer('organ_id');
            $table->string('Quantity');
            $table->string('Details');
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
        Schema::dropIfExists('donorposts');
    }
}
