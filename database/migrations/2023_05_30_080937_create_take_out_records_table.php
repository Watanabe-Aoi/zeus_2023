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
            $table->foreignId('book_id')->constaint('book_catalog');
            $table->foreignId('user_id')->constaint('users');
            $table->dateTime('takeout_date');
            $table->dateTime('returned_date')->nullable();
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
        Schema::dropIfExists('take_out_records');
    }
}
