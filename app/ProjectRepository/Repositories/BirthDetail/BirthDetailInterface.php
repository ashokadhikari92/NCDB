<?php namespace Repo\Repositories\BirthDetail;
/**
 * Created by PhpStorm.
 * User: Ashok
 * Date: 3/27/2015
 * Time: 3:56 PM
 */



 interface BirthDetailInterface{

     public function registerChild($child);

     public function updateChild($child);

     public function getRegistrationId($input);

     public function getChildById($id);

     public function getAllChildren();

     public function deleteBirthDetail();

     public function getRules();

     public function getCustomMessage();
 }