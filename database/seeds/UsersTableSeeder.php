<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user_id =  DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

  $role = DB::table('roles')->insert([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

  DB::table('model_has_roles')->insert([
            'role_id' => $role,
            'model_type' => 'App\User',
            'model_id' => $user_id,
        ]);



       DB::table('teachers')->insert([
            'user_id' => $user_id,
            'phone' => '01521414629',
            'address' => 'pangsh rajbari',
            'subject' => 'programing',
            'education' => 'diploma',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
        ]);
    }
}
