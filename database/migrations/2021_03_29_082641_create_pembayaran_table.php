<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->integer('id', 11);
            $table->integer('id_petugas');
            $table->string('nisn');
            $table->date('tgl_bayar');
            $table->integer('id_spp');
            $table->double('jumlah_bayar');
            $table->timestamps();

            $table->foreign('id_petugas')
                    ->references('id')->on('petugas')
                    ->onDelete('cascade');
            $table->foreign('nisn')
                    ->references('nisn')->on('siswa')
                    ->onDelete('cascade');
            $table->foreign('id_spp')
                    ->references('id')->on('petugas')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
