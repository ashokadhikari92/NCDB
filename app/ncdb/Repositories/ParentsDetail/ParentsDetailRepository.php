<?php namespace Repo\Repositories\ParentsDetail;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/27/2015
 * Time: 4:14 PM
 */

use App\Parents;

    class ParentsDetailRepository implements ParentsDetailInterface{

        public $parent;

        function __construct(Parents $parent)
        {
            $this->parent = $parent;
        }

        public function addParent($parent)
        {
            $parent_id = $this->parent->create($parent);

            return $parent_id;
        }

        public function updateParent($parent)
        {
            // TODO: Implement updateParent() method.
        }

        public function getParentById($id)
        {
            // TODO: Implement getParentById() method.
        }
    }