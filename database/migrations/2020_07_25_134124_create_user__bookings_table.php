<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties');
            $table->string('name')->nullable();
            $table->string('cnic')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('date')->nullable();
            $table->string('descrption')->nullable();
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
        Schema::dropIfExists('user__bookings');
    }
}
