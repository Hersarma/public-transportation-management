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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('lname');
            $table->string('fname');
            $table->date('birthDate');
            $table->string('placeOfBirth');
            $table->date('driverLicenseIssuedDate');
            $table->date('driverLicenseExpirationDate');
            $table->string('driverLicenseIssuedBy');
            $table->string('driverLicenseId')->unique();
            $table->string('residence');
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
        Schema::dropIfExists('drivers');
    }
};