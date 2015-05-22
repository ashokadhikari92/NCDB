<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccineDiseasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vaccine_diseases', function(Blueprint $table)
		{
			$table->increments('vcin_dses_id');
            $table->integer('vcin_dses_vaccine_id')->unsigned();
            $table->integer('vcin_dses_disease_id')->unsigned();
			$table->timestamps();
            $table->foreign('vcin_dses_vaccine_id')
                ->references('vcin_id')
                ->on('vaccines')
                ->onDelete('cascade');
            $table->foreign('vcin_dses_disease_id')
                ->references('dses_id')
                ->on('diseases')
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
		Schema::drop('vaccine_diseases');
	}

}
