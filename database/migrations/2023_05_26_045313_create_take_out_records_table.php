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
            $table->id()->primaryKey();
            $table->foreignID('book_id')->constraint('book_catalog');
            $table->foreignID('user_id')->constraint('users');
            $table->dateTime('takeout_date');
            $table->dateTime('returndate')->nullable();
            $table->timestamps();    // created_at updated_atフィールドを自動設定
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
