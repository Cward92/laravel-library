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
        $count = 0;
        while($count < 30){
            Book::factory()
                ->hasAuthors(rand(1,2))
                ->hasGenres(rand(1,3))
                ->create();
            $count++;
        }
    }
}
