<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKartochkaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Kartochka', function (Blueprint $table) {
            $table->increments( 'id' );
            $table->timestamps();
            $table->string( 'guid' );
            $table->string( 'number' );
            $table->dateTime( 'dateCreate' );
            $table->string( 'telefon' );
            $table->string( 'name' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Kartochka');
    }
}
