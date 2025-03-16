<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            ['name' => 'CatEye'],
            ['name' => 'Rectangle'],
            ['name' => 'Square'],
            ['name' => 'Round'],
            ['name' => 'Oval'],
            ['name' => 'Aviator'],
            ['name' => 'Wayfarer'],
            ['name' => 'Clubmaster'],
            ['name' => 'Rimless'],
            ['name' => 'Semi-Rimless'],
            ['name' => 'Browline'],
            ['name' => 'Shield'],
            ['name' => 'Wrap'],
            ['name' => 'Goggles'],
            ['name' => 'Clip-on'],
            ['name' => 'Flip-up'],
            ['name' => 'Fitover'],
            ['name' => 'Computer Glasses'],
            ['name' => 'Reading Glasses'],
            ['name' => 'Safety Glasses'],
            ['name' => 'Sunglasses'],
            ['name' => 'Prescription Glasses'],
            ['name' => 'Blue Light Blocking Glasses'],
            ['name' => 'Photochromic Glasses'],
            ['name' => 'Polarized Glasses'],
            ['name' => 'Gradient Glasses'],
            ['name' => 'Mirrored Glasses'],
            ['name' => 'Tinted Glasses'],
            ['name' => 'Anti-Reflective Glasses'],
            ['name' => 'Scratch-Resistant Glasses'],
            ['name' => 'UV Protection Glasses'],
            ['name' => 'Anti-Fog Glasses'],
            ['name' => 'Anti-Static Glasses'],
            ['name' => 'Anti-Blue Light Glasses'],
            ['name' => 'Anti-Glare Glasses'],
            ['name' => 'Anti-Scratch'],
        ]);
    }
}

