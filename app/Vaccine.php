<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model {

    protected  $table = 'vaccines';

    protected $guarded = array();

    protected  $primaryKey = 'vcin_id';

}
