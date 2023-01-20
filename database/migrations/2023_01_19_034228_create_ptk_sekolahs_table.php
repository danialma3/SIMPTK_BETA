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
        Schema::create('ptk_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah');
            $table->string('nama_ptk');
            $table->string('tempat_tanggal_lahir');
            $table->string('pendidikan');
            $table->string('jabatan');
            $table->string('dana');
            $table->string('mapel');
            $table->string('jjm');
            $table->string('kabkot');
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
        Schema::dropIfExists('ptk_sekolahs');
    }
};
