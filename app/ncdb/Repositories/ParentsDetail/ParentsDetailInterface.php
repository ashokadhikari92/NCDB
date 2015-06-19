<?php namespace Repo\Repositories\ParentsDetail;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/27/2015
 * Time: 4:03 PM
 */


    interface ParentsDetailInterface{

        public function addParent($parent);

        public function updateParent($parent);

        public function getParentById($id);
    }