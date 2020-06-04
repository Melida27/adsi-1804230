<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
        	'title' => 'Need For Speed',
        	'image' => 'imgs/1590719900.jpeg',
        	'content' => 'Need for Speed es una franquicia de videojuegos de carreras publicada por Electronic Arts y actualmente desarrollada por Criterion Games.',
            'user_id' => 3,
            'category_id' => 1,
           	'slider' => 1,
            'price' => 56,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('articles')->insert([
        	'title' => 'Hollow Knight',
        	'image' => 'imgs/1590720023.jpeg',
        	'content' => 'El videojuego cuenta la historia del Caballero, en su búsqueda para descubrir los secretos del largamente abandonado reino de Hallownest, cuyas profundidades atraen a los aventureros y valientes con la promesa de tesoros o la respuesta a misterios antiguos.',
            'user_id' => 3,
            'category_id' => 1,
           	'slider' => 1,
            'price' => 78,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('articles')->insert([
        	'title' => 'Hallo',
        	'image' => 'imgs/1590720129.jpeg',
        	'content' => 'Halo es una franquicia de videojuegos de ciencia ficción creada y desarrollada por Bungie Studios hasta Halo: Reach, y gestionada ahora por 343 Industries, propiedad de Microsoft Studios.',
            'user_id' => 3,
            'category_id' => 1,
           	'slider' => 2,
            'price' => 98,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('articles')->insert([
        	'title' => 'FIFA',
        	'image' => 'imgs/1590720441.jpeg',
        	'content' => 'FIFA es una saga de videojuegos de fútbol publicados anualmente por Electronic Arts bajo el sello de EA Sports. Cuando la saga comenzó a finales de 1993 se destacó por ser el primero en tener una licencia oficial de la FIFA.',
            'user_id' => 4,
            'category_id' => 2,
           	'slider' => 1,
            'price' => 67,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('articles')->insert([
        	'title' => 'Crash Bandicoot',
        	'image' => 'imgs/1590720610.jpeg',
        	'content' => 'Crash Bandicoot es el nombre de una serie de videojuegos protagonizado por el personaje del mismo nombre. Fue creada en 1996 por Naughty Dog, quien desarrolló los primeros cuatro títulos, bajo la distribución de Universal Interactive Studios.',
            'user_id' => 4,
            'category_id' => 2,
           	'slider' => 1,
            'price' => 90,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('articles')->insert([
        	'title' => 'Uncharted',
        	'image' => 'imgs/1590720495.jpeg',
        	'content' => 'Uncharted es una serie de videojuegos creada por Naughty Dog y distribuida por Sony Computer Entertainment. El primer juego, Uncharted: El tesoro de Drake, salió a la venta el 20 de noviembre de 2007, en exclusiva para PlayStation 3.',
            'user_id' => 4,
            'category_id' => 2,
           	'slider' => 2,
            'price' => 35,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('articles')->insert([
        	'title' => 'Super Mario',
        	'image' => 'imgs/1590720801.jpeg',
        	'content' => 'Super Mario es una serie de videojuegos de plataformas creados por la empresa desarrolladora Nintendo y protagonizados por su mascota, Mario.',
            'user_id' => 5,
            'category_id' => 3,
           	'slider' => 1,
            'price' => 78,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('articles')->insert([
        	'title' => 'Animal Crossing',
        	'image' => 'imgs/1590720907.jpeg',
        	'content' => 'Animal Crossing es una serie de videojuegos de simulación de vida publicada por Nintendo, en la que el jugador vive en un pueblo habitado por furros, llevando a cabo diversas actividades.',
            'user_id' => 5,
            'category_id' => 3,
           	'slider' => 1,
            'price' => 85,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('articles')->insert([
        	'title' => 'The Legend Of Zelda',
        	'image' => 'imgs/1590721016.jpeg',
        	'content' => 'Es una serie de videojuegos de acción-aventura creada por los diseñadores japoneses Shigeru Miyamoto y Takashi Tezuka,1​ y desarrollada por Nintendo, empresa que también se encarga de su distribución internacional.',
            'user_id' => 5,
            'category_id' => 3,
           	'slider' => 2,
            'price' => 45,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
