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

        App\Address::create(['locn_id'=>'1','locn_name'=>'Eastern Region','locn_type'=>'Region','locn_parent_id'=>'0','locn_code'=>'']);

        App\Address::create(['locn_id'=>'2','locn_name'=>'Taplejung','locn_type'=>'District','locn_parent_id'=>'1','locn_code'=>'1']);
        App\Address::create(['locn_id'=>'3','locn_name'=>'Ambegudin','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1001']);
        App\Address::create(['locn_id'=>'4','locn_name'=>'Ankhop','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1002']);
        App\Address::create(['locn_id'=>'5','locn_name'=>'Chaksibote','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1003']);
        App\Address::create(['locn_id'=>'6','locn_name'=>'Change','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1004']);
        App\Address::create(['locn_id'=>'7','locn_name'=>'Dhungesaghu','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1005']);
        App\Address::create(['locn_id'=>'8','locn_name'=>'Dokhu','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1006']);
        App\Address::create(['locn_id'=>'9','locn_name'=>'Dummrise','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1007']);
        App\Address::create(['locn_id'=>'10','locn_name'=>'Ekhabu','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1008']);
        App\Address::create(['locn_id'=>'11','locn_name'=>'Hangdeva','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1009']);
        App\Address::create(['locn_id'=>'12','locn_name'=>'Hangpang','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1010']);
        App\Address::create(['locn_id'=>'13','locn_name'=>'Kalikhola','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1011']);
        App\Address::create(['locn_id'=>'14','locn_name'=>'Khamlung','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1012']);
        App\Address::create(['locn_id'=>'15','locn_name'=>'Khejenim','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1013']);
        App\Address::create(['locn_id'=>'16','locn_name'=>'Khewang','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1014']);
        App\Address::create(['locn_id'=>'17','locn_name'=>'Khokling','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1015']);
        App\Address::create(['locn_id'=>'18','locn_name'=>'Lelep','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1016']);
        App\Address::create(['locn_id'=>'19','locn_name'=>'Limbudin','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1017']);
        App\Address::create(['locn_id'=>'20','locn_name'=>'Lingtep','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1018']);
        App\Address::create(['locn_id'=>'21','locn_name'=>'Linkhim','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1019']);
        App\Address::create(['locn_id'=>'22','locn_name'=>'Liwang','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1020']);
        App\Address::create(['locn_id'=>'23','locn_name'=>'Mamankhe','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1021']);
        App\Address::create(['locn_id'=>'24','locn_name'=>'Mehele','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1022']);
        App\Address::create(['locn_id'=>'25','locn_name'=>'Nalbu','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1023']);
        App\Address::create(['locn_id'=>'26','locn_name'=>'Nankholyang','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1024']);
        App\Address::create(['locn_id'=>'27','locn_name'=>'Nlocn_idhuradin','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1025']);
        App\Address::create(['locn_id'=>'28','locn_name'=>'Olangchunggola','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1026']);
        App\Address::create(['locn_id'=>'29','locn_name'=>'Papung','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1027']);
        App\Address::create(['locn_id'=>'30','locn_name'=>'Pedang','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1028']);
        App\Address::create(['locn_id'=>'31','locn_name'=>'Phakumba','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1029']);
        App\Address::create(['locn_id'=>'32','locn_name'=>'Phawakhola','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1030']);
        App\Address::create(['locn_id'=>'33','locn_name'=>'Phulbari','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1031']);
        App\Address::create(['locn_id'=>'34','locn_name'=>'Phungling','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1032']);
        App\Address::create(['locn_id'=>'35','locn_name'=>'Phurumbu','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1033']);
        App\Address::create(['locn_id'=>'36','locn_name'=>'Sadewa','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1034']);
        App\Address::create(['locn_id'=>'37','locn_name'=>'Sangu','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1035']);
        App\Address::create(['locn_id'=>'38','locn_name'=>'Santhakra','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1036']);
        App\Address::create(['locn_id'=>'39','locn_name'=>'Sanwa','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1037']);
        App\Address::create(['locn_id'=>'40','locn_name'=>'Sawadin','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1038']);
        App\Address::create(['locn_id'=>'41','locn_name'=>'Sawalakhu','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1039']);
        App\Address::create(['locn_id'=>'42','locn_name'=>'Sikaicha','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1040']);
        App\Address::create(['locn_id'=>'43','locn_name'=>'Sinam','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1041']);
        App\Address::create(['locn_id'=>'44','locn_name'=>'Surumakhim','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1042']);
        App\Address::create(['locn_id'=>'45','locn_name'=>'Tapethok','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1043']);
        App\Address::create(['locn_id'=>'46','locn_name'=>'Tellok','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1044']);
        App\Address::create(['locn_id'=>'47','locn_name'=>'Thechambu','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1045']);
        App\Address::create(['locn_id'=>'48','locn_name'=>'Thinglabu','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1046']);
        App\Address::create(['locn_id'=>'49','locn_name'=>'Thukima','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1047']);
        App\Address::create(['locn_id'=>'50','locn_name'=>'Thumbedin','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1048']);
        App\Address::create(['locn_id'=>'51','locn_name'=>'Tiringe','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1049']);
        App\Address::create(['locn_id'=>'52','locn_name'=>'Yamfudin','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1050']);

    }
}