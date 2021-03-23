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
            $table->string('judul')->nullable();
            $table->text('konten')->nullable();
            $table->string('author')->nullable();
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
