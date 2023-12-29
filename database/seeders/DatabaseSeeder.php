<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

//        User::truncate();
//        Post::truncate();
//        Category::truncate();

        $user = User::factory()->create([
            'username' => 'Rami Malik'
        ]);

         Post::factory(10)->create([
             'user_id' => $user->id
         ]);
    }
}
