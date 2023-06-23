<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;




class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert([
        //     'name'=>'sufyan',
        //     'email'=>'sufyan@abc.com',
        //     'password'=>Hash::make('1234')
        // ]);
        DB::table('users')->insert([
            'name'=>'Muzammil',
            'email'=>'Muzammil@abc.com',
            'password'=>Hash::make('1234')
        ]);
    }
}
