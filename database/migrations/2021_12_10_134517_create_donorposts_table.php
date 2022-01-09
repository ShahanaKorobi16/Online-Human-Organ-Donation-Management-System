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
            $table->string('Donor_Name');
            $table->integer('user_id');
            $table->date('Date_of_Birth');
            $table->string('Blood_group');
            $table->integer('Contact');
            $table->string('Email');
            $table->integer('NID_Number');
            $table->string('Address');
            $table->string('Organ_wants_to_donate');
            $table->string('Quantity');
            $table->string('Details');
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
        Schema::dropIfExists('donorposts');
    }
}
