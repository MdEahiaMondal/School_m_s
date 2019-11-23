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
         $this->call(UsersTableSeeder::class);
         $this->call(RoleTableSeeder::class);
         $this->call(PermissionTableSeeder::class);
         $this->call(ClassGroupTableSeeder::class);
            factory(App\User::class, 10)->create();
            factory(App\Parnt::class, 10)->create();

    }
}
