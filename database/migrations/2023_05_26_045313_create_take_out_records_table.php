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
            $table->string('book_id')->nullable(false);
            $table->string('user_id')->nullable(false);
            $table->dateTime('takeout_date')->nullable(false);
            $table->dateTime('returndate')->nullable();
            $table->timestamp();    // created_at updated_atフィールドを自動設定

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
