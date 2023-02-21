<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();


        $user = \App\Models\User::factory()->create();

         $personal = Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna porttitor rhoncus dolor purus non.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna porttitor rhoncus dolor purus non. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna neque. Neque ornare aenean euismod elementum nisi quis eleifend. Magna eget est lorem ipsum dolor sit amet consectetur. Sed turpis tincidunt id aliquet risus feugiat in ante metus. Lacus sed viverra tellus in hac habitasse. Nullam ac tortor vitae purus faucibus. Vel fringilla est ullamcorper eget nulla. Consequat ac felis donec et. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna porttitor rhoncus dolor purus non.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna porttitor rhoncus dolor purus non.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna porttitor rhoncus dolor purus non. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna neque. Neque ornare aenean euismod elementum nisi quis eleifend. Magna eget est lorem ipsum dolor sit amet consectetur. Sed turpis tincidunt id aliquet risus feugiat in ante metus. Lacus sed viverra tellus in hac habitasse. Nullam ac tortor vitae purus faucibus. Vel fringilla est ullamcorper eget nulla. Consequat ac felis donec et. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna porttitor rhoncus dolor purus non.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna porttitor rhoncus dolor purus non.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna porttitor rhoncus dolor purus non. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna neque. Neque ornare aenean euismod elementum nisi quis eleifend. Magna eget est lorem ipsum dolor sit amet consectetur. Sed turpis tincidunt id aliquet risus feugiat in ante metus. Lacus sed viverra tellus in hac habitasse. Nullam ac tortor vitae purus faucibus. Vel fringilla est ullamcorper eget nulla. Consequat ac felis donec et. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna porttitor rhoncus dolor purus non.</p>'
        ]);
    }
}
