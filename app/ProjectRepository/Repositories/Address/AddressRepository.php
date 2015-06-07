<?php namespace Repo\Repositories\Address;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/28/2015
 * Time: 9:41 AM
 */

    use App\Address as Location;

    /**
     * Class AddressRepository
     * @package Repo\Repositories\Address
     */
    class AddressRepository implements AddressInterface{


        /**
         * @param $id
         * @return mixed
         */
        public function getLocationByParentId($id)
        {
            return Location::where('parent_id','=',$id);
        }

        /**
         * @param $id
         */
        public function getLocationNameById($id)
        {
            // TODO: Implement getLocationNameById() method.
        }

        /**
         * @param $id
         */
        public function getLocationCodeById($id)
        {
            // TODO: Implement getLocationCodeById() method.
        }

        /**
         * @param $id
         */
        public function getLocationParentIdById($id)
        {
            // TODO: Implement getLocationParentIdById() method.
        }

        /**
         * @param $id
         * @return mixed
         */
        public function getAllLocationByParentId($id)
        {
            return Location::where('parent_id','=',$id);
        }
    }