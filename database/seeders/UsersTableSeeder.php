<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $Rguest = Role::where('name','guest')->first();
        $Ruser = Role::where('name','user')->first();
        $Radmin = Role::where('name','admin')->first();
        $Rloader = Role::where('name','loader')->first();

        $user = new User();
        $user->name = 'Guest';
        $user->email = 'guest@guest.com';
        $user->password = Hash::make('guest');
        $user->role_id = $Rguest->id;
        $user->save();
        $user->roles()->attach($Rguest);

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@user.com';
        $user->password = Hash::make('user');
        $user->role_id = $Ruser->id;
        $user->save();
        $user->roles()->attach($Ruser);

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('admin');
        $user->role_id = $Radmin->id;
        $user->save();
        $user->roles()->attach($Radmin);

        $user = new User();
        $user->name = 'Loader';
        $user->email = 'loader@loader.com';
        $user->password = Hash::make('loader');
        $user->role_id = $Rloader->id;
        $user->save();
        $user->roles()->attach($Rloader);
    }
}
