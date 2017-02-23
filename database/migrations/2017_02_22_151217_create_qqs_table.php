<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qqs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->default("")->nullable();
            $table->string('nickname')->default("")->nullable();
            $table->string('password')->default("")->nullable();
            $table->string('email')->default("")->nullable();
            $table->string('from')->default("")->nullable();
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
        Schema::dropIfExists('qqs');
    }
}
