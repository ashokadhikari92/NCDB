<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parents', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('first_name',60);
            $table->string('last_name',60);
            $table->string('gender',10);
            $table->string('occupation',60);
            $table->string('religion',60);
            $table->string('native_language',60);
            $table->string('education_level',60);
            $table->string('birth_country',60);
            $table->integer('address');
            $table->string('citizen_of',60);
            $table->string('citizenship_no');
            $table->string('citizenship_issued_district',60);
            $table->boolean('is_foreigner');
            $table->string('passport_issued_country');
            $table->string('password_no');
            $table->string('marriage_register_no');
            $table->date('marriage_date');
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
		Schema::drop('parents');
	}

}
