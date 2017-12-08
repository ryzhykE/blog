<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts');
        $posts = [
            [
                'title' => 'news1',
                'content' => str_random(100),
                'slug' => 'article1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'title' => 'news2',
                'content' => str_random(100),
                'slug' => 'article2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'title' => 'news3',
                'content' => str_random(100),
                'slug' => 'article3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'title' => 'news4',
                'content' => str_random(100),
                'slug' => 'article4',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'title' => 'news5',
                'content' => str_random(100),
                'slug' => 'article5',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ];
        DB::table('posts')->insert($posts);
    }
}