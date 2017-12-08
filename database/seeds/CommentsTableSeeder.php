<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->truncate();
        $comments = [
            [
                'post_id' => '1',
                'body' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'post_id' => '1',
                'body' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'post_id' => '2',
                'body' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'post_id' => '3',
                'body' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'post_id' => '4',
                'body' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]
        ];
        DB::table('comments')->insert($comments);
    }
}
