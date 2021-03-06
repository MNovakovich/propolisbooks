<?php

use Illuminate\Database\Seeder;
use App\Models\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DatabaseSeeder::class);
        factory(Company::class, 50)->create();
    }
}
