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
        Schema::create('user_webhooks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_game')->constrained('game_bots');
            $table->foreignId('id_user')->constrained('users');
            $table->string('url');
            $table->string('api')->nullable();
            $table->integer('status');
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
        Schema::dropIfExists('user_games');

    }
};
