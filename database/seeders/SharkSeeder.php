<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shark;

class SharkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Shark::factory(10)->create();
    }
}
