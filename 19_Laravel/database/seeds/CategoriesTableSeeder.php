<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'name' => 'Xbox', 
        	'description' => 'Es una videoconsola de sobremesa de sexta generación producida por Microsoft y la primera de esta empresa, en colaboración con Intel.',
            'image' => 'imgs/1590719323.png'
        ]);

        $cat = new App\Category;
        $cat->name = 'Play Station';
        $cat->description = 'Es el nombre de una serie de consolas de videojuegos creadas y desarrolladas por Sony Interactive Entertainment.';
        $cat->image = 'imgs/1590719410.png';
        $cat->save();

        $cat = new App\Category;
        $cat->name = 'Nintendo Switch';
        $cat->description = 'Es la novena consola de videojuegos principal desarrollada por Nintendo. Conocida en el desarrollo por su nombre código «NX», se dio a conocer en octubre de 2016 y fue lanzada mundialmente el 3 de marzo de 2017.';
        $cat->image = 'imgs/1590719480.png';
        $cat->save();
        
    }
}
