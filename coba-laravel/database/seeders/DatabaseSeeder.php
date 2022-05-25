<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Catur Saputro',
        //     'email' => 'catur.ccd@gmail.com',
        //     'password' => bcrypt('rahasiabgt')
        // ]);

        // User::create([
        //     'name' => 'Bushido',
        //     'email' => 'bushido@gmail.com',
        //     'password' => bcrypt('rahasiabgt')
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
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, illum. Quia itaque odit, enim perspiciatis excepturi,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, illum. Quia itaque odit, enim perspiciatis excepturi, consectetur voluptatem sunt inventore ipsum quisquam molestias blanditiis. Quidem et non obcaecati magnam eaque vero, consectetur reiciendis, quod deleniti est nulla fuga dignissimos quam eum voluptates ullam nemo veritatis. Praesentium voluptas eligendi quas doloribus cum eaque velit ipsum ducimus neque nobis vitae quis maiores et ea recusandae illum exercitationem doloremque, libero ipsam repudiandae ratione? Omnis vel veniam, quam reiciendis veritatis aut minus. Nisi nemo, dignissimos sunt odio unde eligendi fugit beatae neque cum deleniti harum ex perferendis numquam ipsa qui sed, culpa voluptate illo.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, illum. Quia itaque odit, enim perspiciatis excepturi,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, illum. Quia itaque odit, enim perspiciatis excepturi, consectetur voluptatem sunt inventore ipsum quisquam molestias blanditiis. Quidem et non obcaecati magnam eaque vero, consectetur reiciendis, quod deleniti est nulla fuga dignissimos quam eum voluptates ullam nemo veritatis. Praesentium voluptas eligendi quas doloribus cum eaque velit ipsum ducimus neque nobis vitae quis maiores et ea recusandae illum exercitationem doloremque, libero ipsam repudiandae ratione? Omnis vel veniam, quam reiciendis veritatis aut minus. Nisi nemo, dignissimos sunt odio unde eligendi fugit beatae neque cum deleniti harum ex perferendis numquam ipsa qui sed, culpa voluptate illo.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, illum. Quia itaque odit, enim perspiciatis excepturi,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, illum. Quia itaque odit, enim perspiciatis excepturi, consectetur voluptatem sunt inventore ipsum quisquam molestias blanditiis. Quidem et non obcaecati magnam eaque vero, consectetur reiciendis, quod deleniti est nulla fuga dignissimos quam eum voluptates ullam nemo veritatis. Praesentium voluptas eligendi quas doloribus cum eaque velit ipsum ducimus neque nobis vitae quis maiores et ea recusandae illum exercitationem doloremque, libero ipsam repudiandae ratione? Omnis vel veniam, quam reiciendis veritatis aut minus. Nisi nemo, dignissimos sunt odio unde eligendi fugit beatae neque cum deleniti harum ex perferendis numquam ipsa qui sed, culpa voluptate illo.',
        //     'category_id' => 2 ,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, illum. Quia itaque odit, enim perspiciatis excepturi,',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, illum. Quia itaque odit, enim perspiciatis excepturi, consectetur voluptatem sunt inventore ipsum quisquam molestias blanditiis. Quidem et non obcaecati magnam eaque vero, consectetur reiciendis, quod deleniti est nulla fuga dignissimos quam eum voluptates ullam nemo veritatis. Praesentium voluptas eligendi quas doloribus cum eaque velit ipsum ducimus neque nobis vitae quis maiores et ea recusandae illum exercitationem doloremque, libero ipsam repudiandae ratione? Omnis vel veniam, quam reiciendis veritatis aut minus. Nisi nemo, dignissimos sunt odio unde eligendi fugit beatae neque cum deleniti harum ex perferendis numquam ipsa qui sed, culpa voluptate illo.',
        //     'category_id' => 2 ,
        //     'user_id' => 2
        // ]);

    }
}
