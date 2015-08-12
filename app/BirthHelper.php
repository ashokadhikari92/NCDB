<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BirthHelper extends Model {

	protected $table = 'birth_helpers';

    protected $guarded = [];

    protected $primaryKey = 'hlpr_id';
}
