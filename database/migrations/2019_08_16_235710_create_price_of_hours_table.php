<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceOfHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_of_hours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('price');
            $table->date('startDate')->nullable();;
            $table->date('endDate')->nullable();;
            $table->unsignedBigInteger('workerId');
            $table->foreign('workerId')->references('id')->on('workers');
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
        Schema::dropIfExists('price_of_hours');
    }
}
