<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    public function run()
    {
        $role = new Role();
        $role-> name='guest';
        $role->save();

        $role = new Role();
        $role-> name='user';
        $role->save();

        $role = new Role();
        $role-> name='admin';
        $role->save();

        $role = new Role();
        $role-> name='loader';
        $role->save();
    }
}
