<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Chat;
use App\Models\Post;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /**
         * defaults
         */
        Role::insert([
            ['role' => 'user'],
            ['role' => 'admin'],
        ]);
        Category::insert([
            ['title' => 'music'],
            ['title' => 'random',]
        ]);
        User::insert([
            'role_id' => 2,
            'name' => 'MrKekovich',
            'email' => 'stas.kuryanov50@mail.ru',
            'password' => '$2y$10$dIf3xlzWer5MiO3pwNsdyOqCENyiPF6pYpgrWARkZu9andY4JP1FO',
            'profile_pic' => 'https://i.imgur.com/kMgRsLS.jpg',
            'created_at' => Carbon::now(),

        ]);

        /** factories */
        User::factory(5)
            ->has(
                Post::factory(3)
                    ->forCategory()
                    ->hasTags(5)
                    ->has(
                        Chat::factory(10)
                            ->forUser()
                    )

            )
            ->create();
    }
}
