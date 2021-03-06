<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Produk;
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
            
            'nama_category' => 'Aksesoris',
            'kode_category' => 'A-1',
            'foto_category' => 'a'
        ]);

        Category::create([
            'nama_category' => 'Bed Room',
            'kode_category' => 'A-2',
            'foto_category' => 'a'
        ]);

        Category::create([
            'nama_category' => 'Internal',
            'kode_category' => 'A-3',
            'foto_category' => 'a'
        ]);

        Role::create([
            'name' => 'user'
        ]);

        Role::create([
            'name' => 'admin'
        ]);

        Produk::create([
            'nama_produk' => 'Sprei',
            'id_category' => 1,
            'harga_produk' => '50000',
            'stok_produk' => '5',
            'foto_produk' => 'dawadada',
            'deskripsi' => 'wow'
        ]);
    }
}
