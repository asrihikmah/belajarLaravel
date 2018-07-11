<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
         Schema::create('status', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('id_user')->unsigned();
        $table->string('isi', 160);
        $table->timestamps();
        $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
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
