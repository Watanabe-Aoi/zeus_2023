<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookCatalogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_catalog', function (Blueprint $table) {
            $table->string('book_id')->primary();
            $table->string('title');
            $table->string('author');   // 著者
            $table->string('translator');   // 訳者
            $table->string('publisher');
            $table->date('publication_date');
            $table->string('code');
            $table->string('status');
            $table->string('keyword');
            $table->string('memo');
            $table->string('data_creator');
            $table->dateTime('deta_create_date');
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
        Schema::dropIfExists('book_catalog');
    }
}
