<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_flights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flight_id')->constrained();
            $table->float('price');
            $table->string('airline');
            $table->integer('number_scales');
            $table->float('duration_hours');
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
        Schema::dropIfExists('detail_flights');
    }
}
