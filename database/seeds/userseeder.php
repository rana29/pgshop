<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           Db::table('users')->insert([

        
        	'name'=>'Md.Rajib',
        	'email'=>'razibahmed@gmail.com',
        	'password'=>bcrypt('123'),

        ]);

        
    }
}
