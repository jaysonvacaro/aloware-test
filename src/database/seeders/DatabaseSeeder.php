<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Comment::create(
            [
                'username' => 'username1',
                'body' => 'Comment1'
            ]
        );

        Comment::create(
            [
                'username' => 'username1',
                'body' => 'Comment2',
                'parent_id' => 1
            ]
        );

        Comment::create(
            [
                'username' => 'username1',
                'body' => 'Comment3',
                'parent_id' => 2
            ]
        );

    }
}
