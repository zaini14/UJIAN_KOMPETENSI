<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spp', function (Blueprint $table) {
            $table->integer('id', 11);
            $table->string('bulan');
            $table->integer('tahun');
            $table->double('nominal');
            $table->boolean('isBayar');
            $table->string('nisn');


            $table->foreign('nisn')
                    ->references('nisn')->on('siswa')
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
        Schema::dropIfExists('spp');
    }
}
