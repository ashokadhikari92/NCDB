<?php namespace Repo\Repositories\Address;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/28/2015
 * Time: 9:41 AM
 */


    interface AddressInterface{

        public function getLocationByType($ype);

        public function getLocationByParentId($id);
    }