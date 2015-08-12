<?php namespace App\Helper;


class NCDBHelper{

    public function getVaccilatorList()
    {
        $vaccilators = config('ncdb.vaccilator');

        return $vaccilators;
    }

    public function getBirthTypes()
    {
        return config('ncdb.birth_types');
    }

    public function calculateAge($birthDate)
    {
        return '20 Years 11 Month 23 days';
    }
}