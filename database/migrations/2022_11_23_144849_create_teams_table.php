<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('club', 30);
            $table->string('city', 30);
            $table->enum('serie', ['A','B','C'])->default('A');
            $table->string('logo')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('points');
            $table->tinyInteger('goal_scored')->default(0);
            $table->tinyInteger('goal_conceded')->default(0);
            $table->tinyInteger('goal_difference')->default(0);
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
        Schema::dropIfExists('teams');
    }
}
