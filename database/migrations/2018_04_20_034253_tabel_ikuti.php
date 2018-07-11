<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelIkuti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikuti', function (Blueprint $table) {
            $table->integer('id_pengikut')->unsigned();
            $table->integer('id_diikuti')->unsigned();
            $table->foreign('id_pengikut')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_diikuti')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
