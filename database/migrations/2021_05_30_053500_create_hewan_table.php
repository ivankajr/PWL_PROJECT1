<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHewanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hewan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pemilik_id')->unsigned();
            $table->string('nama_hewan');
            $table->string('jenis_hewan');
            $table->string('jenis_kelamin');
            $table->string('spesies');
            $table->timestamps();
        });

        Schema::table('hewan', function (Blueprint $table) {
            $table->foreign('pemilik_id')->references('id')->on('pemilik')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hewan');
    }
}
