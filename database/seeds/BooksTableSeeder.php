<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $author_id = \App\Author::where('last_name','=','Fitzgerald')->pluck('id');
        DB::table('books')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'title' => '1.mp4',
        'author_id' => $author_id,
        'user_id' => 1,
        'published' => 100, //percent complete
        'cover' => 'img/thumbnail.png',
        'purchase_link' => 'this video gives a overview of the .etc file',//description
        ]);

        $author_id = \App\Author::where('last_name','=','Plath')->pluck('id');
        DB::table('books')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'title' => '2.mp4',
        'author_id' => $author_id,
        'user_id' => 1,
        'published' => 90,//percent complete
        'cover' => 'img/thumbnail.png',
        'purchase_link' => 'this is a high level view of the way Laravel is a framework of frameworks',//description
        ]);

        $author_id = \App\Author::where('last_name','=','Angelou')->pluck('id');
        DB::table('books')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'title' => '3.mp4',
        'author_id' => $author_id,
        'user_id' => 1,
        'published' => 90,//percent complete
        'cover' => 'img/thumbnail.png',
        'purchase_link' => 'this describes the way Laravel uses the MVC framework',//description
        ]);
		
		$author_id = \App\Author::where('last_name','=','Angelou')->pluck('id');
        DB::table('books')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'title' => '4.mp4',
        'author_id' => $author_id,
        'user_id' => 1,
        'published' => 90,//percent complete
        'cover' => 'img/thumbnail.png',
        'purchase_link' => 'this discusses the routes.php file',//description
        ]);
    }
}
