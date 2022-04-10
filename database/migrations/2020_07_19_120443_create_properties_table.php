<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

            $table->string('ownername')->nullable();
            $table->string('property_id')->nullable();
            $table->string('id_card')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('picture_owner')->nullable();
            $table->string('picture_id_card')->nullable();

            $table->integer('plot_status')->nullable(); // plot=0 , home=1
            $table->integer('property_status')->nullable();// 0=static , 1=sold , 2= rentt, 3=resale


            $table->longText('block')->nullable();
            $table->longText('images')->nullable();
            $table->longText('description')->nullable();
            $table->integer('land_size')->nullable();
            $table->longText('land_prize')->nullable();
            $table->longText('bed_room')->nullable();
            $table->longText('drawing_room')->nullable();
            $table->longText('washroom')->nullable();
            $table->longText('gerages')->nullable();
            $table->longText('home_floor')->nullable();
            $table->longText('kitchen')->nullable();

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
        Schema::dropIfExists('properties');
    }
}
