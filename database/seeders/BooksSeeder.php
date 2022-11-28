<?php

namespace Database\Seeders;

use App\Models\books;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        books::factory()->count(50)->create();
    }
}
