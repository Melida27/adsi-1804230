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
            'photo' => 'imgs/1585783434.png',
        	'address' => 'Cll. 56 #12-20', 
        	'role' => 'Editor', 
        	'password' => Hash::make('editor')
        ]);

    	$user = new App\User;
        $user->fullname = 'Melida Johana Gutierrez Perez';
        $user->email = 'mjgutierrez56@misena.edu.co';
        $user->phone = 3203879398;
        $user->birthdate = '2000-05-08';
        $user->gender = 'Female';
        $user->photo = 'imgs/1588693276.png';
        $user->address = 'Cll. 27 #28-58';
        $user->role = 'Admin';
        $user->password = bcrypt('admin');
        $user->save();

        $user = new App\User;
        $user->fullname = 'Andres Felipe Ospina Muñoz';
        $user->email = 'afospina27@gmail.com';
        $user->phone = 3122660370;
        $user->birthdate = '1996-02-17';
        $user->gender = 'Male';
        $user->photo = 'imgs/771188_man_512x512.png';
        $user->address = 'Cll. 56 #25-10';
        $user->role = 'Editor';
        $user->password = bcrypt('editor');
        $user->save();

        $user = new App\User;
        $user->fullname = 'Juanita Ramirez Giraldo';
        $user->email = 'juanita96@gmail.com';
        $user->phone = 3152104567;
        $user->birthdate = '2000-01-12';
        $user->gender = 'Female';
        $user->photo = 'imgs/avatar-woman.png';
        $user->address = 'Cll. 12 #33-67';
        $user->role = 'Editor';
        $user->password = bcrypt('editor');
        $user->save();

        $user = new App\User;
        $user->fullname = 'Brahian Alejandro Perez';
        $user->email = 'brahianperez12@gmail.com';
        $user->phone = 3203667890;
        $user->birthdate = '1999-01-11';
        $user->gender = 'Male';
        $user->photo = 'imgs/nam5678333.jpg';
        $user->address = 'Cll. 23 #12-10';
        $user->role = 'Editor';
        $user->password = bcrypt('editor');
        $user->save();
    }
}
