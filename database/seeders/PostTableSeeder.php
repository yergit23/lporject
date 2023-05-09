<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::find(6)->update(['title' => 'newtitle611']);
    }
}
