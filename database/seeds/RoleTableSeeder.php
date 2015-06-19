<?php
use Illuminate\Database\Seeder;
use App\Role;

/**
 * Created by PhpStorm.
 * User: nOt bIG dEaL
 * Date: 6/8/2015
 * Time: 3:23 PM
 */

class RoleTableSeeder extends Seeder{

    public function run()
    {
        DB::table('roles')->delete();

        $owner = new Role();
        $owner->name         = 'owner';
        $owner->display_name = 'Project Owner'; // optional
        $owner->description  = 'User is the owner of a given project'; // optional
        $owner->save();

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();
    }
}