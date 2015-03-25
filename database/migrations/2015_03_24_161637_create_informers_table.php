<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('informers', function(Blueprint $table)
		{
			$table->increments('id');
            $table->boolean('is_parent');
            $table->integer('parent_id');
            $table->string('first_name',60);
            $table->string('last_name',60);
            $table->string('relation',60);
            $table->boolean('is_foreigner');
            $table->string('citizenship_no');
            $table->date('citizenship_issued_date');
            $table->string('citizenship_issued_district',60);
            $table->string('passport_issued_country',60);
            $table->string('passport_no');
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
		Schema::drop('informers');
	}

}
