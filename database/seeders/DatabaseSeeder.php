<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use GuzzleHttp\Promise\Create;
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
        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(6)->create([
            'user_id' => $user->id
        ]);
        $user = User::factory()->create();

            // Category::create([
            //     'name' => 'Personall',
            //     'slug' => 'personall'
            // ]);

            // Category::create([
            //     'name' => 'Family',
            //     'slug' => 'family'
            // ]);

            // Category::create([
            //     'name' => 'Wrok',
            //     'slug' => 'work'
            // ]);

            // Post::create([
            //      'title' => "My work Post",
            //      'slug' => "work",
            //      'excerpt' => "Loremm ispum",
            //      'body' => "Loremmm ispum",
            //      'user_id' => 75,
            //      'category_id' => 75,
            //      'thumbnail' => 'https://cdn.dribbble.com/users/4335179/screenshots/17742033/media/46699a79843a64944da235ee817d00bd.png'

            // ]);
    }
}
