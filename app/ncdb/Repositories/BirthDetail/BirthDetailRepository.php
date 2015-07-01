<?php namespace Repo\Repositories\BirthDetail;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/28/2015
 * Time: 10:01 AM
 */

use League\Flysystem\Exception;
use Repo\Repositories\Address\AddressRepository;
use Repo\Repositories\ParentsDetail\ParentsDetailRepository as Parents;
use App\BirthDetail as Child;

    class BirthDetailRepository implements BirthDetailInterface{

        public $parent;

        public $child;

        protected $location;

        function __construct(Parents $parent,Child $child,AddressRepository $location)
        {
            $this->parent = $parent;

            $this->child = $child;

            $this->location = $location;
        }

        public function registerChild($child)
        {
            $father = array(
                'prnt_first_name' => $child['father_first_name'],
                'prnt_last_name'  => $child['father_last_name'],
                'prnt_full_name_nepali' => $child['father_full_name'],
                'prnt_gender'     => "Male",
                'prnt_address' => $child['father_ward_no'],
                'prnt_citizenship_no' => $child['father_citizenship_no'],
                'prnt_citizenship_issued_district' => $child['father_citizenship_issued_district']
            );
            $mother = array(
                'prnt_first_name' => $child['mother_first_name'],
                'prnt_last_name'  => $child['mother_last_name'],
                'prnt_full_name_nepali' => $child['mother_full_name'],
                'prnt_gender'     => "Female",
                'prnt_address' => '',
                'prnt_citizenship_no' => '',
                'prnt_citizenship_issued_district' => ''
            );
            $gfather = array(
                'prnt_first_name' => $child['gfather_first_name'],
                'prnt_last_name'  => $child['gfather_last_name'],
                'prnt_full_name_nepali' => $child['gfather_full_name'],
                'prnt_gender'     => "Male",
                'prnt_address' => '',
                'prnt_citizenship_no' => '',
                'prnt_citizenship_issued_district' => ''
            );
            $father = $this->parent->addParent($father);
            $mother = $this->parent->addParent($mother);
            $gfather = $this->parent->addParent($gfather);
            $registration_id = $this->getRegistrationId($child);
            $children = array(
                'brth_registration_id' => $registration_id,
                'brth_first_name' => $child['brth_first_name'],
                'brth_last_name' => $child['brth_last_name'],
                'brth_full_name_nepali' => $child['brth_full_name'],
                'brth_birth_date_bs' => $child['brth_birth_date_bs'],
                'brth_birth_date_ad' => $child['brth_birth_date_ad'],
                'brth_gender'    => $child['brth_gender'],
                'brth_father'    => $father['prnt_id'],
                'brth_mother'    => $mother['prnt_id'],
                'brth_grand_father' => $gfather['prnt_id'],
                'brth_birth_address' =>$child['brth_ward_no'],
                'brth_registered_date' => $child['form_filled_date']

            );

            $child_id = Child::create($children);


            $result = [
                'success' => true,
                'father_name'  => $father['prnt_first_name']." ".$father['prtn_last_name'],
                'mother_name'  => $mother['prtn_first_name']." ".$mother['prnt_last_name'],
                'child_name'   => $child_id['brth_first_name']." ".$child_id['brth_last_name'],
                'grand_father' => $child_id['brth_grand_father'],
                'grand_mother' => $child_id['brth_grand_mother'],
                'birth_date_bs' => $child['brth_birth_date_bs'],
                'birth_date_ad' => $child['brth_birth_date_ad'],
                'birth_district' => $child['brth_district'],
                'birth_vdc' => $child['brth_vdc'],
                'birth_ward_no' => $child['brth_ward_no'],
                'birth_address' => $child['brth_vdc']." Ward No ".$child['brth_ward_no'].$child['brth_district']." District ",
                'registration' => $child_id['brth_registration_id'],
                'registered_date' => $child['form_filled_date'],
                'informer_name' => $child['informer_first_name']." ".$child['informer_last_name'],
                'father_district' => $child['father_district'],
                'father_vdc' => $child['father_vdc'],
                'father_ward_no' => $child['father_ward_no'],
                'father_citizenship_issued_district' => $child['father_citizenship_issued_district'],
                'father_citizenship_issued_date' => $child['father_citizenship_issued_date'],
                'father_citizenship_no' => $child['father_citizenship_no'],
                'mother_citizenship_issued_district' => $child['mother_citizenship_issued_district'],
                'mother_citizenship_issued_date' => $child['mother_citizenship_issued_date'],
                'mother_citizenship_no' => $child['mother_citizenship_no']
            ];
            if($child_id['brth_gender'] === "Female"){
                $result['g_son_daughter'] = "granddaughter";
                $result['son_daughter'] = "daughter";
            }
            else if($child_id['brth_gender'] === "Male"){
                $result['g_son_daughter'] = "grandson";
                $result['son_daughter'] = "son";
            }
            else{
                $result['g_son_daughter'] = "grand child";
                $result['son_daughter'] = "child";
            }
            return $result;

        }

        public function updateChild($child,$id)
        {
            $result = array();
            try{
                $result['child'] = $this->child->find($id)->update($child);

                $result['success'] = true;

                $result['message'] = "Successfully Updated";
            }catch (Exception $e){

                $result['success'] = false;

                $result['message'] = "Something gone wrong while updating";

                $result['exception'] = $e;
        }
            return $result;
        }

        public function getChildById($id)
        {
            $child = $this->child->find($id);

            return $child;
        }

        public function getAllChildren()
        {
            $data = $this->child->all();

            foreach($data as $child)
            {
                $child['brth_father'] = $this->parent->getParentNameById($child['brth_father']);

                $child['brth_mother'] = $this->parent->getParentNameById($child['brth_mother']);
            }
            return $data;
        }

        public function getRules()
        {
            return $this->child->rules;
        }

        public function getCustomMessage()
        {
            return $this->child->customMessage;
        }

        public function deleteBirthDetail()
        {
            // TODO: Implement deleteBirthDetail() method.
        }

        /**
         * @param $input
         * @internal param AddressRepository $location
         * @return string
         */
        public function getRegistrationId($input)
        {
            dd($input);
            $zone = $this->location->getLocationCodeById($input['brth_zone']);

            $ward_no = $this->location->getLocationCodeById($input['brth_ward_no']);;//$input['brth_ward_no'];

            $sn = 232;

            return $zone."-".$ward_no."-071/72-".$sn;
        }

        public function getChildLocation($id)
        {
            $child = $this->child->find($id);

            return $this->location->getChildLocationInJson($child->brth_birth_address);

        }

        public function getChildByRegistrationId($id)
        {
            return \DB::table('birth_details')->where('brth_registration_id',$id)->first();
        }
    }