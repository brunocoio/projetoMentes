<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //validate user
        $items =[
            'name'=>"admin",
            'email'=>"admin@admin.com.br",
            'password'=>bcrypt("admin123"),
        ];
        if (User::where('email','=',$items['email'])->count()) {
            $user = User::where('email','=',$items['email'])->first();
            $user->update($items);
            echo"Usuário alterado";
        } else {
            User::create($items);
            echo"Usuário gerado";
        }
    }
}
