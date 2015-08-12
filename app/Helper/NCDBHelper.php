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
}