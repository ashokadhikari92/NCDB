<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccineDosesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vaccine_doses', function(Blueprint $table)
		{
			$table->increments('dose_id');
            $table->integer('dose_vaccine_id')->unsigned();
            $table->integer('dose_vaccine_dose_no');
            $table->string('dose_interval');
			$table->timestamps();
            $table->foreign('dose_vaccine_id')
                ->references('vcin_id')
                ->on('vaccines')
                ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vaccine_doses');
	}

}
