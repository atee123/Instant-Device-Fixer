<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pickup_id')->nullable();
            $table->enum('type', ['new', 'repeating']);
            $table->text("customer_type");
            $table->text("booking_number");
            $table->text("imei_number");
            $table->bigInteger("customer_name");
            $table->bigInteger("mobile_number");
            $table->bigInteger("business_number");
            $table->bigInteger("home_number");
            $table->string("email");
            $table->enum("device_type", ['mobile', 'laptop', 'tablet']);
            $table->string("model_number");
            $table->enum("device_warranty", ['no warranty, 3 months, 6 month, 9 month, 1  year']);
            $table->integer('estimate_price');
            $table->integer('final_price');
            $table->text("fault_reported_by_customer");
            $table->text("observation");
            $table->enum("pickup_country_state", ['Abu Dhabi', 'Dubai', 'Sharjah', 'Ajman', 'Umm Al-Quwain', 'Fujairah', 'Al Ain', 'Ras al Khaimah']);
            $table->text("delivery_country_state");
            $table->text("delivery_address");
            $table->date("delivery_date");
            $table->string("technician");
            $table->text("comments");
            $table->text("status");
            $table->timestamps();

            $table->foreign('pickup_id')->references('id')->on('pickups');
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
