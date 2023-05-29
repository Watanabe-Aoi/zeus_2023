<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id();
            $table->string('name');
            $table->timestamps();
=======
            $table->string('user_id')->primary();
            $table->string('password');
<<<<<<< HEAD
>>>>>>> 34e506f1850c7e162e177895d8580ee379a9a0b6
=======
            $table->timestamps();
>>>>>>> 999e06cb3d20fd108c7e9bd86ef95485528aaf64
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
