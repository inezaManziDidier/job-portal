<?php

namespace Database\Seeders;

use App\Models\JobRequirement;
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
        // $this->call(CategorySeeder::class);
        // $this->call(EmployerUserSeeder::class);
        // $this->call(EmployerSeeder::class);
        // $this->call(JobSeeder::class);
        // $this->call(JobRequirementSeeder::class);
        $this->call(AdminUserSeeder::class);
    }
}
