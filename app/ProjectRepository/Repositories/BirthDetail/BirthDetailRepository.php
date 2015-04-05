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
                'gender'     => 'Male',
                'occupation' => $child['father_occupation']
            );
            $mother = array(
                'first_name' => $child['mother_first_name'],
                'last_name'  => $child['mother_last_name'],
                'gender'     => 'Female',
                'occupation' => $child['mother_occupation']
            );
            $father_id = $this->parent->addParent($father);
            $mother_id = $this->parent->addParent($mother);
            $child = array(
                'registration_id' => 'HE00989',
                'first_last' => $child['child_first_name'],
                'last_name' => $child['child_last_name'],
                'birth_date' => $child['child_birth_date_bs'],
                'gender'    => $child['child_gender'],
                'father'    => $father_id['id'],
                'mother'    => $mother_id['id']
            );

            $child_id = Child::create($child);

            $result = [
                'success' => true,
                'father'  => $father_id['id'],
                'mother'  => $mother_id['id'],
                'child'   => $child_id['id'],
                'registration' => 'EVN1234'
            ];

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
    }