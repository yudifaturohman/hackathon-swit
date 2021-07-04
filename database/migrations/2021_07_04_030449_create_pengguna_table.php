<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id();
            $table->string('idPengguna', 10);
            $table->index('idPengguna');
            $table->string('nama', 50);
            $table->string('telp', 15);
            $table->string('email', 50)->unique();
            $table->string('password');
            $table->enum('status', ['0', '1']);
            $table->string('activation_token')->nullable();
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
        Schema::dropIfExists('pengguna');
    }
}
