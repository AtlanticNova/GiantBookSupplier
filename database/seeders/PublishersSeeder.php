<?php

namespace Database\Seeders;

use App\Models\publishers;
use Illuminate\Database\Seeder;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        publishers::factory()->count(3)->create();
    }
}
