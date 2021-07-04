<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('idBlog', 10);
            $table->index('idBlog');
            $table->string('idAdministrator', 10);
            $table->foreign('idAdministrator')->references('idAdministrator')->on('administrator')->onDelete('cascade')->onUpdate('cascade');
            $table->string('judul');
            $table->string('slug');
            $table->text('konten');
            $table->text('gambar');
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
        Schema::dropIfExists('blog');
    }
}
