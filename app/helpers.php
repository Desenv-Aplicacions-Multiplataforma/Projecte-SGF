<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;

if(! function_exists('create_ferran_user')) {
    function create_ferran_user()
    {


        $user = User::create([
            'name' => 'Ferran Muñoz Zafra',
            'email' => 'fmunoz@iesebre.com',
            'password' => Hash::make('12345678'),
        ]);

        $user->save();
    }
}
    if(! function_exists('create_sergic_user')) {
        function create_sergic_user()
        {


            $user = User::create([
                'name' => 'Sergi Casado Pellisa',
                'email' => 'sergicasado1@iesebre.com',
                'password' => Hash::make('12345678'),
            ]);

            $user->save();
        }
    }
        if(! function_exists('create_gabriel_user')) {
            function create_gabriel_user()
            {


                $user = User::create([
                    'name' => 'Gabriel Urs',
                    'email' => 'gabrielionuturs@iesebre.com',
                    'password' => Hash::make('12345678'),
                ]);

                $user->save();
            }
        }
    if(! function_exists('create_sergi_user')) {
        function create_sergi_user() {

            $user = User::create([
                'name' => 'Sergi Tur Badenas',
                'email' => 'sergiturbadenas@gmail.com',
                'password' => Hash::make('12345678'),
            ]);

            $user->save();
        }
    }

