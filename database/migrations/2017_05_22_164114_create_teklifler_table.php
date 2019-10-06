<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTekliflerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teklifler', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('ilanid');
            $table->foreign('ilanid')->references('id')->on('ilanlar')->onDelete('cascade');
            $table->unsignedInteger('nakliyeciid');
            $table->foreign('nakliyeciid')->references('uyeid')->on('nakliyecikayit')->onDelete('cascade');
            $table->integer('miktar');
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
        Schema::drop('teklifler');
    }
}
