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
            $table->string('name')->default("")->nullable();
            $table->string('sex')->default("")->nullable();
            $table->string('phone')->default("")->nullable();
            $table->string('qq')->default("")->nullable();
            $table->string('email')->default("")->nullable();
            $table->string('idcard')->default("")->nullable();
            $table->string('address')->default("")->nullable();
            $table->string('from')->default("")->nullable();
            $table->timestamps();
            $table->index('name');
            $table->index('phone');
            $table->index('idcard');
            $table->index('email');
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
