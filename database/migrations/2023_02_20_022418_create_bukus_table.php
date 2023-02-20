<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 125);
            $table->foreignId('kategori_id')->constrained();
            $table->foreignId('penerbit_id')->constrained();
            $table->string('pengarang', 50);
            $table->year('tahun_terbit');
            $table->Integer('isbn')->nullable();
            $table->Integer('j_buku_baik');
            $table->Integer('j_buku_rusak');
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
        Schema::dropIfExists('bukus');
    }
}
