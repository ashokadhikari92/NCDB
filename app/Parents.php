<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model {

	protected  $table = 'parents';

    protected $guarded = array();

    protected  $primaryKey = 'prnt_id';

}
