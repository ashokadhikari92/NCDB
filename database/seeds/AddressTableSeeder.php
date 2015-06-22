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

        /*-------------------------------------------------- Regions ---------------------------------------------------------*/
        App\Address::create(['locn_id'=>'1','locn_name'=>'Eastern Region','locn_type'=>'Region','locn_parent_id'=>'0','locn_code'=>'']);
        App\Address::create(['locn_id'=>'2','locn_name'=>'Central Region','locn_type'=>'Region','locn_parent_id'=>'0','locn_code'=>'']);
        App\Address::create(['locn_id'=>'3','locn_name'=>'Western Region','locn_type'=>'Region','locn_parent_id'=>'0','locn_code'=>'']);
        App\Address::create(['locn_id'=>'4','locn_name'=>'Mid-Western Region','locn_type'=>'Region','locn_parent_id'=>'0','locn_code'=>'']);
        App\Address::create(['locn_id'=>'5','locn_name'=>'Far-Western Region','locn_type'=>'Region','locn_parent_id'=>'0','locn_code'=>'']);

        /*-------------------------------------------------- Zones ---------------------------------------------------------*/
        App\Address::create(['locn_id'=>'6','locn_name'=>'Kosi','locn_type'=>'Zone','locn_parent_id'=>'1','locn_code'=>'']);
        App\Address::create(['locn_id'=>'7','locn_name'=>'Mechi','locn_type'=>'Zone','locn_parent_id'=>'1','locn_code'=>'']);
        App\Address::create(['locn_id'=>'8','locn_name'=>'Sagarmatha','locn_type'=>'Zone','locn_parent_id'=>'1','locn_code'=>'']);
        App\Address::create(['locn_id'=>'9','locn_name'=>'Bagmati','locn_type'=>'Zone','locn_parent_id'=>'2','locn_code'=>'']);
        App\Address::create(['locn_id'=>'10','locn_name'=>'Janakpur','locn_type'=>'Zone','locn_parent_id'=>'2','locn_code'=>'']);
        App\Address::create(['locn_id'=>'11','locn_name'=>'Narayani','locn_type'=>'Zone','locn_parent_id'=>'2','locn_code'=>'']);
        App\Address::create(['locn_id'=>'12','locn_name'=>'Dhawalagiri','locn_type'=>'Zone','locn_parent_id'=>'3','locn_code'=>'']);
        App\Address::create(['locn_id'=>'13','locn_name'=>'Gandaki','locn_type'=>'Zone','locn_parent_id'=>'3','locn_code'=>'']);
        App\Address::create(['locn_id'=>'14','locn_name'=>'Lumbini','locn_type'=>'Zone','locn_parent_id'=>'3','locn_code'=>'']);
        App\Address::create(['locn_id'=>'15','locn_name'=>'Bheri','locn_type'=>'Zone','locn_parent_id'=>'4','locn_code'=>'']);
        App\Address::create(['locn_id'=>'16','locn_name'=>'Karnali','locn_type'=>'Zone','locn_parent_id'=>'4','locn_code'=>'']);
        App\Address::create(['locn_id'=>'17','locn_name'=>'Rapti','locn_type'=>'Zone','locn_parent_id'=>'4','locn_code'=>'']);
        App\Address::create(['locn_id'=>'18','locn_name'=>'Mahakali','locn_type'=>'Zone','locn_parent_id'=>'5','locn_code'=>'']);
        App\Address::create(['locn_id'=>'19','locn_name'=>'Seti','locn_type'=>'Zone','locn_parent_id'=>'5','locn_code'=>'']);

        /*-------------------------------------------------- Districts ---------------------------------------------------------*/
        App\Address::create(['locn_id'=>'20','locn_name'=>'Bhaktapur','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'']);
        App\Address::create(['locn_id'=>'21','locn_name'=>'Dhading','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'']);
        App\Address::create(['locn_id'=>'22','locn_name'=>'Lalitpur','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'']);
        App\Address::create(['locn_id'=>'23','locn_name'=>'Kathmandu','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'']);
        App\Address::create(['locn_id'=>'24','locn_name'=>'Kavrepalanchok','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'']);
        App\Address::create(['locn_id'=>'25','locn_name'=>'Nuwakot','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'']);
        App\Address::create(['locn_id'=>'26','locn_name'=>'Rasuwa','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'']);
        App\Address::create(['locn_id'=>'27','locn_name'=>'Sindhupalanchok','locn_type'=>'District','locn_parent_id'=>'9','locn_code'=>'']);

        /*-------------------------------------------------- VDCs/Municipality ---------------------------------------------------------*/

        App\Address::create(['locn_id'=>'28','locn_name'=>'Aalapot','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27001']);
        App\Address::create(['locn_id'=>'29','locn_name'=>'Baadbhanjyang','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27002']);
        App\Address::create(['locn_id'=>'30','locn_name'=>'Bajrayogini(Sankhu)','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27003']);
        App\Address::create(['locn_id'=>'31','locn_name'=>'Balambu','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27004']);
        App\Address::create(['locn_id'=>'32','locn_name'=>'Baluwa','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27005']);
        App\Address::create(['locn_id'=>'33','locn_name'=>'Bhadrabas','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27006']);
        App\Address::create(['locn_id'=>'34','locn_name'=>'Bhimdhunga','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27007']);
        App\Address::create(['locn_id'=>'36','locn_name'=>'Budanilkantha','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27008']);
        App\Address::create(['locn_id'=>'37','locn_name'=>'Chalnakhel','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27009']);
        App\Address::create(['locn_id'=>'38','locn_name'=>'Chapalibhadrakali','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27010']);

        App\Address::create(['locn_id'=>'39','locn_name'=>'Chhaimale','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27011']);
        App\Address::create(['locn_id'=>'40','locn_name'=>'Chouketardahachok','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27012']);
        App\Address::create(['locn_id'=>'41','locn_name'=>'Chunikhel','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27013']);
        App\Address::create(['locn_id'=>'42','locn_name'=>'Daanchhi','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27014']);
        App\Address::create(['locn_id'=>'43','locn_name'=>'Daxinkali','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27015']);
        App\Address::create(['locn_id'=>'44','locn_name'=>'Dhapasi','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27016']);
        App\Address::create(['locn_id'=>'45','locn_name'=>'Dharmasthali','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27017']);
        App\Address::create(['locn_id'=>'46','locn_name'=>'Futung','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27018']);
        App\Address::create(['locn_id'=>'47','locn_name'=>'Gagalphedi','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27019']);
        App\Address::create(['locn_id'=>'48','locn_name'=>'Gokarneswor','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27020']);

        App\Address::create(['locn_id'=>'49','locn_name'=>'Goldhunga','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27021']);
        App\Address::create(['locn_id'=>'50','locn_name'=>'Gonggabu','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27022']);
        App\Address::create(['locn_id'=>'51','locn_name'=>'Gothatar','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27023']);
        App\Address::create(['locn_id'=>'52','locn_name'=>'Ichangnarayan','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27024']);
        App\Address::create(['locn_id'=>'53','locn_name'=>'Indrayani','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27025']);
        App\Address::create(['locn_id'=>'54','locn_name'=>'Jhormahankal','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27026']);
        App\Address::create(['locn_id'=>'55','locn_name'=>'Jitpurphedi','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27027']);
        App\Address::create(['locn_id'=>'56','locn_name'=>'Jorpati','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27028']);
        App\Address::create(['locn_id'=>'57','locn_name'=>'Kabhresthali','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27029']);
        App\Address::create(['locn_id'=>'58','locn_name'=>'Kapan','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27030']);

        App\Address::create(['locn_id'=>'59','locn_name'=>'Kathmandu Metropolitan City','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27031']);
        App\Address::create(['locn_id'=>'60','locn_name'=>'Khadkabhadrakali','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27032']);
        App\Address::create(['locn_id'=>'61','locn_name'=>'Kirtipur Municipality','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27033']);
        App\Address::create(['locn_id'=>'62','locn_name'=>'Lapsephedi','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27034']);
        App\Address::create(['locn_id'=>'63','locn_name'=>'Machhegaun','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27035']);
        App\Address::create(['locn_id'=>'64','locn_name'=>'Mahadevathan','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27036']);
        App\Address::create(['locn_id'=>'65','locn_name'=>'Mahankal','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27037']);
        App\Address::create(['locn_id'=>'66','locn_name'=>'Manmaiju','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27038']);
        App\Address::create(['locn_id'=>'67','locn_name'=>'Matatirtha','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27039']);
        App\Address::create(['locn_id'=>'68','locn_name'=>'Mulpani','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27040']);

        App\Address::create(['locn_id'=>'69','locn_name'=>'Naglebhare','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27041']);
        App\Address::create(['locn_id'=>'70','locn_name'=>'Naikapnayabhanjyang','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27042']);
        App\Address::create(['locn_id'=>'71','locn_name'=>'Naikappuranobhanjyang','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27043']);
        App\Address::create(['locn_id'=>'72','locn_name'=>'Nayapati','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27044']);
        App\Address::create(['locn_id'=>'73','locn_name'=>'Pukhulachhi','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27045']);
        App\Address::create(['locn_id'=>'74','locn_name'=>'Ramkot','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27046']);
        App\Address::create(['locn_id'=>'75','locn_name'=>'Sangla','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27047']);
        App\Address::create(['locn_id'=>'76','locn_name'=>'Satikhel','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27048']);
        App\Address::create(['locn_id'=>'77','locn_name'=>'Satungal','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27049']);
        App\Address::create(['locn_id'=>'78','locn_name'=>'Seuchatar','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27050']);

        App\Address::create(['locn_id'=>'79','locn_name'=>'Sheshnarayan','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27051']);
        App\Address::create(['locn_id'=>'80','locn_name'=>'Sitapaila','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27052']);
        App\Address::create(['locn_id'=>'81','locn_name'=>'Sundarijal','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27053']);
        App\Address::create(['locn_id'=>'82','locn_name'=>'Suntol','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27054']);
        App\Address::create(['locn_id'=>'83','locn_name'=>'Talkududechour','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27055']);
        App\Address::create(['locn_id'=>'84','locn_name'=>'Thankot','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27056']);
        App\Address::create(['locn_id'=>'85','locn_name'=>'Tinthana','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27057']);
        App\Address::create(['locn_id'=>'86','locn_name'=>'Tokhachandeswori','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27058']);
        App\Address::create(['locn_id'=>'87','locn_name'=>'Tokhasarswoti','locn_type'=>'vdc','locn_parent_id'=>'23','locn_code'=>'27059']);


       /* App\Address::create(['locn_id'=>'2','locn_name'=>'Taplejung','locn_type'=>'District','locn_parent_id'=>'1','locn_code'=>'1']);
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
        App\Address::create(['locn_id'=>'52','locn_name'=>'Yamfudin','locn_type'=>'VDC','locn_parent_id'=>'2','locn_code'=>'1050']);*/

    }
}