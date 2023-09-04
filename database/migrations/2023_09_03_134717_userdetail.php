<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Userdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdetail', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            // posso adicionar mais detalhes futuramente
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('userdetail');
    }
}
