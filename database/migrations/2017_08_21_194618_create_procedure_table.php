<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Procedure', function (Blueprint $table) {
            $table->increments('id');
            //$table->timestamps();
            $table->string('guid');
            $table->string('fk_Operator');
            $table->string('fk_Kartochka');
            $table->string('fk_Program');
            $table->string('fk_Salon');
            $table->timestamps('timeBegin');
            $table->string('fk_Admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Procedure');
    }
}
