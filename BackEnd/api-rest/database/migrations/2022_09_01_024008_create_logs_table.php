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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clashes_id')->constrained()->cascadeOnDelete();
            
            $table->integer('score_team_a');
            $table->integer('cardRed_team_a');
            $table->integer('cardYellow_team_a');
            $table->integer('score_team_b');
            $table->integer('cardRed_team_b');
            $table->integer('cardYellow_team_b');
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
        Schema::dropIfExists('logs');
    }
};
