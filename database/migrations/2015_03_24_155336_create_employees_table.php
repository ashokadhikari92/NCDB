<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('empl_id');
            $table->string('empl_employee_code',50);
            $table->string('empl_first_name',50);
            $table->string('empl_last_name',50);
            $table->string('empl_email',50);
            $table->string('empl_phone',15);
            $table->string('empl_mobile',15);
            $table->string('empl_gender',10);
            $table->integer('empl_address');
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
		Schema::drop('employees');
	}

}
