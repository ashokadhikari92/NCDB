<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BirthDetail extends Model {

	protected  $table = 'birth_details';

    protected $guarded = array();

    protected  $primaryKey = 'id';

    public $rules = [];

    public $customMessage = [];

}
