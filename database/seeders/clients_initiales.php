<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class clients_initiales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'identification' => '123',
            'name' => 'juan perez',
            'name_subsidiary' => 'tienda don juan',
            'adress' => 'calle don juan',
            'type_subsidiary' => 'tienda',
            'phone' => '77777777',
            'location' => '/imagen/subida/juan',
        ]);
        DB::table('clients')->insert([
            'identification' => '456',
            'name' => 'segundo perez',
            'name_subsidiary' => 'tienda don segundo',
            'adress' => 'calle don segundo',
            'type_subsidiary' => 'tienda',
            'phone' => '71111111',
            'location' => '/imagen/subida/segundo',
        ]);
        DB::table('clients')->insert([
            'identification' => '789',
            'name' => 'tercero perez',
            'name_subsidiary' => 'tienda don tercero',
            'adress' => 'calle don tercero',
            'type_subsidiary' => 'tienda',
            'phone' => '7333333',
            'location' => '/imagen/subida/tercero',
        ]);
        DB::table('clients')->insert([
            'identification' => '456',
            'name' => 'cuarto perez',
            'name_subsidiary' => 'tienda don cuarto',
            'adress' => 'calle don cuarto',
            'type_subsidiary' => 'tienda',
            'phone' => '7444444',
            'location' => '/imagen/subida/cuarto',
        ]);
        DB::table('clients')->insert([
            'identification' => '456',
            'name' => 'quinto perez',
            'name_subsidiary' => 'tienda don quinto',
            'adress' => 'calle don quinto',
            'type_subsidiary' => 'tienda',
            'phone' => '755555',
            'location' => '/imagen/subida/quinto',
        ]);
    }
}
