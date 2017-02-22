<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->nullable();
            $table->string('nickname')->nullable();
            $table->string('password')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('idcard')->nullable();
            $table->string('address')->nullable();
            $table->string('from')->nullable();
            $table->timestamps();
            $table->index('username');
            $table->index('nickname');
            $table->index('phone');
            $table->index('email');
            $table->primary('username','nickname','email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peoples');
    }
}
