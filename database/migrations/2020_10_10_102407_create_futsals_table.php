<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFutsalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('futsals', function (Blueprint $table) {
            $table->bigIncrements('id_futsal');
            $table->string('nama');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('long');
            $table->string('lat');
            $table->string('admin');
            $table->time('jam_buka');
            $table->time('jam_tutup');
            $table->string('foto')->nullable();
            $table->string('fasilitas');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('futsals');
    }
}
