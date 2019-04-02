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
            $table->bigIncrements('id');
            $table->string ('first_name', 100);
            $table->string('last_name',100);
            $table->string('email',75)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 75);
            $table->rememberToken();
            $table->timestamps();

            //$table->unsignedBigInteger('role_id');
            //$table->foreign('role_id')->references('id')->on('roles');
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
