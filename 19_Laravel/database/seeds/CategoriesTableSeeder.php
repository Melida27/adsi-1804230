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
        	'name' => 'Technology', 
        	'description' => 'The simplest form of technology is the development and use of basic tools.'
        ]);

        $cat = new App\Category;
        $cat->name = 'Sport';
        $cat->description = 'Sport is commonly defined as an athletic activity that involves a degree of competition';
        $cat->save();

        $cat = new App\Category;
        $cat->name = 'Home';
        $cat->description = 'Home account for roughly one-third of a listing and are accompanied by property information';
        $cat->save();

        //Factory
        factory(App\Category::class, 30)->create();
    }
}
