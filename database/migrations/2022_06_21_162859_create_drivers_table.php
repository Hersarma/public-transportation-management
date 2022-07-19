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
            $table->string('contact');
            $table->date('birthDate');
            $table->string('placeOfBirth');
            $table->date('driverLicenseIssuedDate');
            $table->date('driverLicenseExpirationDate');
            $table->string('driverLicenseIssuedBy');
            $table->string('driverLicenseId')->unique();
            $table->string('residence');
            $table->boolean('active')->default(0);
            $table->boolean('category_AM')->default(0);
            $table->boolean('category_A1')->default(0);
            $table->boolean('category_A2')->default(0);
            $table->boolean('category_A')->default(0);
            $table->boolean('category_B1')->default(0);
            $table->boolean('category_B')->default(0);
            $table->boolean('category_BE')->default(0);
            $table->boolean('category_C1')->default(0);
            $table->boolean('category_C1E')->default(0);
            $table->boolean('category_C')->default(0);
            $table->boolean('category_CE')->default(0);
            $table->boolean('category_D1')->default(0);
            $table->boolean('category_D1E')->default(0);
            $table->boolean('category_D')->default(0);
            $table->boolean('category_DE')->default(0);
            $table->boolean('category_F')->default(0);
            $table->boolean('category_M')->default(0);
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
