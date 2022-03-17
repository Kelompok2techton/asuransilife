<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftar1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar1s', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenisAsuransi');
            $table->string('kelas');
            $table->string('jenisKelamin');
            $table->string('nik');
            $table->string('notlp');
            $table->string('umur');
            $table->string('alamat');
            $table->string('tmptLahir');
            $table->date('tglLahir');
            $table->string('ktp');
            $table->string('gaji');
            $table->string('kk');
            $table->string('email');
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
        Schema::dropIfExists('daftar1s');
    }
}
