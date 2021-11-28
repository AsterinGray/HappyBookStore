<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::Create(['category' => 'Fiction']);
        Category::Create(['category' => 'Science']);
        Category::Create(['category' => 'Motivational']);
        Category::Create(['category' => 'Self Development']);
        Category::Create(['category' => 'Technology']);
        Category::Create(['category' => 'Photography']);
        Category::Create(['category' => 'Food']);
        Category::Create(['category' => 'Progamming']);
        Category::Create(['category' => 'Law']);
        Category::Create(['category' => 'Architecture']);
    }
}
