<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('surname');
            $table->string('firstname');
            $table->string('username')->nullable()->unique();
            $table->string('email')->unique();
            // $table->digits('phone')->nullable()->unique();
            $table->string('password');
            $table->string('token');
            $table->integer('active')->default(0);
            $table->rememberToken();
            $table->timestamps();

            // For admin
            $table->string('type')->default('default');
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
