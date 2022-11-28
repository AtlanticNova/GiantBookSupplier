<?php

namespace Database\Seeders;

use App\Models\bookCategory;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        bookCategory::factory()->count(5)->create();
    }
}
