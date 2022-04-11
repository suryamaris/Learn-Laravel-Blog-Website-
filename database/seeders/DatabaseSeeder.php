<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
            'name' => 'Surya Maris',
            'username' => 'surya',
            'email' => 'surya@gmail.com',
            'password'=> bcrypt('123123')
        ]);
        User::factory(3)->create();
        // User::create([
        //     'name' => 'Saragih',
        //     'email' => 'saragih@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);
 
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
        //     'slug' => 'judu-pertama',
        //     'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, architecto cum. Similique ea sint id accusamus facere dolor.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, architecto cum. Similique ea sint id accusamus facere dolor. Repudiandae veritatis exercitationem debitis in ad mollitia eaque temporibus natus quaerat deleniti doloremque dolorem nobis dolorum, tempora quis tempore maiores quos laudantium id dicta? Quod excepturi tenetur sapiente cumque sequi. Labore dolor sequi obcaecati ea fuga non nulla, voluptas fugit eos hic, in et qui ratione odio autem saepe, illo laudantium! A deleniti repellat quo sunt! Rerum dignissimos suscipit, nesciunt harum laudantium veniam consequatur, dolorum ut repudiandae itaque eos officiis deleniti ducimus quidem exercitationem. Fugit quibusdam labore dolores, eaque quis neque illum?',
            
        //     'category_id'=>1,
        //     'user_id' =>1

        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judu-ke-dua',
        //     'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, architecto cum. Similique ea sint id accusamus facere dolor.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, architecto cum. Similique ea sint id accusamus facere dolor. Repudiandae veritatis exercitationem debitis in ad mollitia eaque temporibus natus quaerat deleniti doloremque dolorem nobis dolorum, tempora quis tempore maiores quos laudantium id dicta? Quod excepturi tenetur sapiente cumque sequi. Labore dolor sequi obcaecati ea fuga non nulla, voluptas fugit eos hic, in et qui ratione odio autem saepe, illo laudantium! A deleniti repellat quo sunt! Rerum dignissimos suscipit, nesciunt harum laudantium veniam consequatur, dolorum ut repudiandae itaque eos officiis deleniti ducimus quidem exercitationem. Fugit quibusdam labore dolores, eaque quis neque illum?',
            
        //     'category_id'=>1,
        //     'user_id' =>2

        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judu-ke-tiga',
        //     'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, architecto cum. Similique ea sint id accusamus facere dolor.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, architecto cum. Similique ea sint id accusamus facere dolor. Repudiandae veritatis exercitationem debitis in ad mollitia eaque temporibus natus quaerat deleniti doloremque dolorem nobis dolorum, tempora quis tempore maiores quos laudantium id dicta? Quod excepturi tenetur sapiente cumque sequi. Labore dolor sequi obcaecati ea fuga non nulla, voluptas fugit eos hic, in et qui ratione odio autem saepe, illo laudantium! A deleniti repellat quo sunt! Rerum dignissimos suscipit, nesciunt harum laudantium veniam consequatur, dolorum ut repudiandae itaque eos officiis deleniti ducimus quidem exercitationem. Fugit quibusdam labore dolores, eaque quis neque illum?',
            
        //     'category_id'=>2,
        //     'user_id' =>1

        // ]);
        
    }
}
