<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BirthDetail extends Model {

	protected  $table = 'birth_details';

    protected $guarded = array();

    protected  $primaryKey = 'brth_id';

    public $rules = [];

    public $customMessage = [];

}
