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
        // $this->call(ProjectsTableSeeder::class);
        // $this->call(BannersTableSeeder::class);
        // $this->call(BlogsTableSeeder::class);
        // $this->call(ClientsTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        // $this->call(TeamsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
