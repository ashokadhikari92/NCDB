<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildVaccine extends Model {

    protected  $table = 'child_vaccines';

    protected $guarded = array();

    protected  $primaryKey = 'chld_vcin_id';

}
