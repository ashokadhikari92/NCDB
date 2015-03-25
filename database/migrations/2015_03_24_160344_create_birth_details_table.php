<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirthDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('birth_details', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('registration_id');
            $table->string('first_last',60);
            $table->string('last_name',60);
            $table->dateTime('birth_date');
            $table->string('birth_place',60);
            $table->string('birth_helper',60);
            $table->string('gender',10);
            $table->string('birth_type',10);
            $table->string('caste',50);
            $table->boolean('is_disable');
            $table->string('disability_name',60);
            $table->integer('birth_address');
            $table->boolean('is_born_in_foreign');
            $table->string('foreign_birth_country',60);
            $table->string('foreign_birth_address',60);
            $table->dateTime('registered_date');
            $table->string('grand_father',100);
            $table->string('grand_mother',100);
            $table->integer('father');
            $table->integer('mother');
            $table->integer('registered_by');
            $table->integer('informed_by');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('birth_details');
	}

}
