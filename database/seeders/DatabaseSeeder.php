<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        
        Category::create([
            'nama_category' => 'Aksesoris'
            
        ]);

        Category::create([
            'nama_category' => 'Bed Room'
        
        ]);

        Category::create([
            'nama_category' => 'Internal'

        ]);

        Role::create([
            'name' => 'user'
        ]);

        Role::create([
            'name' => 'admin'
        ]);
    }
}
