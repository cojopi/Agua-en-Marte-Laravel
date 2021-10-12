<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpeditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expeditions', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 50);
            $table->decimal('coordinateX', 18, 16);
            $table->decimal('coordinateY', 18, 16);
            $table->integer('size');
            $table->string('state', 50);
            $table->boolean('hasWater')->nullable();
            $table->boolean('isDrinkable')->nullable();
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
        Schema::dropIfExists('expeditions');
    }
}
