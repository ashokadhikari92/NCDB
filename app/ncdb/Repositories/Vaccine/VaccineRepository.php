<?php namespace Repo\Repositories\Vaccine;


use App\Vaccine;
use League\Flysystem\Exception;

class VaccineRepository implements VaccineInterface
{
    public $vaccine;

    function __construct(Vaccine $vaccine)
    {
        $this->vaccine = $vaccine;
    }


    public function storeVaccine($input)
    {
        $result = array();

        try{

            $result['vaccine'] = $this->vaccine->create($input);

            $result['success'] = true;

            $result['message'] = "Successfully Added";
        }catch (Exception $e){

            $result['success'] = false;

            $result['message'] = "Something gone wrong while Adding";

            $result['exception'] = $e;
        }

        return $result;
    }

    public function updateVaccine($input, $id)
    {
        $result = array();

        try{

            $result['vaccine'] = $this->vaccine->find($id)->update($input);

            $result['success'] = true;

            $result['message'] = "Successfully Updated";
        }catch (Exception $e){

            $result['success'] = false;

            $result['message'] = "Something gone wrong while Updating";

            $result['exception'] = $e;
        }

        return $result;
    }

    public function getAllVaccines()
    {
        return $this->vaccine->all();
    }

    public function getVaccineById($id)
    {
        return $this->vaccine->find($id);
    }

    public function delete($id)
    {

        $result = [];

        try{
            $result['result'] = $this->vaccine->find($id)->delete();

            $result['success'] = true;

            $result['message'] = 'Vaccine is deleted Successfully';
        }catch (Exception $e){
            $result['result'] = $e;

            $result['success'] = false;

            $result['message'] = 'There is some problem to delete the vaccine';
        }
        return $result;
    }
}