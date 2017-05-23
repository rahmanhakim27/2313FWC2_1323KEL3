<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableStnk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stnk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pemilik');
            $table->string('merk');
            $table->string('jenis');
            $table->date('tanggal_pembayaran');
            $table->integer('kendaraan_id',false,true)->unsigned();
            $table->foreign('kendaraan_id')->references('id')->on('kendaraan')->onDelete('cascade');
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
        Schema::drop('stnk');
    }
}
