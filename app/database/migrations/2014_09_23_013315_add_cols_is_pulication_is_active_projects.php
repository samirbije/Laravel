<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColsIsPulicationIsActiveProjects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('projects', function(Blueprint $table) {
			 $table->enum('is_publication',array('0','1'));
			 $table->enum('is_active',array('0','1'));
		});			
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
