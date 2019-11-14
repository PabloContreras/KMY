<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('personals')->insert([
            'nombre' => 'Anahi',
            'cantidad' => '7',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Anayeli',
            'cantidad' => '6',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Carla',
            'cantidad' => '4',
       	]);
       	/*DB::table('personals')->insert([
            'nombre' => 'Citlali',
            'cantidad' => '4',
       	]);*/
       	DB::table('personals')->insert([
            'nombre' => 'Cris',
            'cantidad' => '2',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Daniel',
            'cantidad' => '5',
       	]);
       	/*DB::table('personals')->insert([
            'nombre' => 'David',
            'cantidad' => '9',
       	]);*/
       	DB::table('personals')->insert([
            'nombre' => 'Frida',
            'cantidad' => '6',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Geraldine',
            'cantidad' => '4',
       	]);
       	/*DB::table('personals')->insert([
            'nombre' => 'Guadalupe',
            'cantidad' => '8',
       	]);*/
       	DB::table('personals')->insert([
            'nombre' => 'Ismael',
            'cantidad' => '7',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Jared',
            'cantidad' => '4',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Joshua',
            'cantidad' => '8',
       	]);
       	/*DB::table('personals')->insert([
            'nombre' => 'Luci',
            'cantidad' => '19',
       	]);*/
       	DB::table('personals')->insert([
            'nombre' => 'Michelle',
            'cantidad' => '19',
       	]);
       	/*DB::table('personals')->insert([
            'nombre' => 'Monica',
            'cantidad' => '5',
       	]);*/
       	DB::table('personals')->insert([
            'nombre' => 'Omar',
            'cantidad' => '4',
       	]);
       	/*DB::table('personals')->insert([
            'nombre' => 'Sharaby',
            'cantidad' => '8',
       	]);*/
       	DB::table('personals')->insert([
            'nombre' => 'Ximena',
            'cantidad' => '10',
       	]);
        DB::table('personals')->insert([
            'nombre' => 'Chelle',
            'cantidad' => '6',
        ]);
        DB::table('personals')->insert([
            'nombre' => 'Liz',
            'cantidad' => '3',
        ]);
        DB::table('personals')->insert([
            'nombre' => 'Jose',
            'cantidad' => '0',
        ]);
        DB::table('personals')->insert([
            'nombre' => 'Jonathan',
            'cantidad' => '10',
        ]);
        DB::table('personals')->insert([
            'nombre' => 'Iker',
            'cantidad' => '1',
        ]);
        DB::table('personals')->insert([
            'nombre' => 'Luna',
            'cantidad' => '1',
        ]);
        DB::table('personals')->insert([
            'nombre' => 'Kevin',
            'cantidad' => '1',
        ]);
        DB::table('personals')->insert([
            'nombre' => 'Ivan',
            'cantidad' => '0',
        ]);
        DB::table('personals')->insert([
            'nombre' => 'Javier',
            'cantidad' => '0',
        ]);
    }
}
