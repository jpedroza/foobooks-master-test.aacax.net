<?php

use Illuminate\Database\Seeder;

class BookTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $books =[
            '1.mp4' => ['mysql','security','php','model'],
            '2.mp4' => ['mysql','security','php','controller'],
            '3.mp4' => ['ui','nonfiction','js','view'],
			'4.mp4' => ['mysql','ui','html','css']
			
        ];

        foreach($books as $title => $tags) {

            $book = \App\Book::where('title','like',$title)->first();

            foreach($tags as $tagName) {
                $tag = \App\Tag::where('name','LIKE',$tagName)->first();
                $book->tags()->save($tag);
            }
            
        }
    }
}
