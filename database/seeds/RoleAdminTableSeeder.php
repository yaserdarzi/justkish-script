<?php

use Illuminate\Database\Seeder;

class RoleAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_admin')->insert([
            [
                'admin_id' => 1,
                'role_id' => 1,
            ]
        ]);
    }
}
