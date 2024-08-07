<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       user::insert([
        'name'          => 'Admin SMK',
        'email'         => 'Adminsmk@gmail.com',
        'password'      =>  Hash::make('smknst17'),
        'type'          => '1',
        
       ]);
    }
}
