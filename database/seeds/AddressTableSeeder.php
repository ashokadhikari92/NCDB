<?php
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/27/2015
 * Time: 4:55 PM
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AddressTableSeeder extends Seeder{

    public function run()
    {
        DB::table('locations')->delete();

        App\Address::create(['id'=>'1','location_name'=>'Taplejung','type'=>'District','parent_id'=>'0','code'=>'1']);
        App\Address::create(['id'=>'2','location_name'=>'Ambegudin','type'=>'VDC','parent_id'=>'1','code'=>'1001']);
        App\Address::create(['id'=>'3','location_name'=>'Ankhop','type'=>'VDC','parent_id'=>'1','code'=>'1002']);
        App\Address::create(['id'=>'5','location_name'=>'Chaksibote','type'=>'VDC','parent_id'=>'1','code'=>'1003']);
        App\Address::create(['id'=>'6','location_name'=>'Change','type'=>'VDC','parent_id'=>'1','code'=>'1004']);
        App\Address::create(['id'=>'7','location_name'=>'Dhungesaghu','type'=>'VDC','parent_id'=>'1','code'=>'1005']);
        App\Address::create(['id'=>'8','location_name'=>'Dokhu','type'=>'VDC','parent_id'=>'1','code'=>'1006']);
        App\Address::create(['id'=>'9','location_name'=>'Dummrise','type'=>'VDC','parent_id'=>'1','code'=>'1007']);
    }
}