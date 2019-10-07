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
//         $this->call(UsersTableSeeder::class);
         $this->call(CategoryBlogTableSeeder::class);
         $this->call(DomainTableSeeder::class);
         $this->call(TemplateLibTableSeeder::class);

        // role user seeder
        $this->call(RolesSeeder::class);
         // user seeder
        $this->call(UsersTableSeeder::class);

    }
}
