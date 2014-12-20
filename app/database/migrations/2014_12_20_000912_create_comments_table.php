<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function($table) {

			# AI, PK
			$table->increments('id');

			# Created_at, Updated_at columns
			$table->timestamps();

			# General data
			$table->string('subject'); 
			$table->text('comment_text');
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
		Schema::drop('comments');
	}
}