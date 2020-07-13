<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service_required');
            $table->string('preferred_date');
            $table->string('drop_off_time');
            $table->text('additional_comments')->nullable();
            $table->unsignedBigInteger('customer_id');
            $table->integer('adviser_id');
            $table->integer('mechanic_id');
            $table->integer('vehicle_id');
            $table->integer('servicecol');
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
        Schema::dropIfExists('bookings');
    }
}
