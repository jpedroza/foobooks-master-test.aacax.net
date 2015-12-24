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

        $user = \App\User::firstOrCreate(['email' => 'john@harvard.edu']);
        $user->name = 'John';
        $user->email = 'john@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->save();

        $user = \App\User::firstOrCreate(['email' => 'admin@harvard.edu']);
        $user->name = 'Admin';
        $user->email = 'admin@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->save();
		
        $user = \App\User::firstOrCreate(['email' => 'linda@harvard.edu']);
        $user->name = 'Linda';
        $user->email = 'linda@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->save();

    }
}
