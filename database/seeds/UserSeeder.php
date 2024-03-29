<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
          [
              'email' => 'admin001@admin.com',
              'name' => 'admin001',
              'password' => bcrypt('password'),
              'created_at' => date('d.m.y'),
              'updated_at' => date('d.m.y')
          ],  [
              'name' => 'admin002',
              'email' => 'admin002@admin.com',
              'password' => bcrypt('password'),
                'created_at' => date('d.m.y'),
                'updated_at' => date('d.m.y')
          ],  [
              'name' => 'admin003',
              'email' => 'admin003@admin.com',
              'password' => bcrypt('password'),
                'created_at' => date('d.m.y'),
                'updated_at' => date('d.m.y')
          ] ,
        ];
        foreach ($items as $item){

            DB::table('users')->insert($item);
        }
    }
}
