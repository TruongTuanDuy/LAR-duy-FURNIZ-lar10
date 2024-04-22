<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Collection;
use App\Models\CategoryArticle;
use App\Models\Article;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Collection::factory(20)->create();
        CategoryArticle::factory(20)->create();
        Article::factory(20)->create();

        DB::table('category_products')->insert([
            'id' => 1,
            'name' => 'Root',
            '_lft' => 1,
            '_rgt' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
