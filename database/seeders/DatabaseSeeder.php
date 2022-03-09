<?php

namespace Database\Seeders;

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
        create_ferran_user();

        create_sergic_user();

        create_gabriel_user();

        create_sergi_user();

    }
}
