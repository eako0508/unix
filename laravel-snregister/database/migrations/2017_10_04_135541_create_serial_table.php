<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Serial_table', function (Blueprint $table) {
            $table->increments('id');
			$table->string('company');
			$table->smallInteger('invoice');
			$table->string('product');
			$table->string('product_sn');
			$table->string('hdd');
			$table->string('hdd_sn');
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
        Schema::dropIfExists('Serial_table');
    }
}