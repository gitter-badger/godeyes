<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQq1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qq1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->default("")->nullable();
            $table->string('nickname')->default("")->nullable();
            $table->string('password')->default("")->nullable();
            $table->string('secret')->default("")->nullable();
            $table->string('email')->default("")->nullable();
            $table->string('from')->default("")->nullable();
            $table->string('phone')->default("")->nullable();
            $table->string('zipcode')->default("")->nullable();
            $table->string('address')->default("")->nullable();
            $table->index('phone');
            $table->index('username');
            $table->index('nickname');
            $table->index('email');
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
        Schema::dropIfExists('qq1s');
    }
}
