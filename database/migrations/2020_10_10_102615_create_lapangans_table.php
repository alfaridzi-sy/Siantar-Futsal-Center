<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLapangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapangans', function (Blueprint $table) {
            $table->bigIncrements('id_lapangan');
            $table->string('nama');
            $table->string('jenis_lantai');
            $table->integer('harga_pagi');
            $table->integer('harga_malam');
            $table->string('foto1')->nullable();
            $table->string('foto2')->nullable();
            $table->string('foto3')->nullable();
            $table->unsignedBigInteger('id_futsal');
            $table->foreign('id_futsal')->references('id_futsal')->on('futsals')->onDelete('cascade');
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
        Schema::dropIfExists('lapangans');
    }
}
