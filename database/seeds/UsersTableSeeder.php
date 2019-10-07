<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $root = App\User::create([
            'name'  => 'root',
            'email'     => 'root@dibumi.com',
            'email_verified_at' => '2019-02-23 16:42:24',
            'password'  => \Illuminate\Support\Facades\Hash::make('12345678'),
        ]);
        $root->putRole(\App\Enum\RolesEnum::ROOT);
        $root->userDetail()->create([
            'first_name'    => 'R',
            'middle_name'   => 'OO',
            'last_name'     => 'T',
            'birthday'      => '1999-01-18',
        ]);

        // admin
        $admin = User::create([
            'name'  => 'admin',
            'email'     => 'admin@dibumi.com',
            'email_verified_at' => '2019-02-23 16:42:24',
            'password'  => \Illuminate\Support\Facades\Hash::make('12345678'),
        ]);
        $admin->putRole(\App\Enum\RolesEnum::ADMINISTRATOR);
        $admin->userDetail()->create([
            'first_name'    => 'A',
            'middle_name'   => 'DMI',
            'last_name'     => 'N',
            'birthday'      => '1999-01-18',
        ]);


        // Seeder
        factory(User::class, 10)->create()->each(function ($user){
           $user->userDetail()->save(factory(App\Model\UserDetail::class)->make());
           $user->putRole(\App\Enum\RolesEnum::MEMBER);

//           $user->blogs()->save(factory(App\Model\Blog::class, 5)->make());
//           $user->blogs()->save(factory(App\Model\Blog::class)->make());
//           $user->blogs()->templateDekstop()->save(factory(App\Model\Template::class)->make());


//           $user->blogs()->save(factory(App\Model\Blog::class,2))->create()->each(function ($blogs){
//               $blogs->templateDekstop()->saveMany(factory(App\Model\Template::class)->make());
//           });


        });
    }
}
