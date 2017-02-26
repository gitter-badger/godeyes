<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQqfensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qqfens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->default('')->nullable();
            $table->string('hangye')->default('')->nullable();
            $table->timestamps();
            $table->index('username');
            $table->index('hangye');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qqfens');
    }
}
