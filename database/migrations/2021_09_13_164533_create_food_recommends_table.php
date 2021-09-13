<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodRecommendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_recommends', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 10);
            $table->string('address');
            $table->decimal('latitude', $precision = 11, $scale = 8);
            $table->decimal('longitude', $precision = 11, $scale = 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_recommends');
    }
}
