<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::Create(['category_id' => 1, 'title' => "Harry Potter"]);
        Book::Create(['category_id' => 2, 'title' => "Learn about Science"]);
        Book::Create(['category_id' => 3, 'title' => "You Do You"]);
        Book::Create(['category_id' => 4, 'title' => "The Power of Habbit"]);
        Book::Create(['category_id' => 5, 'title' => "Internet of Things"]);
        Book::Create(['category_id' => 5, 'title' => "CPUs"]);
        Book::Create(['category_id' => 8, 'title' => "Fundamental of Java"]);
        Book::Create(['category_id' => 8, 'title' => "Fundamental of PHP"]);
        Book::Create(['category_id' => 8, 'title' => "Fundamental of JavaScript"]);
        Book::Create(['category_id' => 8, 'title' => "Fundamental of Python"]);
    }
}
