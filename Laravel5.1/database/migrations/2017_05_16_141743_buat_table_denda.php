<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableDenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denda', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pemilik');
            $table->integer('keterlambatan');
            $table->integer('total');
            $table->integer('pajak_id',false,true)->unsigned();
            $table->foreign('pajak_id')->references('id')->on('pajak')->onDelete('cascade');
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
        Schema::drop('denda');
    }
}
