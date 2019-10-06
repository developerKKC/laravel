<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNakliyecikayitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nakliyecikayit', function (Blueprint $table) {
            $table->increments('id');
            /*$table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefon',10)->unique();
            */
            $table->unsignedInteger('uyeid');
            $table->foreign('uyeid')->references('id')->on('users')->onDelete('cascade');
            $table->integer('tip');
            $table->string('plaka',8)->unique();
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
        Schema::drop('nakliyecikayit');
    }
}
