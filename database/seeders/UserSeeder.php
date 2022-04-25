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
        $itens =[
            'name'=>"admin",
            'email'=>"admin@admin.com.br",
            'password'=>bcrypt("admin123"),
        ];
        if (User::where('email','=',$itens['email'])->count()) {
            $user = User::where('email','=',$itens['email'])->first();
            $user->update($itens);
            echo"Usuário alterado";
        } else {
            User::create($itens);
            echo"Usuário gerado";
        }

    }
}
