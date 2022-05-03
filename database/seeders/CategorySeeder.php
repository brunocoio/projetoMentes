<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Supermercado',
            'type' => 'out'
        ]);
        Category::create([
            'name' => 'Adiantamento',
            'type' => 'in'
        ]);
        Category::create([
            'name' => 'Energia',
            'type' => 'out'
        ]);
        Category::create([
            'name' => 'Água',
            'type' => 'out'
        ]);
        Category::create([
            'name' => 'Carro',
            'type' => 'out'
        ]);
        Category::create([
            'name' => 'Pagamento',
            'type' => 'in'
        ]);
        /*DB::table('categories')->insert([
        'name' => Str::random(10),
        'type' => 'out'
        ]);*/
    }
}
