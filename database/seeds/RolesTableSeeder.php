<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'student',
                'created_at' => '2019-11-13 23:38:33',
                'updated_at' => '2019-11-13 23:38:33',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'teacher',
                'created_at' => '2019-11-14 01:04:25',
                'updated_at' => '2019-11-14 01:04:25',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'admin',
                'created_at' => '2019-11-14 01:04:41',
                'updated_at' => '2019-11-14 01:04:41',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'class-teacher',
                'created_at' => '2019-11-14 01:05:06',
                'updated_at' => '2019-11-14 01:05:06',
            ),
        ));
        
        
    }
}