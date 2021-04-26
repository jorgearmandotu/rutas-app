<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation_team', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
           // $table->bigInteger('team_id')->unsigned();
            $table->foreignId('team_id')->references('id')->on('team')
            //$table->foreignId('team_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
           // $table->foreignId('action_id')->constrained()
           $table->foreignId('action_id')->references('id')->on('action')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('operation_team');
    }
}
