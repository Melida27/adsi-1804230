<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'fullname' => 'Jeremias Springfield', 
        	'email' => 'jeremias@gmail.com', 
        	'phone' => 3239090345, 
        	'birthdate' => '1950-11-12', 
        	'gender' => 'Male', 
        	'address' => 'Street Siempre Viva', 
        	'role' => 'Admin', 
        	'password' => Hash::make('admin')
        ]);

    	$user = new App\User;
        $user->fullname = 'Melida Johana Gutierrez Perez';
        $user->email = 'mjgutierrez56@misena.edu.co';
        $user->phone = 3203879398;
        $user->birthdate = '2000-05-08';
        $user->gender = 'Female';
        $user->address = 'Cll. 27 #28-58';
        $user->role = 'Admin';
        $user->password = bcrypt('admin');
        $user->save();

        //Factory
        factory(App\User::class, 20)->create();
    }
}
