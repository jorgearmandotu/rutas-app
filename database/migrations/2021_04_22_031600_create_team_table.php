<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla de rol o team a desempeñar
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        //tabla de modulos, funcionalidades plataforma
        Schema::create('module', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        //tabla de acciones o permisos crud, relacionada con module
        Schema::create('action', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('module_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
        //tabla que une las acciones con cada rol o team
        Schema::create('operation_team', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('action_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            //
            $table->foreignId('team_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropForeign('team_id');
        });
        
        Schema::dropIfExists('team');
        Schema::dropIfExists('module');
        Schema::dropIfExists('action');
        Schema::dropIfExists('operation_team');
    }
}
