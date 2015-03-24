<?php

use Margaron\Blog\Blog;
use Margaron\Users\User;

class BlogTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('blogs')->delete();

        $faker = \Faker\Factory::create();

        $create = function () use ($faker) {
            $b = new Blog();
            $b->title = $faker->sentence(mt_rand(2, 5));
            $b->intro = $faker->paragraph(1);
            $b->content = $faker->paragraph(mt_rand(5, 16));
            $b->user_id = User::first()->id;
            $b->save();
        };

        for($i=0; $i<10; $i++){
            $create();
        }

    }

}