<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftars', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenisAsuransi');
            $table->string('kelas');
            $table->string('jenisKelamin');
            $table->string('nik');
            $table->string('notlp');
            $table->int('umur');
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
        Schema::dropIfExists('daftars');
    }
}
