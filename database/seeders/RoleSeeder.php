<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        $role  = new Role();
        $role->name= "owner";
        $role->save();


        $role  = new Role();
        $role->name= "user";
        $role->save();

    }
}
