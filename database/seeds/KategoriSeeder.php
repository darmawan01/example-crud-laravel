<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Kategori::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
        ]);
        Kategori::create([
            'name' => 'Sample',
            'slug' => 'sample',
        ]);
    }
}
