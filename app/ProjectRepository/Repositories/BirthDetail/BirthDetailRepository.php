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
                'first_name' => $child['father_first_name'],
                'last_name'  => $child['father_last_name'],
                'gender'     => "Male"
            );
            $mother = array(
                'first_name' => $child['mother_first_name'],
                'last_name'  => $child['mother_last_name'],
                'gender'     => "Female"
            );
            $father_id = $this->parent->addParent($father);
            $mother_id = $this->parent->addParent($mother);
            $children = array(
                'registration_id' => 'HE00989',
                'first_last' => $child['child_first_name'],
                'last_name' => $child['child_last_name'],
                'birth_date' => $child['child_birth_date_bs'],
                'gender'    => $child['child_gender'],
                'father'    => $father_id['id'],
                'mother'    => $mother_id['id'],
                'grand_father' => $child['grand_father_first_name']." ".$child['grand_father_last_name'],
                'grand_mother' => $child['grand_mother_first_name']." ".$child['grand_mother_last_name']
            );

            $child_id = Child::create($children);


            $result = [
                'success' => true,
                'father_name'  => $father_id['first_name']." ".$father_id['last_name'],
                'mother_name'  => $mother_id['first_name']." ".$mother_id['last_name'],
                'child_name'   => $child_id['first_name']." ".$child_id['last_name'],
                'grand_father' => $child_id['grand_father'],
                'grand_mother' => $child_id['grand_mother'],
                'birth_date_bs' => $child['child_birth_date_bs'],
                'birth_date_ad' => $child['child_birth_date_ad'],
                'birth_district' => $child['birth_district'],
                'birth_vdc' => $child['birth_vdc'],
                'birth_ward_no' => $child['birth_ward_no'],
                'birth_address' => $child['birth_vdc']." Ward No ".$child['birth_ward_no'].$child['birth_district']." District ",
                'registration' => 'EVN1234',
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
            if($child_id['gender'] == "Female"){
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
            // TODO: Implement getChildById() method.
        }

        public function getAllChildren()
        {
            // TODO: Implement getAllChildren() method.
        }

        public function getRules()
        {
            return $this->child->rules;
        }

        public function getCustomMessage()
        {
            return $this->child->customMessage;
        }
    }