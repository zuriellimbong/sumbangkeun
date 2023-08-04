<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggalangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggalangs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('nama');
            $table->boolean('status');
            $table->string('kategori');
            $table->string('biaya');
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
        Schema::dropIfExists('penggalangs');
        Schema::table('penggalangs', function (Blueprint $table) {
            $table->dropColumn('kategori');
        });
        Schema::table('penggalangs', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
