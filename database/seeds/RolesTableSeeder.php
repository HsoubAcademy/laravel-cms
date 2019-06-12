<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'role' => 'admin'
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'role' => 'user'
        ]);
    }
}
