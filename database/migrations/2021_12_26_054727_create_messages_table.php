<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
           // $table->string('Patient_Name');
            $table->integer('user_id');
            $table->string('username');
            $table->integer('donorpost_id');
            $table->integer('Contact');
            $table->string('Email');
          
            $table->string('Address');
            $table->string('Why_need_this_organ');
        
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
        Schema::dropIfExists('messages');
    }
}
