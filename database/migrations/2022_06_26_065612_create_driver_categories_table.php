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
        Schema::create('driver_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id');
            $table->string('categories');
            $table->timestamps();

            $table->foreign('driver_id')
            ->references('id')
            ->on('drivers')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_categories');
    }
};
