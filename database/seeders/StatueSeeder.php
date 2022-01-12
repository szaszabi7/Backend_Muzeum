<?php

namespace Database\Seeders;

use App\Models\Statue;
use Illuminate\Database\Seeder;

class StatueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statue::factory(15)->create();
    }
}
