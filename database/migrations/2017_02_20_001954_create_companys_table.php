<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique()->default("")->nullable();
            $table->string('phone')->defauliti("")->nullable();
            $table->string('address')->defauliti("")->nullable();
            $table->string('companytype')->defauliti("")->nullable();
            $table->string('location')->defauliti("")->nullable();
            $table->string('source')->defauliti("")->nullable();
            $table->string('legalperson')->defauliti("")->nullable();
            $table->index('phone');
            $table->index('legalperson');
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
        Schema::dropIfExists('companys');
    }
}
