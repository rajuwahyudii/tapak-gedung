<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikeldosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikeldosens', function (Blueprint $table) {
            $table->id();
            $table->enum('bahasa', ['indonesia', 'english'])->default('indonesia')->nullable();
            $table->string('judul')->default('-');
            $table->string('kategori')->default('artikeldosen')->nullable();
            $table->string('tahun')->default('-')->nullable();
            $table->text('konten')->default('-')->nullable();
            $table->string('author')->default('-')->nullable();
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
        Schema::dropIfExists('artikeldosens');
    }
}
