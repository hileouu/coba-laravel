<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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
        

        User::create([
            'name' => 'Wilsa Dwi ',
            'username' => 'wilsadwi',
            'email' => 'wilsa@gmail.com',
            'password' => bcrypt('wiwil')
        ]);

        // User::create([
        //     'name' => 'Rimba Apriano ',
        //     'email' => 'rimba@gmail.com',
        //     'password' => bcrypt('wiwil')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet maiores atque blanditiis, ad debitis vel iusto? Labore quasi facere laboriosam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet maiores atque blanditiis, ad debitis vel iusto? Labore quasi facere laboriosam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet maiores atque blanditiis, ad debitis vel iusto? Labore quasi facere laboriosam.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet maiores atque blanditiis, ad debitis vel iusto? Labore quasi facere laboriosam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}