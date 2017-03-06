<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('idcard')->nullable();
            $table->string('address')->nullable();
            $table->string('carname')->nullable();
            $table->string('carprice')->nullable();
            $table->string('carnumber')->nullable();
            $table->string('carmodel')->nullable();
            $table->string('sellcompany')->nullable();
            $table->string('productcompany')->nullable();
            $table->string('carenginenumber')->nullable();
            $table->string('framenumber')->nullable();
            $table->string('zcode')->nullable();
            $table->string('zzg')->nullable();
            $table->string('zjzsbh')->nullable();
            $table->string('gcllx')->nullable();
            $table->string('djzsbh')->nullable();
            $table->string('ycpxh')->nullable();
            $table->string('cllx')->nullable();
            $table->string('syxz')->nullable();
            $table->string('hdfs')->nullable();
            $table->string('csys')->nullable();
            $table->string('sfzmmc')->nullable();
            $table->string('zsxzqh')->nullable();
            $table->index('name');
            $table->index('phone');
            $table->index('idcard');
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
        Schema::dropIfExists('carinfo');
    }
}
