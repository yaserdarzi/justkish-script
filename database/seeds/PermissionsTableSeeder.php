<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'route_name' => 'roles-manage',
                'description' => '',
                'updated_at' => strtotime(date('Y-m-d H:i:s')),
                'created_at' => strtotime(date('Y-m-d H:i:s'))
            ], [
                'route_name' => 'admin-manage',
                'description' => '',
                'updated_at' => strtotime(date('Y-m-d H:i:s')),
                'created_at' => strtotime(date('Y-m-d H:i:s'))
            ], [
                'route_name' => 'group-features-manage',
                'description' => '',
                'updated_at' => strtotime(date('Y-m-d H:i:s')),
                'created_at' => strtotime(date('Y-m-d H:i:s'))
            ], [
                'route_name' => 'features-manage',
                'description' => '',
                'updated_at' => strtotime(date('Y-m-d H:i:s')),
                'created_at' => strtotime(date('Y-m-d H:i:s'))
            ], [
                'route_name' => 'category-manage',
                'description' => '',
                'updated_at' => strtotime(date('Y-m-d H:i:s')),
                'created_at' => strtotime(date('Y-m-d H:i:s'))
            ]
//            , [
//                'route_name' => 'user-manage',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ], [
//                'route_name' => 'products-manage',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ], [
//                'route_name' => 'agency-manage',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ], [
//                'route_name' => 'products-episode-manage',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ], [
//                'route_name' => 'products-supplier-manage',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ], [
//                'route_name' => 'package-wallet-sharj-manage',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ], [
//                'route_name' => 'tours-manage',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ], [
//                'route_name' => 'shopping-manage',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ], [
//                'route_name' => 'group-features-manage',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ], [
//                'route_name' => 'products-price-age-range-manage',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ], [
//                'route_name' => 'tours-price-age-range-manage',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ], [
//                'route_name' => 'tours-episode-manage',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ], [
//                'route_name' => 'tours-supplier-manage',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ], [
//                'route_name' => 'report-supplier',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ], [
//                'route_name' => 'ticket-manage',
//                'description' => '',
//                'updated_at' => strtotime(date('Y-m-d H:i:s')),
//                'created_at' => strtotime(date('Y-m-d H:i:s'))
//            ]
        ];
        DB::table('permissions')->insert($data);
    }
}
