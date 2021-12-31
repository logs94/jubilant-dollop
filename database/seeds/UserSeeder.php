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
              'username' => 'admin001',
              'password' => bcrypt('password')
          ],  [
              'username' => 'admin002',
              'password' => bcrypt('password')
          ],  [
              'username' => 'admin003',
              'password' => bcrypt('password')
          ] ,
        ];
        foreach ($items as $item){

            DB::table('users')->insert($item);
        }
    }
}
