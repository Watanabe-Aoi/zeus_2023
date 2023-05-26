<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakeOutRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('take_out_records', function (Blueprint $table) {
            $table->id();
            $table->string('book_id');
            $table->string('user_id');
            $table->dateTime('takeout_date');
            $table->dateTime('return_date')->nullable();

            $table->foreign('book_id')->references('book_id')->on('book_catalog');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('take_out_records');
    }
}
