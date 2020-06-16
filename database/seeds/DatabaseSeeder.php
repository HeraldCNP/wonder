<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(PermissionInfoSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CountSeeder::class);
    }
}
