<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->string('status')->default('en cours');
            $table->unsignedBigInteger('liste_id');
            $table->unsignedBigInteger('pere_id');
            $table->foreign('liste_id')->references('id')->on('listes')->onDelete('cascade');
            $table->foreign('pere_id')->references('id')->on('peres')->onDelete('cascade');
            $table->primary(array('liste_id', 'pere_id'));
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
        Schema::dropIfExists('commandes');
    }
}
