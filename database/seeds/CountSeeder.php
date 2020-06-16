<?php

use App\Count;
use Illuminate\Database\Seeder;

class CountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = new Count;
        $count->proyects = 0;
        $count->clients = 0;
        $count->coffee = 0;
        $count->building = 0;
        $count->save();
    }
}
