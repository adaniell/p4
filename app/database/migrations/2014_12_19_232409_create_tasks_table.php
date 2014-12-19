<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the tasks table
		Schema::create('tasks', function($table) {

			# AI, PK
			$table->increments('id');

			# Created_at, Updated_at columns
			$table->timestamps();

			# General data
			$table->string('title');
			$table->string('description');
			$table->boolean('complete');
			$table->integer('user_id')->unsigned();
			

			# Define foreign keys...
			$table->foreign('user_id')
				->references('id')->on('users')
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
		// Drop the tasks table
		Schema::drop('tasks');
	}

}