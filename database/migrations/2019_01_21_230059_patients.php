<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Patients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastName');
            $table->char('PESEL');
            $table->string('ZIPcode');
            $table->string('city');
            $table->string('street');
            $table->string('buildingNumber');
            $table->string('phoneNumber');
            $table->timestamps();
            $table->card()->attach($patient_id);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        chema::drop('patients');
    }
}
