<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class data_initiales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //datos  de roles
        DB::table('team')->insert([
            'name' => 'Administradores',
        ]);
        DB::table('team')->insert([
            'name' => 'Comerciales',
        ]);
        //datos de modulos
        DB::table('module')->insert([
            'name' => 'cronograma',
        ]);
        DB::table('module')->insert([
            'name' => 'registro_usuarios',
        ]);

        //datos table action module 1 ids(1, 2, 3)
        DB::table('action')->insert([
            'name' => 'write',
            'module_id' =>1
        ]);
        DB::table('action')->insert([
            'name' => 'read',
            'module_id' => 1
        ]);
        DB::table('action')->insert([
            'name' => 'update',
            'module_id' => 1
        ]);
        //datos table action module 2 ids(4,5,6)
        DB::table('action')->insert([
            'name' => 'write',
            'module_id' =>2
        ]);
        DB::table('action')->insert([
            'name' => 'read',
            'module_id' => 2
        ]);
        DB::table('action')->insert([
            'name' => 'update',
            'module_id' => 2
        ]);

        //datos table operation_team 1 de actions team id 1
        DB::table('operation_team')->insert([
            'team_id' => 1,
            'action_id' => 1,
        ]);
        DB::table('operation_team')->insert([
            'team_id' => 1,
            'action_id' => 2,
        ]);
        DB::table('operation_team')->insert([
            'team_id' => 1,
            'action_id' => 3,
        ]);
        DB::table('operation_team')->insert([
            'team_id' => 1,
            'action_id' => 4,
        ]);
        DB::table('operation_team')->insert([
            'team_id' => 1,
            'action_id' => 5,
        ]);
        DB::table('operation_team')->insert([
            'team_id' => 1,
            'action_id' => 6,
        ]);
        //datos table operation_team de actions team id 2
        DB::table('operation_team')->insert([
            'team_id' => 2,
            'action_id' => 2,
        ]);
        DB::table('operation_team')->insert([
            'team_id' => 2,
            'action_id' => 5,
        ]);
        
        //agregar datos de usuario administrador
        DB::table('users')->insert([
            'name' => 'admin_app',
            'email' => 'email@admin.com',
            'team_id' => 1,
            'password' => '$2y$10$EMN3h3GHb6C4DOnduszghu.22KIFX3GPn.1mxRFFPyf4c012O4vae',//1-8
        ]);
    }
}
