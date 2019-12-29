<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiftTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shift__tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('addresh');
            $table->string('mobileNumber');
            $table->string('city');
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
        Schema::dropIfExists('shift__tables');
    }
}
