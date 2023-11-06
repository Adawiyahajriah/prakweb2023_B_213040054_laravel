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
    public function run(): void
    {
        User::factory(3)->create();

        User::create([
            'name' => 'Adawiyah ajriah',
            'email' => 'adawiyah.213040054@mail.unpas.ac.id',
            'pasword' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'putri legiani',
            'email' => '<putri class="213040039"></putri>@mail.unpas.ac.id',
            'pasword' => bcrypt('123456')
        ]);

        Category::create([
            'name' => 'web programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'web design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

//         Post::create([
//             'title' => 'Judul pertama',
//             'slug' => 'judul-pertama',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusamus corrupti eligendi, corporis suscipit, commodi aliquam delectus doloribus quia, tempora sed itaque est et! Tempore eveniet similique blanditiis a dolorum dolorem, ut sapiente, aperiam error laborum placeat ratione eaque suscipit nihil nisi, perspiciatis cupiditate non. Hic earum, magnam quibusdam doloremque voluptatum non, obcaecati eius quaerat aut ab ut tempora nesciunt ex animi molestiae assumenda tempore odit nemo repellat! Eos eaque, debitis inventore incidunt suscipit dolore amet in facere itaque illo quo, esse non animi cumque ut harum iusto. Corrupti repellendus sint nisi saepe veritatis voluptates totam quas consectetur, ipsa reprehenderit, corporis dignissimos, officia atque suscipit nam! Rerum error blanditiis quo, quia sit fugiat ad cumque nemo dignissimos alias magni officia.',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusamus corrupti eligendi, corporis suscipit, commodi aliquam delectus doloribus quia, tempora sed itaque est et! Tempore eveniet similique blanditiis a dolorum dolorem, ut sapiente, aperiam error laborum placeat ratione eaque suscipit nihil nisi, perspiciatis cupiditate non. Hic earum, magnam quibusdam doloremque voluptatum non, obcaecati eius quaerat aut ab ut tempora nesciunt ex animi molestiae assumenda tempore odit nemo repellat! Eos eaque, debitis inventore incidunt suscipit dolore amet in facere itaque illo quo, esse non animi cumque ut harum iusto. Corrupti repellendus sint nisi saepe veritatis voluptates totam quas consectetur, ipsa reprehenderit, corporis dignissimos, officia atque suscipit nam! Rerum error blanditiis quo, quia sit fugiat ad cumque nemo dignissimos alias magni officia.',
//             'category_id' => 1,
//             'user_id' => 1
//         ]);

//         Post::create([
//             'title' => 'Judul kedua',
//             'slug' => 'judul-kedua',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusamus corrupti eligendi, corporis suscipit, commodi aliquam delectus doloribus quia, tempora sed itaque est et! Tempore eveniet similique blanditiis a dolorum dolorem, ut sapiente, aperiam error laborum placeat ratione eaque suscipit nihil nisi, perspiciatis cupiditate non. Hic earum, magnam quibusdam doloremque voluptatum non, obcaecati eius quaerat aut ab ut tempora nesciunt ex animi molestiae assumenda tempore odit nemo repellat! Eos eaque, debitis inventore incidunt suscipit dolore amet in facere itaque illo quo, esse non animi cumque ut harum iusto. Corrupti repellendus sint nisi saepe veritatis voluptates totam quas consectetur, ipsa reprehenderit, corporis dignissimos, officia atque suscipit nam! Rerum error blanditiis quo, quia sit fugiat ad cumque nemo dignissimos alias magni officia.',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusamus corrupti eligendi, corporis suscipit, commodi aliquam delectus doloribus quia, tempora sed itaque est et! Tempore eveniet similique blanditiis a dolorum dolorem, ut sapiente, aperiam error laborum placeat ratione eaque suscipit nihil nisi, perspiciatis cupiditate non. Hic earum, magnam quibusdam doloremque voluptatum non, obcaecati eius quaerat aut ab ut tempora nesciunt ex animi molestiae assumenda tempore odit nemo repellat! Eos eaque, debitis inventore incidunt suscipit dolore amet in facere itaque illo quo, esse non animi cumque ut harum iusto. Corrupti repellendus sint nisi saepe veritatis voluptates totam quas consectetur, ipsa reprehenderit, corporis dignissimos, officia atque suscipit nam! Rerum error blanditiis quo, quia sit fugiat ad cumque nemo dignissimos alias magni officia.',
//             'category_id' => 1,
//             'user_id' => 1
//         ]);

//         Post::create([
//             'title' => 'Judul ketiga',
//             'slug' => 'judul-ketiga',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusamus corrupti eligendi, corporis suscipit, commodi aliquam delectus doloribus quia, tempora sed itaque est et! Tempore eveniet similique blanditiis a dolorum dolorem, ut sapiente, aperiam error laborum placeat ratione eaque suscipit nihil nisi, perspiciatis cupiditate non. Hic earum, magnam quibusdam doloremque voluptatum non, obcaecati eius quaerat aut ab ut tempora nesciunt ex animi molestiae assumenda tempore odit nemo repellat! Eos eaque, debitis inventore incidunt suscipit dolore amet in facere itaque illo quo, esse non animi cumque ut harum iusto. Corrupti repellendus sint nisi saepe veritatis voluptates totam quas consectetur, ipsa reprehenderit, corporis dignissimos, officia atque suscipit nam! Rerum error blanditiis quo, quia sit fugiat ad cumque nemo dignissimos alias magni officia.',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusamus corrupti eligendi, corporis suscipit, commodi aliquam delectus doloribus quia, tempora sed itaque est et! Tempore eveniet similique blanditiis a dolorum dolorem, ut sapiente, aperiam error laborum placeat ratione eaque suscipit nihil nisi, perspiciatis cupiditate non. Hic earum, magnam quibusdam doloremque voluptatum non, obcaecati eius quaerat aut ab ut tempora nesciunt ex animi molestiae assumenda tempore odit nemo repellat! Eos eaque, debitis inventore incidunt suscipit dolore amet in facere itaque illo quo, esse non animi cumque ut harum iusto. Corrupti repellendus sint nisi saepe veritatis voluptates totam quas consectetur, ipsa reprehenderit, corporis dignissimos, officia atque suscipit nam! Rerum error blanditiis quo, quia sit fugiat ad cumque nemo dignissimos alias magni officia.',
//             'category_id' => 2,
//             'user_id' => 1
//         ]);

//         Post::create([
//             'title' => 'Judul ke empat',
//             'slug' => 'judul-ke empat',
//             'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusamus corrupti eligendi, corporis suscipit, commodi aliquam delectus doloribus quia, tempora sed itaque est et! Tempore eveniet similique blanditiis a dolorum dolorem, ut sapiente, aperiam error laborum placeat ratione eaque suscipit nihil nisi, perspiciatis cupiditate non. Hic earum, magnam quibusdam doloremque voluptatum non, obcaecati eius quaerat aut ab ut tempora nesciunt ex animi molestiae assumenda tempore odit nemo repellat! Eos eaque, debitis inventore incidunt suscipit dolore amet in facere itaque illo quo, esse non animi cumque ut harum iusto. Corrupti repellendus sint nisi saepe veritatis voluptates totam quas consectetur, ipsa reprehenderit, corporis dignissimos, officia atque suscipit nam! Rerum error blanditiis quo, quia sit fugiat ad cumque nemo dignissimos alias magni officia.',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusamus corrupti eligendi, corporis suscipit, commodi aliquam delectus doloribus quia, tempora sed itaque est et! Tempore eveniet similique blanditiis a dolorum dolorem, ut sapiente, aperiam error laborum placeat ratione eaque suscipit nihil nisi, perspiciatis cupiditate non. Hic earum, magnam quibusdam doloremque voluptatum non, obcaecati eius quaerat aut ab ut tempora nesciunt ex animi molestiae assumenda tempore odit nemo repellat! Eos eaque, debitis inventore incidunt suscipit dolore amet in facere itaque illo quo, esse non animi cumque ut harum iusto. Corrupti repellendus sint nisi saepe veritatis voluptates totam quas consectetur, ipsa reprehenderit, corporis dignissimos, officia atque suscipit nam! Rerum error blanditiis quo, quia sit fugiat ad cumque nemo dignissimos alias magni officia.',
//             'category_id' => 2,
//             'user_id' => 2
//         ]);
    }
}
