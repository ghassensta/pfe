<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preseniors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('nationalite')->nullable();
            $table->string('password')->nullable();
            $table->string('confirm')->nullable();
            $table->integer('cin')->nullable();
            $table->string('document')->nullable();
            $table->string('dateobtention')->unique();
            $table->string('etat')->nullable();

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
        Schema::dropIfExists('preseniors');
    }
};
