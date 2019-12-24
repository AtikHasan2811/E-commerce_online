<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddreshesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addreshes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('state');
            $table->string('city');
            $table->string('country');
            $table->string('payment_type');
            $table->bigInteger('user_id');
            $table->string('pincode');

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
        Schema::dropIfExists('addreshes');
    }
}
