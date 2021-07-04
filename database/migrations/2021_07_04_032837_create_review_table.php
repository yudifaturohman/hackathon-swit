<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->id();
            $table->string('idReview', 10);
            $table->index('idReview');
            $table->string('idJasa', 10);
            $table->foreign('idJasa')->references('idJasa')->on('penyedia_jasa')->onDelete('cascade')->onUpdate('cascade');
            $table->string('idPengguna', 10);
            $table->foreign('idPengguna')->references('idPengguna')->on('pengguna')->onDelete('cascade')->onUpdate('cascade');
            $table->text('review');
            $table->integer('rating');
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
        Schema::dropIfExists('review');
    }
}
