<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proses', function (Blueprint $table) {
            $table->string('Invoice',18 )->primary();
            $table->string('status', 15);
            $table->unsignedBigInteger('idUser');
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
            $table->string("nomerHp",14);
            $table->foreign('nomerHp')->references('nomerHp')->on('members')->onDelete('cascade');
            $table->integer('berat');
            $table->integer('harga');
            $table->integer('diskon');
            $table->integer('total');
            $table->string('dibayar', 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
