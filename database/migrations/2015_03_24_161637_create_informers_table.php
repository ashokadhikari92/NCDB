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
			$table->increments('infr_id');
            $table->boolean('infr_is_parent');
            $table->integer('infr_parent_id');
            $table->string('infr_first_name',60);
            $table->string('infr_last_name',60);
            $table->string('infr_relation',60);
            $table->boolean('infr_is_foreigner');
            $table->string('infr_citizenship_no');
            $table->date('infr_citizenship_issued_date');
            $table->string('infr_citizenship_issued_district',60);
            $table->string('infr_passport_issued_country',60);
            $table->string('infr_passport_no');
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
