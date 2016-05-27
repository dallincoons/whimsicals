<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    /**
     * laravel will automaticall run this method
     * think of it as as the fire method
     */
    public function run()
    {

        User::create([
            'name' => 'Dallin',
            'email' => 'dallinis@hotmail.com',
            'password' => Hash::make('coondog62')
        ]);

        User::create([
            'name' => 'Emkily',
            'email' => 'emilylimabean@gmail.com',
            'password' => Hash::make('Itsasunnyday2')
        ]);

    }

}