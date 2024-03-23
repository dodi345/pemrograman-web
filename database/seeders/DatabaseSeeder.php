<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(300)->create();
        // User::create([
        //     'name' => 'Dodi Sopandi',
        //     'email' => 'dodisopandi89@gmail',
        //     'password' => bcrypt('password')
        // ]);

        // User::create([
        //     'name' => 'Jamaludin',
        //     'email' => 'sopandid546@gmail',
        //     'password' => bcrypt('jamaludin')
        // ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Data Scientist',
            'slug' => 'data-scientist'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(300)->create();

        // Post::create([
        //     'title' => 'Judul Web Programming',
        //     'slug' => 'judul-web',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, architecto nam magni facilis voluptate',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, architecto nam magni facilis voluptate, distinctio provident laboriosam aspernatur neque animi ipsa accusantium id eius ullam delectus blanditiis consequatur, incidunt deleniti voluptatem. Alias suscipit modi, fuga repellat pariatur est neque perspiciatis qui sequi quod. Dicta repudiandae illum, nesciunt architecto eius porro odit impedit consectetur tempore alias, sint optio voluptatibus quibusdam earum facere ullam. Esse, maxime dolor delectus, ipsum, saepe quaerat nostrum laudantium sit tenetur tempore praesentium. Quo aliquid ratione provident. Adipisci saepe praesentium, rerum laborum, facilis ullam architecto iusto nihil labore voluptatibus quidem modi ea cumque minima? Delectus sequi natus dignissimos?',
        //     'category_id' => '1',
        //     'user_id' => '1'
        // ]);

        // Post::create([
        //     'title' => 'Judul Web Programming',
        //     'slug' => 'judul-data',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, architecto nam magni facilis voluptate',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, architecto nam magni facilis voluptate, distinctio provident laboriosam aspernatur neque animi ipsa accusantium id eius ullam delectus blanditiis consequatur, incidunt deleniti voluptatem. Alias suscipit modi, fuga repellat pariatur est neque perspiciatis qui sequi quod. Dicta repudiandae illum, nesciunt architecto eius porro odit impedit consectetur tempore alias, sint optio voluptatibus quibusdam earum facere ullam. Esse, maxime dolor delectus, ipsum, saepe quaerat nostrum laudantium sit tenetur tempore praesentium. Quo aliquid ratione provident. Adipisci saepe praesentium, rerum laborum, facilis ullam architecto iusto nihil labore voluptatibus quidem modi ea cumque minima? Delectus sequi natus dignissimos?',
        //     'category_id' => '1',
        //     'user_id' => '1'
        // ]);

        // Post::create([
        //     'title' => 'Judul Personal',
        //     'slug' => 'judul-personal',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, architecto nam magni facilis voluptate',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, architecto nam magni facilis voluptate, distinctio provident laboriosam aspernatur neque animi ipsa accusantium id eius ullam delectus blanditiis consequatur, incidunt deleniti voluptatem. Alias suscipit modi, fuga repellat pariatur est neque perspiciatis qui sequi quod. Dicta repudiandae illum, nesciunt architecto eius porro odit impedit consectetur tempore alias, sint optio voluptatibus quibusdam earum facere ullam. Esse, maxime dolor delectus, ipsum, saepe quaerat nostrum laudantium sit tenetur tempore praesentium. Quo aliquid ratione provident. Adipisci saepe praesentium, rerum laborum, facilis ullam architecto iusto nihil labore voluptatibus quidem modi ea cumque minima? Delectus sequi natus dignissimos?',
        //     'category_id' => '2',
        //     'user_id' => '1'
        // ]);

        // Post::create([
        //     'title' => 'Judul Personal 2',
        //     'slug' => 'judul-personal-2',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, architecto nam magni facilis voluptate',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis, architecto nam magni facilis voluptate, distinctio provident laboriosam aspernatur neque animi ipsa accusantium id eius ullam delectus blanditiis consequatur, incidunt deleniti voluptatem. Alias suscipit modi, fuga repellat pariatur est neque perspiciatis qui sequi quod. Dicta repudiandae illum, nesciunt architecto eius porro odit impedit consectetur tempore alias, sint optio voluptatibus quibusdam earum facere ullam. Esse, maxime dolor delectus, ipsum, saepe quaerat nostrum laudantium sit tenetur tempore praesentium. Quo aliquid ratione provident. Adipisci saepe praesentium, rerum laborum, facilis ullam architecto iusto nihil labore voluptatibus quidem modi ea cumque minima? Delectus sequi natus dignissimos?',
        //     'category_id' => '2',
        //     'user_id' => '2'
        // ]);

    }
}




