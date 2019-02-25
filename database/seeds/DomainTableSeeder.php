<?php

use Illuminate\Database\Seeder;

class DomainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Domain::create([
            'domain'    => 'dibumi.com'
        ]);
    }
}
