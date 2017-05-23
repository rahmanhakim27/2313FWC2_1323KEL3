<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePajak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pajak', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pemilik');
            $table->integer('total_pajak');
            $table->date('tanggal_pembayaran');
            $table->integer('stnk_id',false,true)->unsigned();
            $table->foreign('stnk_id')->references('id')->on('stnk')->onDelete('cascade');
            $table->integer('petugas_id',false,true)->unsigned();
            $table->foreign('petugas_id')->references('id')->on('petugas')->onDelete('cascade');
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
        Schema::drop('pajak');
    }
}
