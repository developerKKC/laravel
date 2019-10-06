<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTamamlanmisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamamlanmis', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('ilanid');
            $table->unsignedInteger('yukleme');

            $table->unsignedInteger('indirme');

            $table->date('zaman');
            $table->integer('tip');
            $table->double('hacim');
            $table->double('agirlik');
            $table->text('aciklama');
            $table->unsignedInteger('uyeid');
            $table->integer('miktar');
            $table->unsignedInteger('nakliyeciid');


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
        Schema::drop('tamamlanmis');
    }
}
