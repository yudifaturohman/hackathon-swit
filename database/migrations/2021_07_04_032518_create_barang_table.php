<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('idBarang', 10);
            $table->index('idBarang');
            $table->string('idJasa', 10);
            $table->foreign('idJasa')->references('idJasa')->on('penyedia_jasa')->onDelete('cascade')->onUpdate('cascade');
            $table->string('idPengguna', 10);
            $table->foreign('idPengguna')->references('idPengguna')->on('pengguna')->onDelete('cascade')->onUpdate('cascade');
            $table->string('namaBarang', 125);
            $table->string('deskripsi');
            $table->integer('harga');
            $table->integer('stok');
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
        Schema::dropIfExists('barang');
    }
}
