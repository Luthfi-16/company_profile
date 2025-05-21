<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_fasilitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->unsignedBigInteger('id_fasilitas');
            $table->foreign('id_fasilitas')->references('id')->on('fasilitas')->onDelete('cascade');
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
        Schema::dropIfExists('foto_fasilitas');
    }
};
