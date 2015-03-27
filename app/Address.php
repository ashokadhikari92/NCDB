<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

	public $table = 'location';

    public $guarded = [];

    public $primaryKey = 'id';

}
