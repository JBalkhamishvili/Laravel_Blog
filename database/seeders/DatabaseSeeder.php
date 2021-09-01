<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        Category::truncate();
        User::truncate();
        Post::truncate();
//
//                $sport = Category::create([
//           'name' => 'Sport' ,
//            'slug' => 'sport'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family' ,
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work' ,
//            'slug' => 'work'
//        ]);

       \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(10)->create();
        // \App\Models\Category::factory(3)->create();
        \App\Models\Comment::factory(10)->create();

        Schema::enableForeignKeyConstraints();

    }
}
