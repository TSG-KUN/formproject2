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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            // menu laporan 
            $table->string('email');
            $table->string('nama');
            $table->integer('nip');
            $table->enum('jenisgratif',[
                'uang',
                'barang',
                'rabat',
                'komisi',
                'tiketperjalan',
                'faspenginapan',
                'perjalananwis',
                'pengobatancuma',
                'jasalain'
            ]);
            $table->string('desksingkat');
            $table->string('perkirharga');
            $table->enum('perispeneri',[
                'pernikahan',
                'mutasi',
                'pelayanan',
                'nonpelayanan',
                'seminar'
            ]);
            $table->date('tglpemberi');
            $table->string('lokasipemberi');
            $table->string('pemberigratif');
            $table->string('image')->nullable();
            //menu surat 
            $table->string('namalengkap');
            $table->integer('nip1');
            $table->string('jabatan');
            $table->string('pangkat');
            $table->string('bagian');;
            //pernyataan 
            $table->string('namalengkap1');
            $table->string('jabatan1');
            $table->string('pangkat1');
            $table->string('bagian1');
            $table->string('bentukpoten');
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
        Schema::dropIfExists('forms');
    }
};
