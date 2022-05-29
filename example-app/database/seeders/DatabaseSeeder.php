<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Category;
use App\models\User;
use App\models\Post;



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

        User::create([
            'name' => 'septagian',
            'email' => 'septagian@gmail.com',
            'password' =>  bcrypt('12345')
        ]);
        User::create([
            'name' => 'udinbatok',
            'email' => 'udinbatokotok@gmail.com',
            'password' =>  bcrypt('12345')
        ]);
        User::create([
            'name' => 'idamboylah',
            'email' => 'boylahidam@gmail.com',
            'password' =>  bcrypt('12345')
        ]);
        User::create([
            'name' => 'phodol',
            'email' => 'dodolipak@gmail.com',
            'password' =>  bcrypt('12345')
        ]);
        User::create([
            'name' => 'samepe',
            'email' => 'sampeda@gmail.com',
            'password' =>  bcrypt('12345')
        ]);
        User::create([
            'name' => 'joyboy',
            'email' => 'joyblah@gmail.com',
            'password' =>  bcrypt('12345')
        ]);
        User::create([
            'name' => 'mamadolay',
            'email' => 'testylAYCY@gmail.com',
            'password' =>  bcrypt('12345')
        ]);
        User::create([
            'name' => 'lacalchill',
            'email' => 'bradaf@gmail.com',
            'password' =>  bcrypt('12345')
        ]);


        Category::create(
            [
                'name' => 'web programing',
                'slug' => 'web-program'
            ]
        );

        Category::create(
            [
                'name' => 'web design',
                'slug' => 'web-desgn'
            ]
        );

        Category::create(
            [
                'name' => 'personal',
                'slug' => 'personal'
            ]
        );

        Post::create([
                 'title' => 'judul pertama',
                 'slug' => 'judul-pertama',
                 'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis mollitia atque sit cupiditate minus in impedit neque quisquam magnam quam, fuga esse commodi delectus voluptates? Possimus, voluptate iure. Ab,',
                 'body' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis mollitia atque sit cupiditate minus in impedit neque quisquam magnam quam, fuga esse commodi delectus voluptates? Possimus, voluptate iure. Ab, ad quidem cum ea iste tenetur, odio voluptate eos dolores voluptatibus rerum consequuntur non culpa maiores eius magnam velit qui nesciunt nemo aperiam et! Quibusdam repellat omnis excepturi adipisci ullam, doloremque ipsam deleniti ipsum obcaecati ex minus itaque culpa quaerat quis vero quae soluta commodi in! Molestiae eveniet quae consectetur molestias dicta aliquid libero minima, voluptatum maiores a nostrum similique veniam itaque ipsa debitis quaerat incidunt. Quo debitis cupiditate quaerat quae.',
                 'category_id' => 1,
                 'user_id' => 1
             ]);
    
             Post::create([
                 'title' => 'judul pertama',
                 'slug' => 'judul-ke_dua',
                 'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis mollitia atque sit cupiditate minus in impedit neque quisquam magnam quam, fuga esse commodi delectus voluptates? Possimus, voluptate iure. Ab,',
                 'body' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis mollitia atque sit cupiditate minus in impedit neque quisquam magnam quam, fuga esse commodi delectus voluptates? Possimus, voluptate iure. Ab, ad quidem cum ea iste tenetur, odio voluptate eos dolores voluptatibus rerum consequuntur non culpa maiores eius magnam velit qui nesciunt nemo aperiam et! Quibusdam repellat omnis excepturi adipisci ullam, doloremque ipsam deleniti ipsum obcaecati ex minus itaque culpa quaerat quis vero quae soluta commodi in! Molestiae eveniet quae consectetur molestias dicta aliquid libero minima, voluptatum maiores a nostrum similique veniam itaque ipsa debitis quaerat incidunt. Quo debitis cupiditate quaerat quae.',
                 'category_id' => 1,
                 'user_id' => 2
             ]);
    
             Post::create([
                 'title' => 'judul ketiga',
                 'slug' => 'judul-ke_tiga',
                 'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis mollitia atque sit cupiditate minus in impedit neque quisquam magnam quam, fuga esse commodi delectus voluptates? Possimus, voluptate iure. Ab,',
                 'body' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis mollitia atque sit cupiditate minus in impedit neque quisquam magnam quam, fuga esse commodi delectus voluptates? Possimus, voluptate iure. Ab, ad quidem cum ea iste tenetur, odio voluptate eos dolores voluptatibus rerum consequuntur non culpa maiores eius magnam velit qui nesciunt nemo aperiam et! Quibusdam repellat omnis excepturi adipisci ullam, doloremque ipsam deleniti ipsum obcaecati ex minus itaque culpa quaerat quis vero quae soluta commodi in! Molestiae eveniet quae consectetur molestias dicta aliquid libero minima, voluptatum maiores a nostrum similique veniam itaque ipsa debitis quaerat incidunt. Quo debitis cupiditate quaerat quae.',
                 'category_id' => 2,
                 'user_id' => 3
             ]);


    }
}
