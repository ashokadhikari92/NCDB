<?php namespace Repo\Repositories\VaccineProgram;



use App\ChildVaccine;
use Repo\Repositories\BirthDetail\BirthDetailInterface;
use Repo\Repositories\Vaccine\VaccineInterface;
use App\VaccineDose;

class VaccineProgramRepository implements VaccineProgramInterface
{

    public $vaccine;

    public $child;

    function __construct(VaccineInterface $vaccine,BirthDetailInterface $child)
    {
        $this->child = $child;

        $this->vaccine = $vaccine;
    }

    public function store($input, $id)
    {
        $data['chld_vcin_vaccine_id'] = $input['chld_vcin_vaccine_id'];

        $data['chld_vcin_date'] = $input['chld_vcin_date'];

        $data['chld_vcin_dose_no'] = $input['chld_vcin_dose_no'];

        $data['chld_vcin_address'] = $input['chld_vcin_address'];

        $data['chld_vcin_place'] = $input['chld_vcin_place'];

        $data['chld_vcin_vaccillator_id'] = $input['chld_vcin_vaccillator_id'];

        $data['chld_vcin_registration_id'] = $input['chld_vcin_registration_id'];

        $result = ChildVaccine::create($data);

        return $result;

    }

    public function update($input, $id)
    {
        // TODO: Implement update() method.
    }

    public function getListOfVaccineForChild($id)
    {
        $vaccines = $this->vaccine->getAllVaccines();

        foreach($vaccines as $vaccine)
        {
            $givenVaccine = \DB::table('child_vaccines')
            ->where('chld_vcin_registration_id',$id)
            ->where('chld_vcin_vaccine_id')
            ->first();
            $vaccine['which_dose_no'] = 1;
            $vaccineDetail = \DB::table('vaccines')->where('vcin_id',$vaccine->vcin_id);
            if($givenVaccine!= null)
            {
                if($vaccineDetail->vcin_dose>$givenVaccine->chld_vcin_dose_no)
                {
                    $vaccine['which_dose_no'] = $givenVaccine->chld_vcin_dose_no+1;
                }
                $vaccine['which_dose_no'] = 'full';

                $vaccine['previous_date'] = $givenVaccine->chld_vcin_date;
            }

            $nextDate = \DB::table('vaccine_doses')->where('dose_vaccine_id',$vaccine->vcin_id)
                ->where('dose_vaccine_dose_no',$vaccine['which_dose_no'])->get();

            foreach($nextDate as $next)
            {
                $vaccine['next_date'] = $next->dose_interval;
            }

        }
        return $vaccines;
    }
}