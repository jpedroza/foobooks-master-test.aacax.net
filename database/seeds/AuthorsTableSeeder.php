<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'first_name' => 'Joe',
        'last_name' => 'Smith',
        'birth_year' => 1975,
        //'bio_url' => 'https://en.wikipedia.org/wiki/F._Scott_Fitzgerald',
        ]);

        DB::table('authors')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'first_name' => 'Joe',
        'last_name' => 'Smith',
        'birth_year' => 1993,
        //'bio_url' => 'https://en.wikipedia.org/wiki/Sylvia_Plath',
        ]);

        DB::table('authors')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'first_name' => 'John',
        'last_name' => 'Pedroza',
        'birth_year' => 1969,
        //'bio_url' => 'https://en.wikipedia.org/wiki/Maya_Angelou',
        ]);
		
		        DB::table('authors')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'first_name' => 'Jan',
        'last_name' => 'Connor',
        'birth_year' => 1960,
        //'bio_url' => 'https://en.wikipedia.org/wiki/Maya_Angelou',
        ]);

    }
}
