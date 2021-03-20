<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlasmaRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plasma_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('plasma_profile_id');
            $table->enum('blood_group', ['A+', 'A-','B+','B-','AB+','AB-','O+','O-']);
            $table->string('phone');
            $table->string('location');
            $table->LongText('message');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country');
            $table->string('status',32)->default('0');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('plasma_profile_id')->references('id')->on('plasma_profiles')->onDelete('cascade');
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
        Schema::dropIfExists('plasma_requests');
    }
}
