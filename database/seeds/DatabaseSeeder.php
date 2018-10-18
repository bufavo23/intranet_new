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
        $this->call(PermissionsTableSeeder::class);
        $this->call(DestinationsTableSeeder::class);
        $this->call(MotivesTableSeeder::class);
        $this->call(StatuSendsTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(TypeItemsTableSeeder::class);
        $this->call(TypeProvidersTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
