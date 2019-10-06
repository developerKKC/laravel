<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIlanlarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
Schema::create('ilanlar', function(Blueprint $table)
{
    $table->increments('id');
    $table->unsignedInteger('yukleme');
    $table->foreign('yukleme')->references('id')->on('sehirler')->onDelete('cascade');
    $table->unsignedInteger('indirme');
    $table->foreign('indirme')->references('id')->on('sehirler')->onDelete('cascade');
    $table->date('zaman');
    $table->integer('tip');
    $table->double('hacim');
    $table->double('agirlik');
    $table->text('aciklama');
    $table->unsignedInteger('uyeid');
    $table->foreign('uyeid')->references('id')->on('users')->onDelete('cascade');

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
    Schema::drop('ilanlar');
}
}
