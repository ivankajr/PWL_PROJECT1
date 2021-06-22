<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransanksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transanksi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pemilik_id')->unsigned();
            $table->bigInteger('hewan_id')->unsigned();
            $table->bigInteger('pelayanan_id')->unsigned();
            $table->bigInteger('obat_id')->unsigned();
            $table->integer('total');
            $table->timestamps();
        });
        Schema::table('transanksi', function (Blueprint $table) {
            $table->foreign('pemilik_id')->references('id')->on('pemilik');
        });
        Schema::table('transanksi', function (Blueprint $table) {
            $table->foreign('hewan_id')->references('id')->on('hewan');
        });
        Schema::table('transanksi', function (Blueprint $table) {
            $table->foreign('pelayanan_id')->references('id')->on('pelayanan');
        });
        Schema::table('transanksi', function (Blueprint $table) {
            $table->foreign('obat_id')->references('id')->on('obat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transanksi');
    }
}
