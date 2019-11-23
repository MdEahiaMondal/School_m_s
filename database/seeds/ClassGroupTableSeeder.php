<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ClassGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_groups')->insert([
            'class_group_name' => 'civil',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('class_groups')->insert([
            'class_group_name' => 'mechnical',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('class_groups')->insert([
            'class_group_name' => 'electrical',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('class_groups')->insert([
            'class_group_name' => 'science',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('class_groups')->insert([
            'class_group_name' => 'ecommerce',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
