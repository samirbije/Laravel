<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->integer('country_id');
			$table->string('approx_contract_value');
			$table->text('location_country');
			$table->integer('client_id');
			$table->string('assignment_duration');
			$table->integer('total_assigned_person');
			$table->text('address');
			$table->string('fund_provided_firm');
			$table->date('start_date');
			$table->date('end_date');
			$table->text('fulltime_employees');
			$table->text('joint_venture_partners');
			$table->text('description');
			$table->text('service_desription');
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
		Schema::drop('projects');
	}

}
