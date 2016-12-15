<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectPresentationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_presentations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id');
			$table->string('report_name');
			$table->enum('is_active',array('0','1'));
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
		Schema::drop('project_presentations');
	}

}
