<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Super Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123')
        ]);

        $cats = ['one','two','three','four','five'];

        foreach($cats as $cat){
            Category::create([
                'name'=> $cat,
                'slug'=>$cat,
                'user_id'=>1

            ]);
        }

    }
}
