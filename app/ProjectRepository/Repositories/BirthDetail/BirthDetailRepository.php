<?php namespace Repo\Repositories\BirthDetail;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/28/2015
 * Time: 10:01 AM
 */

use Repo\Repositories\ParentsDetail\ParentsDetailRepository as Parents;
use App\BirthDetail as Child;

    class BirthDetailRepository implements BirthDetailInterface{

        public $parent;

        public $child;

        function __construct(Parents $parent,Child $child)
        {
            $this->parent = $parent;

            $this->child = $child;
        }

        public function registerChild($child)
        {
            $father = array(
                'prnt_first_name' => $child['father_first_name'],
                'prnt_last_name'  => $child['father_last_name'],
                'prnt_gender'     => "Male"
            );
            $mother = array(
                'prnt_first_name' => $child['mother_first_name'],
                'prnt_last_name'  => $child['mother_last_name'],
                'prnt_gender'     => "Female"
            );
            $father_id = $this->parent->addParent($father);
            $mother_id = $this->parent->addParent($mother);
            $registration_id = $this->getRegistrationId($child);
            $children = array(
                'brth_registration_id' => $registration_id,
                'brth_first_name' => $child['brth_first_name'],
                'brth_last_name' => $child['brth_last_name'],
                'brth_birth_date' => $child['brth_birth_date'],
                'brth_gender'    => $child['brth_gender'],
                'brth_father'    => $father_id['prnt_id'],
                'brth_mother'    => $mother_id['prnt_id'],
                'brth_grand_father' => $child['grand_father_first_name']." ".$child['grand_father_last_name'],
                'brth_grand_mother' => $child['grand_mother_first_name']." ".$child['grand_mother_last_name']
            );

            $child_id = Child::create($children);


            $result = [
                'success' => true,
                'father_name'  => $father_id['prnt_first_name']." ".$father_id['prtn_last_name'],
                'mother_name'  => $mother_id['prtn_first_name']." ".$mother_id['prnt_last_name'],
                'child_name'   => $child_id['brth_first_name']." ".$child_id['brth_last_name'],
                'grand_father' => $child_id['brth_grand_father'],
                'grand_mother' => $child_id['brth_grand_mother'],
                'birth_date_bs' => $child['brth_birth_date'],
                'birth_date_ad' => $child['brth_birth_date_ad'],
                'birth_district' => $child['brth_district'],
                'birth_vdc' => $child['brth_vdc'],
                'birth_ward_no' => $child['brth_ward_no'],
                'birth_address' => $child['brth_vdc']." Ward No ".$child['brth_ward_no'].$child['brth_district']." District ",
                'registration' => 'EVN1234',
                'registered_date' => $child['form_filled_date'],
                'informer_name' => $child['infr_first_name']." ".$child['infr_last_name'],
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
            if($child_id['brth_gender'] == "Female"){
                $result['g_son_daughter'] = "granddaughter";
                $result['son_daughter'] = "daughter";
            }
            else{
                $result['g_son_daughter'] = "grandson";
                $result['son_daughter'] = "son";
            }
            return $result;

        }

        public function updateChild($child)
        {
            // TODO: Implement updateChild() method.
        }

        public function getChildById($id)
        {
            $child = $this->child->find($id);

            return $child;
        }

        public function getAllChildren()
        {
            return $this->child->all();
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

        public function getRegistrationId($input)
        {

            return "HER345";
        }
    }