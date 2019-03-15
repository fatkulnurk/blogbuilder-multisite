<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // root
        \App\User::create([
            'name'  => 'root',
            'email'     => 'root@dibumi.com',
            'email_verified_at' => '2019-02-23 16:42:24',
            'password'  => \Illuminate\Support\Facades\Hash::make('12345678'),
            'roles'     => \App\Enum\RolesEnum::ROOT,
        ])->userDetail()->create([
            'first_name'    => 'R',
            'middle_name'   => 'OO',
            'last_name'     => 'T',
            'birthday'      => '1999-01-18',
        ]);

        // admin
        \App\User::create([
            'name'  => 'admin',
            'email'     => 'admin@dibumi.com',
            'email_verified_at' => '2019-02-23 16:42:24',
            'password'  => \Illuminate\Support\Facades\Hash::make('12345678'),
            'roles'     => \App\Enum\RolesEnum::ADMINISTRATOR,
        ])->userDetail()->create([
            'first_name'    => 'A',
            'middle_name'   => 'DMI',
            'last_name'     => 'N',
            'birthday'      => '1999-01-18',
        ]);

        // SECURITY
        \App\User::create([
            'name'  => 'security',
            'email'     => 'security@dibumi.com',
            'email_verified_at' => '2019-02-23 16:42:24',
            'password'  => \Illuminate\Support\Facades\Hash::make('12345678'),
            'roles'     => \App\Enum\RolesEnum::SECURITY,
        ])->userDetail()->create([
            'first_name'    => 'S',
            'middle_name'   => 'ECURIT',
            'last_name'     => 'Y',
            'birthday'      => '1999-01-18',
        ]);
        \App\User::create([
            'name'  => 'satpam',
            'email'     => 'satpam@dibumi.com',
            'email_verified_at' => '2019-02-23 16:42:24',
            'password'  => \Illuminate\Support\Facades\Hash::make('12345678'),
            'roles'     => \App\Enum\RolesEnum::SECURITY,
        ])->userDetail()->create([
            'first_name'    => 'S',
            'middle_name'   => 'ATPA',
            'last_name'     => 'M',
            'birthday'      => '1999-01-18',
        ]);

        // Seeder
        factory(App\User::class, 100)->create()->each(function ($user){
           $user->userDetail()->save(factory(App\Model\UserDetail::class)->make());

//           $user->blogs()->save(factory(App\Model\Blog::class, 5)->make());
           $user->blogs()->save(factory(App\Model\Blog::class)->make());
//           $user->blogs()->templateDekstop()->save(factory(App\Model\Template::class)->make());


//           $user->blogs()->save(factory(App\Model\Blog::class,2))->create()->each(function ($blogs){
//               $blogs->templateDekstop()->saveMany(factory(App\Model\Template::class)->make());
//           });


        });
    }
}
