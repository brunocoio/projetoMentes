<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'id' => 1,
            'state_id' => 1,
            'name' => 'Rio Branco'
        ]);
        City::create([
            'id' => 2,
            'state_id' => 2,
            'name' => 'Maceió'
        ]);
        City::create([
            'id' => 3,
            'state_id' => 3,
            'name' => 'Macapá'
        ]);
        City::create([
            'id' => 4,
            'state_id' => 4,
            'name' => 'Manaus'
        ]);
        City::create([
            'id' => 5,
            'state_id' => 5,
            'name' => 'Salvador'
        ]);
        City::create([
            'id' => 6,
            'state_id' => 6,
            'name' => 'Fortaleza'
        ]);
        City::create([
            'id' => 7,
            'state_id' => 7,
            'name' => 'Brasília'
        ]);
        City::create([
            'id' => 8,
            'state_id' => 8,
            'name' => 'Vitória'
        ]);
        City::create([
            'id' => 9,
            'state_id' => 9,
            'name' => 'Goiânia'
        ]);
        City::create([
            'id' => 10,
            'state_id' => 10,
            'name' => 'São Luís'
        ]);
        City::create([
            'id' => 11,
            'state_id' => 11,
            'name' => 'Cuiabá'
        ]);
        City::create([
            'id' => 12,
            'state_id' => 12,
            'name' => 'Campo grande'
        ]);
        City::create([
            'id' => 13,
            'state_id' => 13,
            'name' => 'Belo Horizonte'
        ]);
        City::create([
            'id' => 14,
            'state_id' => 14,
            'name' => 'Belém'
        ]);
        City::create([
            'id' => 15,
            'state_id' => 15,
            'name' => 'João Pessoa'
        ]);
        City::create([
            'id' => 16,
            'state_id' => 16,
            'name' => 'Curitiba'
        ]);
        City::create([
            'id' => 17,
            'state_id' => 17,
            'name' => 'Recife'
        ]);
        City::create([
            'id' => 18,
            'state_id' => 18,
            'name' => 'Teresina'
        ]);
        City::create([
            'id' => 19,
            'state_id' => 19,
            'name' => 'Rio de Janeiro'
        ]);
        City::create([
            'id' => 20,
            'state_id' => 20,
            'name' => 'Natal'
        ]);
        City::create([
            'id' => 21,
            'state_id' => 21,
            'name' => 'Porto Alegre'
        ]);
        City::create([
            'id' => 22,
            'state_id' => 22,
            'name' => 'Porto Velho'
        ]);
        City::create([
            'id' => 23,
            'state_id' => 23,
            'name' => 'Boa Vista'
        ]);
        City::create([
            'id' => 24,
            'state_id' => 24,
            'name' => 'Florianópolis'
        ]);
        City::create([
            'id' => 25,
            'state_id' => 25,
            'name' => 'São Paulo'
        ]);
        City::create([
            'id' => 26,
            'state_id' => 26,
            'name' => 'Aracajú'
        ]);
        City::create([
            'id' => 27,
            'state_id' => 27,
            'name' => 'Palmas'
        ]);
    }
}
