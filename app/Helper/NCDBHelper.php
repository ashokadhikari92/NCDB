<?php namespace App\Helper;


class NCDBHelper{

    public function getVaccilatorList()
    {
        $vaccilators = config('ncdb.vaccilator');

        return $vaccilators;
    }
}