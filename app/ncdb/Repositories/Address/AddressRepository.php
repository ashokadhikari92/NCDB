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

        protected $location;

        function __construct(Location $location)
        {
            $this->location = $location;
        }


        /**
         * @param $id
         * @return mixed
         */
        public function getLocationByParentId($id)
        {
            return $this->location->where('parent_id','=',$id);
        }

        /**
         * @param $id
         * @return mixed
         */
        public function getLocationNameById($id)
        {
            $location = $this->location->find($id);

            return $location['locn_name'];
        }

        /**
         * @param $id
         * @return mixed
         */
        public function getLocationCodeById($id)
        {
            $location = $this->location->find($id);

            return $location['locn_code'];
        }

        /**
         * @param $id
         * @return mixed
         */
        public function getLocationParentIdById($id)
        {
            $location = $this->location->find($id);

            return $location['locn_parent_id'];
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