<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickups', function (Blueprint $table) {
            $table->id();
            $table->enum('pickup_type', ['new', 'repeating']);
            $table->string("customer_name");
            $table->bigInteger("mobile_number");
            $table->bigInteger("business_number");
            $table->bigInteger("home_number");
            $table->string("email");
            $table->enum("device_type", ['mobile', 'laptop', 'tablet']);
            $table->string("device_model");
            $table->integer('estimate_price');
            $table->text("device_fault");
            $table->text("device_pickup_address");
            $table->enum("pickup_country_state", ['Abu Dhabi', 'Dubai', 'Sharjah', 'Ajman', 'Umm Al-Quwain', 'Fujairah', 'Al Ain', 'Ras al Khaimah']);
            $table->text("delivery_address");
            $table->enum("delivery_country_state", ['Abu Dhabi', 'Dubai', 'Sharjah', 'Ajman', 'Umm Al-Quwain', 'Fujairah', 'Al Ain', 'Ras al Khaimah']);
            $table->date("pickup_date");
            $table->date("delivery_date");
            $table->string("messenger");
            $table->text("comments");
            $table->text("status");
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
        Schema::dropIfExists('pickups');
    }
}
