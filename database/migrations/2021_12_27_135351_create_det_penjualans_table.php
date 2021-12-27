<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetPenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_penjualans', function (Blueprint $table) {
            $table->BigInteger('id_buku')->unsigned();
            $table->integer('harga_buku');
            $table->BigInteger('id_transaksi')->unsigned();
            $table->string('jumlah');

            $table->foreign('id_buku')->references('id')
                ->on('bukus')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_transaksi')->references('id')
                ->on('penjualans')->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('det_penjualans');
    }
}
