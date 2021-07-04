<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyediaJasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyedia_jasa', function (Blueprint $table) {
            $table->id();
            $table->string('idJasa', 10);
            $table->index('idJasa');
            $table->string('idPengguna', 10);
            $table->foreign('idPengguna')->references('idPengguna')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('namaToko', 125);
            $table->text('gambar');
            $table->string('deskripsi');
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
        Schema::dropIfExists('penyedia_jasa');
    }
}
