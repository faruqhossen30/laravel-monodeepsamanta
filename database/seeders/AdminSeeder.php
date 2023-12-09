<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ReviewType;
use App\Models\Service\Feature;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        $cats = ['Apps','Dashboard','Landing Page','Website'];

        foreach($cats as $cat){
            Category::create([
                'name'=> $cat,
                'slug'=> Str::slug($cat, '-'),
                'user_id'=>1

            ]);
        }
        $features = [
            'Delivery Time',
            'Number Of Revisions',
            'Number Of Intial Cocepts',
            'Printible Resolution File',
            '3D Mockup',
            'Source Files',
            'Vector File',
            'Social Media Kit',
            'Staionery Design',
            'Favicon'
        ];

        foreach($features as $feature){
            Feature::create([
                'title'=> $feature,
                'value'=> 'none',
                'user_id'=>1
            ]);
        }

        $reviewstype = ['Google Reviews', 'Fiverr','99Design'];
        foreach($reviewstype as $review){
            ReviewType::create([
                'name'=> $review,
                'slug'=> Str::slug($review, '-'),
                'user_id'=>1
            ]);
        }

    }
}
