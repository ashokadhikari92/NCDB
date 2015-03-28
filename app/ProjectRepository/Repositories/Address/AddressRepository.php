<?php namespace Repo\Repositories\Address;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/28/2015
 * Time: 9:41 AM
 */

    use App\Address as Location;

    class AddressRepository implements AddressInterface{

        public function getLocationByType($type)
        {
           return Location::where('type','=',$type)->get();
        }

        public function getLocationByParentId($id)
        {
            return Location::where('parent_id','=',$id);
        }
    }