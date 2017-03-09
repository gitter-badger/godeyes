<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaidukeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baidukeys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('showreason')->nullable();
            $table->integer('dayvolume')->nullable();
            $table->integer('mobilevolume')->nullable();
            $table->integer('pcvolume')->nullable();
            $table->decimal('price',5,2)->nullable();
            $table->integer('competitive')->nullable();
            $table->boolean('ifused')->default(false)->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('baidukeys');
    }
}
