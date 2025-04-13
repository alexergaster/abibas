<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

//        Gender::insert([
//            [ 'gender_type' => 'Діти', 'images' => 'c.jpg' ],
//            [ 'gender_type' => 'Жінки', 'images' => 'w.jpg' ],
//            [ 'gender_type' => 'Чоловіки', 'images' => 'm.jpg' ],
//        ]);
//
//        Category::insert([
//            ['name' => 'ВСІ ТОВАРИ', 'images' => 'all.jpg'],
//            ['name' => 'ОДЯГ', 'images' => 'o.jpg'],
//            ['name' => 'ВЗУТТЯ', 'images' => 'f.jpg'],
//            ['name' => 'АКСЕСУАРИ', 'images' => 'a.jpg'],
//            ['name' => 'ВЗУТТЯ ORIGINALS', 'images' => null],
//            ['name' => 'ПОВСЯКДЕННЕ ВЗУТТЯ', 'images' => null],
//            ['name' => 'ВСЕ ЗІ ЗНИЖКОЮ 30%', 'images' => null],
//            ['name' => 'ВЗУТТЯ ДЛЯ БІГУ', 'images' => null],
//            ['name' => 'ФУТБОЛЬНІ БУТСИ', 'images' => null],
//            ['name' => 'ВЗУТТЯ ДЛЯ ТРЕНАЖЕРНОГО ЗАЛУ', 'images' => null],
//        ]);

//        Brand::insert([
//            ['name' => 'ADIZERO ARUKU'],
//            ['name' => 'Superstar'],
//            ['name' => 'Yellow Fish']
//        ]);

//        Product::factory()->count(20)->create();
    }
}
