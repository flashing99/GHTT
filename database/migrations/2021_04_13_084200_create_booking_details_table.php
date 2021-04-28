<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('adult');
            $table->integer('children');
            $table->string('housing_name', 10);
            $table->string('number', 10);
            $table->double('amount', 8, 2);
            $table->integer('vat');
            $table->date('date_start');
            $table->date('date_end');
            $table->enum('state', ['0', '1']);
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
        Schema::dropIfExists('booking_details');
    }
}
