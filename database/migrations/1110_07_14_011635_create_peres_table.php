<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('tel');
            $table->string('adresse')->nullable();;
            $table->string('email')->nullable();;
            $table->string('info')->nullable();;
            $table->string('livraison')->nullable();;
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
        Schema::dropIfExists('peres');
    }
}
