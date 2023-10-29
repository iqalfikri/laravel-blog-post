<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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
            'name' => 'Muhammad Fikri Haikal',
            'username' => 'fikrihaikal',
            'email' => 'iqalfikri@gmail.com',
            'password' => bcrypt('whoami2002')
        ]);

        // User::create([
        //     'name' => 'Bejo Sutrisno',
        //     'email' => 'bejo@gmail.com',
        //     'password' => bcrypt('whoami2002')
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
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat quam rerum necessitatibus odio consequuntur consequatur do',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laudantium possimus at ea nostrum unde repudiandae cum quasi, beatae libero,</p><p> ullam perspiciatis quod officiis accusamus excepturi nobis ex magnam commodi facere eveniet error alias. Magni quisquam officiis alias eius fugit amet laborum. Eveniet amet consequuntur dignissimos ab id. Consequuntur sint iusto perferendis, possimus natus magni accusamus quaerat excepturi adipisci distinctio repellat mollitia fugiat veniam quidem molestias aliquam facere quo sapiente! Optio nulla quis ratione quisquam.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat quam rerum necessitatibus odio consequuntur consequatur do',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laudantium possimus at ea nostrum unde repudiandae cum quasi, beatae libero,</p><p> ullam perspiciatis quod officiis accusamus excepturi nobis ex magnam commodi facere eveniet error alias. Magni quisquam officiis alias eius fugit amet laborum. Eveniet amet consequuntur dignissimos ab id. Consequuntur sint iusto perferendis, possimus natus magni accusamus quaerat excepturi adipisci distinctio repellat mollitia fugiat veniam quidem molestias aliquam facere quo sapiente! Optio nulla quis ratione quisquam.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat quam rerum necessitatibus odio consequuntur consequatur do',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laudantium possimus at ea nostrum unde repudiandae cum quasi, beatae libero,</p><p> ullam perspiciatis quod officiis accusamus excepturi nobis ex magnam commodi facere eveniet error alias. Magni quisquam officiis alias eius fugit amet laborum. Eveniet amet consequuntur dignissimos ab id. Consequuntur sint iusto perferendis, possimus natus magni accusamus quaerat excepturi adipisci distinctio repellat mollitia fugiat veniam quidem molestias aliquam facere quo sapiente! Optio nulla quis ratione quisquam.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat quam rerum necessitatibus odio consequuntur consequatur do',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laudantium possimus at ea nostrum unde repudiandae cum quasi, beatae libero,</p><p> ullam perspiciatis quod officiis accusamus excepturi nobis ex magnam commodi facere eveniet error alias. Magni quisquam officiis alias eius fugit amet laborum. Eveniet amet consequuntur dignissimos ab id. Consequuntur sint iusto perferendis, possimus natus magni accusamus quaerat excepturi adipisci distinctio repellat mollitia fugiat veniam quidem molestias aliquam facere quo sapiente! Optio nulla quis ratione quisquam.</p>'
        // ]);
    }
}
