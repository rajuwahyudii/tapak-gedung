<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipakreditasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membershipakreditasis', function (Blueprint $table) {
            $table->id();
            $table->string('gambar')->default('default.png')->nullable();
            $table->string('url')->nullable();
            $table->string('kategori')->nullable();
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
        Schema::dropIfExists('membershipakreditasis');
    }
}
