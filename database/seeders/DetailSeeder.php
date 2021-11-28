<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail::Create([
            'book_id' => 1, 
            "author" => "JK Rowling", 
            "publisher" => "Harry Potter Publisher", 
            "year" => 2002, 
            "description" => "A story about a children in a magical world"
        ]);

        Detail::Create([
            'book_id' => 2, 
            "author" => "Alber Einstein", 
            "publisher" => "Science Study", 
            "year" => 2002, 
            "description" => "A book about Science study"
        ]);

        Detail::Create([
            'book_id' => 3, 
            "author" => "Fellexandro Ruby", 
            "publisher" => "Gramedia", 
            "year" => 2020, 
            "description" => "A book you do you and be different from other"
        ]);

        Detail::Create([
            'book_id' => 4, 
            "author" => "Habittan Neil", 
            "publisher" => "Gramedia", 
            "year" => 2020, 
            "description" => "A book the power of the habbit"
        ]);

        Detail::Create([
            'book_id' => 5, 
            "author" => "Progammer New Day", 
            "publisher" => "Gramedia", 
            "year" => 2020, 
            "description" => "A book about day full of internet"
        ]);

        Detail::Create([
            'book_id' => 6, 
            "author" => "CPUs", 
            "publisher" => "Gramedia", 
            "year" => 2020, 
            "description" => "A book part of CPU, history, and everythings"
        ]);

        Detail::Create([
            'book_id' => 7, 
            "author" => "Progammer Now Day", 
            "publisher" => "Gramedia", 
            "year" => 2020, 
            "description" => "A book about fundamental of Java"
        ]);

        Detail::Create([
            'book_id' => 8, 
            "author" => "Progammer Now Day", 
            "publisher" => "Gramedia", 
            "year" => 2020, 
            "description" => "A book about fundamental of PHP"
        ]);

        Detail::Create([
            'book_id' => 9, 
            "author" => "Progammer Now Day", 
            "publisher" => "Gramedia", 
            "year" => 2020, 
            "description" => "A book about fundamental of JavaScript"
        ]);

        Detail::Create([
            'book_id' => 10, 
            "author" => "Progammer Now Day", 
            "publisher" => "Gramedia", 
            "year" => 2020, 
            "description" => "A book about fundamental of Python"
        ]);

    }
}
