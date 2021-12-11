<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Username');
            $table->string('Email')->unique();
            $table->timestamp('Email_verified_at')->nullable();
            $table->string('Password');
            $table->date('Date_of_birth');
            $table->integer('Weight');
            $table->string('Blood_group');
            $table->string('Gender');
            $table->string('Organ_Needed');
            $table->string('Details');
            $table->integer('Contact');
            $table->string('Address');
            $table->string('role')->default('user');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
