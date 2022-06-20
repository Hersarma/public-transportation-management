<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('registrationPlate')->unique();
            $table->date('firstRegistrationDate');
            $table->date('trafficLicenseIssuedDate');
            $table->string('fname');
            $table->string('lname');
            $table->string('residenceAddress');
            $table->string('vehicleManufacturer');
            $table->string('vehicleModel');
            $table->string('chassisNumber');
            $table->string('allowedWeight');
            $table->string('weight');
            $table->date('trafficLicenseExpirationDate');
            $table->string('cylinderCapacity');
            $table->string('horsepower');
            $table->string('fuleType');
            $table->string('seatingCapacity')->nullable();
            $table->string('standingCapacity')->nullable();
            $table->integer('currentMileage');
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
        Schema::dropIfExists('vehicles');
    }
};
