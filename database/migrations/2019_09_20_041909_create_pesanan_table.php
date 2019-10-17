<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->increments('pesanan_id');
            $table->unsignedInteger('pesanan_pelanggan');
            $table->unsignedInteger('pesanan_produk');
            $table->integer('pesanan_jumlah');
            $table->dateTime('pesanan_waktu')->useCurrent();
            $table->tinyInteger('pesanan_status');

            $table->foreign('pesanan_pelanggan')
                ->references('pelanggan_id')
                ->on('pelanggan')
                ->onUpdate('cascade');
            $table->foreign('pesanan_produk')
                ->references('produk_id')
                ->on('produk')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
