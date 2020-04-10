<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscritsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscrits', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('names');
            $table->date('date_nais')->nullable();
            $table->string('civil');
            $table->string('address');
            $table->string('phone');
            $table->string('pays');
            $table->string('ville');
            $table->string('ecole');
            $table->string('option');
            $table->year('diplome');
            $table->string('pourcentage');
            $table->string('faculte');
            $table->string('promo');
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
        Schema::dropIfExists('inscrits');
    }
}
