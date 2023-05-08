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
        Schema::create('memorials', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_akun');
            $table->text('keterangan',100);
            $table->decimal('debit');
            $table->decimal('kredit');
            $table->string('nama_akun',100);
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
        Schema::dropIfExists('memorials');
    }
};