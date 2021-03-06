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

        $this->call(CustomerSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(ProvinsiSeeder::class);
        $this->call(SolutionSeeder::class);
        $this->call(TypeObjectSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ParamConfigSeeder::class);
        $this->call(UserSeeder::class);





        // \App\Models\User::factory(10)->create();
    }
}
