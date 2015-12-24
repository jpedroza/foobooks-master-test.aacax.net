<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['mysql','security','php','model','view','controller','nonfiction','ui','css','js','html'];

        foreach($data as $tagName) {
            $tag = new \App\Tag();
            $tag->name = $tagName;
            $tag->save();
        }
    }
}

