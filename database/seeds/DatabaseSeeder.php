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
        /*
        **  Personajes
        */
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
       	DB::table('personals')->insert([
            'nombre' => 'Cris',
            'cantidad' => '2',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Geraldine',
            'cantidad' => '4',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Ismael',
            'cantidad' => '7',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Jared',
            'cantidad' => '4',
       	]);
       	DB::table('personals')->insert([
            'nombre' => 'Omar',
            'cantidad' => '4',
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
        /*
        **  Shows
        */
        DB::table('shows')->insert([
            'id' => '1',
            'nombre' => 'Aurora',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Winnie Pooh',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'id' => '3',
            'nombre' => 'Angry Birds',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'id' => '4',
            'nombre' => 'Animación',
            'video' => 'PELO2gAm_-A',
        ]);
        DB::table('shows')->insert([
            'id' => '5',
            'nombre' => 'Baby Shower',
            'video' => 'uWw4VUqjYjw&t=1s',
        ]);
        DB::table('shows')->insert([
            'id' => '6',
            'nombre' => 'Backyardigans',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'id' => '7',
            'nombre' => 'Barney',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'id' => '8',
            'nombre' => 'Rosita Fresita',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'id' => '9',
            'nombre' => 'Atrévete a soñar',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'id' => '10',
            'nombre' => 'Avengers',
            'video' => 'zZbcqENqRFE',
        ]);
        DB::table('shows')->insert([
            'id' => '11',
            'nombre' => 'Batman',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'id' => '12',
            'nombre' => 'Bella y Bestia',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'id' => '13',
            'nombre' => 'Bely y Beto',
            'video' => 'U8BlephthZk',
        ]);
        DB::table('shows')->insert([
            'id' => '14',
            'nombre' => 'Ben 10',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Blanca Nieves',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Bob Esponja',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Cenicienta',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Coco',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Corazón y cupido',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Descendientes',
            'video' => 'lI_wxrK2KBU',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Doctora Juguetes',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Dora la exploradora ',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'El Chavo del 8',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Frozen',
            'video' => '0R2pm8gQ8Ng',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Gallina pintadita',
            'video' => 'wboove-nO3A',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Hadas',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Hannah Montana',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Héroes en pijama',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Hi5',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'High School Musical',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Increíbles',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Intensamente',
            'video' => 'D1xnHzk2wEo',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Jake y los piratas',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Jasmine',
            'video' => 'FvEb0aVo0x4',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'La CQ',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'La Sirenita',
            'video' => 'FSVyFHtwv9Y',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Lady Bug',
            'video' => 'r1Vg3HNps0o',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Lazy Town',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Lilo y Stitch',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Madagascar',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Mario Bros',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Masha y el Oso',
            'video' => 'eEmtEdvMcss',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Mickey Mouse',
            'video' => 'j81rJM4VTiY',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Minions',
            'video' => 'Z57DI2j-X9I',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Mis XV',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Moana',
            'video' => 'dwE9tC75SlE',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Monster High',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Monsters, Inc.',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Mounstros',
            'video' => 'Esv97RZ0ZPY',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'My little Pony',
            'video' => 'MdJPAnEXGuc',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Paw Patrol',
            'video' => 'yy6TeOUhUUE',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Peppa Pig',
            'video' => 'ftWs2wjwO1Y',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Peter Pan',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Phineas and Ferb',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Pinta Caritas',
            'video' => 'kSYGceACSuA',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Pistas de Blue',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Plaza Sésamo',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Pocoyo',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Pókemon',
            'video' => '4meOq24x5c0',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Power Rangers',
            'video' => 'v8A5tKeP-iQ',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Presencias',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Princesas',
            'video' => '4k1rS27NCzA',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Pucca Y Garu',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Rapunzel',
            'video' => 'HH4Pl5gDXmE',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Reyes Magos',
            'video' => 'PlCwm3N9CMU',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Santa Claus',
            'video' => 'VUgVOiB_750',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Scooby Doo',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Shrek',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Soy Luna',
            'video' => 'EO0ut_7N7lM',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Spider Man',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Súper Héroes',
            'video' => 'IDUSyaHdF_Q',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Súper Heroínas',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Tatiana',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Toy Story',
            'video' => 'JmQ-Rds71k0',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Transformers',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Trolls',
            'video' => 'NULL',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Unicornio',
            'video' => 'x7xR_hvaqTg',
        ]);
        DB::table('shows')->insert([
            'nombre' => 'Valiente',
            'video' => 'NULL',
        ]);

    }
}
