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
            'cantidad' => '10',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Carla',
            'cantidad' => '17',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Citlali',
            'cantidad' => '4',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Cris',
            'cantidad' => '6',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Daniel',
            'cantidad' => '13',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'David',
            'cantidad' => '9',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Frida',
            'cantidad' => '4',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Geraldine',
            'cantidad' => '4',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Guadalupe',
            'cantidad' => '8',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Ismael',
            'cantidad' => '6',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Jared',
            'cantidad' => '6',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Joshua',
            'cantidad' => '19',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Luci',
            'cantidad' => '19',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Michelle',
            'cantidad' => '30',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Monica',
            'cantidad' => '5',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Omar',
            'cantidad' => '6',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Sharaby',
            'cantidad' => '8',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Ximena',
            'cantidad' => '21',
       	]);

    }
}
