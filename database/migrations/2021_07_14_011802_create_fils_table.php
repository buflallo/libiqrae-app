<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fils', function (Blueprint $table) {
            $table->unsignedBigInteger('pere_id');
            $table->unsignedBigInteger('list_id');
            $table->string('genre');
            $table->string('couleur_pref')->nullable();;
            $table->string('info')->nullable();;
            $table->foreign('pere_id')->references('id')->on('peres')->onDelete('cascade');
            $table->foreign('list_id')->references('id')->on('listes')->onDelete('cascade');
            $table->primary(array('pere_id', 'list_id'));
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
        Schema::dropIfExists('fils');
    }
}
