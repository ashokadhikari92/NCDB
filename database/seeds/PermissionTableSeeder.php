<?php


use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder{

    public function run()
    {
        DB::table('permissions')->delete();

        App\Permission::create(['id'=>'1','name'=>'birth_registration','display_name'=>'Birth Registration','type'=>'main','url'=>'/birth_details','parent_id'=>'0']);
        App\Permission::create(['id'=>'2','name'=>'birth_add','display_name'=>'Add','type'=>'third','url'=>'/birth_details/create','parent_id'=>'1']);
        App\Permission::create(['id'=>'3','name'=>'birth_edit','display_name'=>'Edit','type'=>'third','url'=>'/birth_details/{id}/edit','parent_id'=>'1']);
        App\Permission::create(['id'=>'4','name'=>'birth_delete','display_name'=>'Delete','type'=>'third','url'=>'4','parent_id'=>'1']);
        App\Permission::create(['id'=>'5','name'=>'vaccination','display_name'=>'Vaccination','type'=>'main','url'=>'/child_vaccines','parent_id'=>'0']);
        App\Permission::create(['id'=>'6','name'=>'vaccination_add','display_name'=>'Add','type'=>'third','url'=>'6','parent_id'=>'5']);
        App\Permission::create(['id'=>'7','name'=>'vaccination_edit','display_name'=>'Edit','type'=>'third','url'=>'7','parent_id'=>'5']);
        App\Permission::create(['id'=>'8','name'=>'vaccination_delete','display_name'=>'Delete','type'=>'third','url'=>'8','parent_id'=>'5']);
        App\Permission::create(['id'=>'9','name'=>'education','display_name'=>'Education','type'=>'main','url'=>'/educations','parent_id'=>'0']);
        App\Permission::create(['id'=>'10','name'=>'user_management','display_name'=>'User Management','type'=>'setting','url'=>'/users','parent_id'=>'0']);
        App\Permission::create(['id'=>'11','name'=>'Roles','display_name'=>'Roles','type'=>'setting','url'=>'/roles','parent_id'=>'0']);
        App\Permission::create(['id'=>'12','name'=>'Vaccine','display_name'=>'Vaccine','type'=>'main','url'=>'/vaccines','parent_id'=>'0']);

    }
}