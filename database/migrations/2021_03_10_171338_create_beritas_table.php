<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->string('thumbnail')->default('default.png')->nullable();
            $table->string('kategori')->nullable();
            $table->string('bahasa')->nullable();
            $table->string('penulis')->nullable();
            $table->string('slug')->nullable();
            $table->text('konten')->nullable();
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
        Schema::dropIfExists('beritas');
    }
}
