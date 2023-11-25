<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    //     User::create([
    //         'name' => 'Taufik Syarul Hidayat',
    //         'email' => 'taufikSyarulH@gmail',
    //         'password' => bcrypt('12345')
    //     ]);
        
    //     User::create([
    //         'name' => 'kiki Rezky Safitri',
    //         'email' => 'kikiRezkyS@gmail',
    //         'password' => bcrypt('12345')
    //     ]);
        
        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);
        
        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque reprehenderit debitis sapiente nobis maiores assumenda labore a impedit mollitia eius. Cupiditate, nostrum. Dignissimos ratione doloremque animi unde sequi nam molestias saepe quo labore iure esse eligendi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque reprehenderit debitis sapiente nobis maiores assumenda labore a impedit mollitia eius. Cupiditate, nostrum. Dignissimos ratione doloremque animi unde sequi nam molestias saepe quo labore iure esse eligendi, numquam explicabo ipsa dolor minima ullam ad deserunt similique accusamus. Laudantium enim illum temporibus placeat repellendus praesentium vero, ea veniam aperiam dolorem delectus fuga voluptatibus voluptatum vel nisi suscipit velit sunt exercitationem alias doloremque quaerat accusamus? Quia, debitis id soluta error delectus similique nam fugiat perferendis est temporibus vel voluptates officia, cupiditate sapiente, omnis tenetur ut aspernatur! Animi voluptatem veniam obcaecati nostrum quia accusantium.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque reprehenderit debitis sapiente nobis maiores assumenda labore a impedit mollitia eius. Cupiditate, nostrum. Dignissimos ratione doloremque animi unde sequi nam molestias saepe quo labore iure esse eligendi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque reprehenderit debitis sapiente nobis maiores assumenda labore a impedit mollitia eius. Cupiditate, nostrum. Dignissimos ratione doloremque animi unde sequi nam molestias saepe quo labore iure esse eligendi, numquam explicabo ipsa dolor minima ullam ad deserunt similique accusamus. Laudantium enim illum temporibus placeat repellendus praesentium vero, ea veniam aperiam dolorem delectus fuga voluptatibus voluptatum vel nisi suscipit velit sunt exercitationem alias doloremque quaerat accusamus? Quia, debitis id soluta error delectus similique nam fugiat perferendis est temporibus vel voluptates officia, cupiditate sapiente, omnis tenetur ut aspernatur! Animi voluptatem veniam obcaecati nostrum quia accusantium.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque reprehenderit debitis sapiente nobis maiores assumenda labore a impedit mollitia eius. Cupiditate, nostrum. Dignissimos ratione doloremque animi unde sequi nam molestias saepe quo labore iure esse eligendi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque reprehenderit debitis sapiente nobis maiores assumenda labore a impedit mollitia eius. Cupiditate, nostrum. Dignissimos ratione doloremque animi unde sequi nam molestias saepe quo labore iure esse eligendi, numquam explicabo ipsa dolor minima ullam ad deserunt similique accusamus. Laudantium enim illum temporibus placeat repellendus praesentium vero, ea veniam aperiam dolorem delectus fuga voluptatibus voluptatum vel nisi suscipit velit sunt exercitationem alias doloremque quaerat accusamus? Quia, debitis id soluta error delectus similique nam fugiat perferendis est temporibus vel voluptates officia, cupiditate sapiente, omnis tenetur ut aspernatur! Animi voluptatem veniam obcaecati nostrum quia accusantium.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque reprehenderit debitis sapiente nobis maiores assumenda labore a impedit mollitia eius. Cupiditate, nostrum. Dignissimos ratione doloremque animi unde sequi nam molestias saepe quo labore iure esse eligendi',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque reprehenderit debitis sapiente nobis maiores assumenda labore a impedit mollitia eius. Cupiditate, nostrum. Dignissimos ratione doloremque animi unde sequi nam molestias saepe quo labore iure esse eligendi, numquam explicabo ipsa dolor minima ullam ad deserunt similique accusamus. Laudantium enim illum temporibus placeat repellendus praesentium vero, ea veniam aperiam dolorem delectus fuga voluptatibus voluptatum vel nisi suscipit velit sunt exercitationem alias doloremque quaerat accusamus? Quia, debitis id soluta error delectus similique nam fugiat perferendis est temporibus vel voluptates officia, cupiditate sapiente, omnis tenetur ut aspernatur! Animi voluptatem veniam obcaecati nostrum quia accusantium.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
     }
}