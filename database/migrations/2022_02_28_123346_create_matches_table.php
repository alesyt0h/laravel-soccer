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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visitor')->references('id')->on('teams');
            $table->foreignId('local')->references('id')->on('teams');
            $table->dateTimeTz('match_date');
            $table->enum('result', ['local', 'visitor', 'draw', 'not played yet'])->nullable();
            $table->enum('status', ['played', 'canceled', 'in progress']);
            $table->foreignId('created_by')->references('id')->on('users');
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
        Schema::dropIfExists('matches');
    }
};
